<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function error_404() {
        $this->output->set_status_header('404');
        $data = [
            'title' => '404 Page Not Found',
            'heading' => 'Page Not Found',
            'message' => 'Halaman yang Anda cari tidak ditemukan.',
            'suggestion' => 'Silakan kembali ke halaman sebelumnya atau kunjungi halaman utama.'
        ];
        $this->load->view('errors/v_error_404', $data);
    }

    public function error_403() {
        $this->output->set_status_header('403');
        $data = [
            'title' => '403 Forbidden',
            'heading' => 'Forbidden Access',
            'message' => 'Anda tidak memiliki akses ke halaman ini.',
            'suggestion' => 'Silakan login dengan akun yang memiliki akses atau hubungi administrator.'
        ];
        $this->load->view('errors/v_error_403', $data);
    }

    public function error_500() {
        $this->output->set_status_header('500');
        $data = [
            'title' => '500 Internal Server Error',
            'heading' => 'Internal Server Error',
            'message' => 'Terjadi kesalahan pada server.',
            'suggestion' => 'Silakan coba beberapa saat lagi atau hubungi administrator jika masalah berlanjut.'
        ];
        $this->load->view('errors/v_error_500', $data);
    }
}
