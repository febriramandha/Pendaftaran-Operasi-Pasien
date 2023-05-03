<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_M extends CI_Model
{
    // public function login($post)
    // {
    //     $this->db->select('*');
    //     $this->db->from('users');
    //     $this->db->where('username', $post['username']);
    //     $this->db->where('password', sha1($post['password']));
    //     $query = $this->db->get();
    //     return $query;
    // }

    public function loginPg($post)
    {
        $password = $post['username'];
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('nip', $post['username']);
        $result = $this->db->get();
        return $result;
    }

    public function get($id = null)
    {
        $this->db->from('users');
        $this->db->order_by('id', 'ASC');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function add($post)
    // {
    //     $params = [
    //         'name' => $post['name'],
    //         'username' => $post['username'],
    //         'password' => sha1($post['password']),
    //         'address' => $post['address'] != "" ? $post['address'] : null,
    //         'level' => $post['level'],
    //     ];
    //     $this->db->insert('users', $params);
    // }

    // public function edit($post)
    // {
    //     $params['name'] = $post['fullname'];
    //     $params['username'] = $post['username'];
    //     if (!empty($post['password'])) {
    //         $params['password'] = sha1($post['password']);
    //     }
    //     $params['address'] = $post['address'] != "" ? $post['address'] : null;
    //     $params['level'] = $post['level'];
    //     $this->db->where('user_id', $post['user_id']);
    //     $this->db->update('users', $params);
    // }

    // public function del($id)
    // {
    //     $this->db->where('user_id', $id);
    //     $this->db->delete('users');
    // }
}