<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function error_404() {
        $this->output->set_status_header('404');
        $data['title'] = '404 Page Not Found';
        $data['heading'] = 'Page Not Found';
        $data['message'] = 'Halaman yang Anda cari tidak ditemukan.';
        $this->load->view('errors/v_error_404', $data);
    }

    public function error_403() {
        $this->output->set_status_header('403');
        $data['title'] = '403 Forbidden';
        $data['heading'] = 'Forbidden';
        $data['message'] = 'Anda tidak memiliki akses ke halaman ini.';
        $this->load->view('errors/v_error_403', $data);
    }

    public function error_500() {
        $this->output->set_status_header('500');
        $data['title'] = '500 Internal Server Error';
        $data['heading'] = 'Internal Server Error';
        $data['message'] = 'Terjadi kesalahan pada server. Silakan coba beberapa saat lagi.';
        $this->load->view('errors/v_error_500', $data);
    }
}
