<?php

class Migrate extends CI_Controller
{

    public function index()
    {
        $this->load->library('migration');

        // if ($this->migration->current() === FALSE) {
        if ($this->migration->version(4) === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo alert_login('success', 'Selamat...', 'Tabel Berhasil Dimigrasikan!', '/');
        }
    }
}
