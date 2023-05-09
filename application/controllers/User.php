<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model(['user_m', 'unor_m']);
        $this->load->library('form_validation');
        $this->title = "User";
    }

    public function index()
    {
        check_not_login();
        check_admin();

        $data['row'] = $this->user_m->get();

        $this->template->load('template', 'user/user_data', $data);
    }

    public function add()
    {
        $unor = $this->unor_m->get()->result();

        $user = new stdClass();
        $user->userid = null;
        $user->name = null;
        $user->username = null;
        $user->unor_id = null;
        $user->level = null;
        $data = [
            'page' => 'add',
            'unor' => $unor,
            'row' => $user
        ];
        $this->template->load('template', 'user/user_form_add', $data);
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {
            $this->user_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan...');
            } else {
                $error = "Gagal Insert Data!";
                $this->session->set_flashdata('error', $error);
            }
            redirect('user');
        }
    }

    public function delete($id)
    {
        $this->user_m->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus...');
        } else {
            $error = "Gagal Menghapus Data!";
            $this->session->set_flashdata('error', $error);
        }
        redirect('user');
    }

    public function edit($id)
    {
        $unor = $this->unor_m->get()->result();

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|callback_username_check',
            ['is_unique' => '%s sudah terdaftar']
        );
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[4]');
            $this->form_validation->set_rules(
                'passconf',
                'Ulangi Password',
                'min_length[4]|matches[password]',
                ['matches' => '%s tidak sama']
            );
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'Ulangi Password',
                'min_length[4]|matches[password]',
                ['matches' => '%s tidak sama']
            );
        }
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s masih kosong, silahkan isi!');
        $this->form_validation->set_message('min_length', '%s minimal 5 karakter!');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $data['unor'] = $unor;
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo alert_login('error', 'Oops...', 'Data Tidak Ditemukan!', 'user');
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah...');
            } else {
                $error = "Gagal Insert Data!";
                $this->session->set_flashdata('error', $error);
            }
            redirect('user');
        }
    }

    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM users WHERE nip='$post[username]' AND id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '%s ini sudah digunakan, silahkan ganti!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function status($id)
    {
        $this->user_m->status($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Status Berhasil Diubah...');
        } else {
            $error = "Gagal Mengubah Status!";
            $this->session->set_flashdata('error', $error);
        }
        redirect('user');
    }
}
