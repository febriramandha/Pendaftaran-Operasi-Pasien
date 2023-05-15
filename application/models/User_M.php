<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_M extends CI_Model
{
    public function loginPg($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $result = $this->db->get();
        return $result;
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('users.id', 'ASC');
        $this->db->where('users.status', '1');
        if ($id != null) {
            $this->db->where('users.id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'username' => $post['username'],
            'password' => get_hash('rsud_pass'),
            'full_name' => $post['name'],
            'level' => $post['level'],
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->fungsi->user_login()->id,
            'status' => '1',
        ];
        $this->db->insert('users', $params);
    }

    public function edit($post)
    {
        $params['username'] = $post['username'];
        if (!empty($post['password'])) {
            $params['password'] = get_hash($post['password']);
        }
        $params['full_name'] = $post['fullname'];
        $params['level'] = $post['level'];
        $params['updated_at'] = date('Y-m-d H:i:s');
        $params['updated_by'] = $this->fungsi->user_login()->id;

        $this->db->where('users.id', $post['user_id']);
        $this->db->update('users', $params);
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }

    public function status($id)
    {
        $params = [
            'status' => 0,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->fungsi->user_login()->id,
        ];
        $this->db->where('id', $id);
        $this->db->update('users', $params);
    }
}
