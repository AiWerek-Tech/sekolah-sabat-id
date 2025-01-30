<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function error_404() {
        $this->output->set_status_header('404');
        $data['title'] = '404 Page Not Found';
        $this->load->view('v_error_404', $data);
    }

    public function error_403() {
        $this->output->set_status_header('403');
        $data['title'] = '403 Forbidden';
        $this->load->view('errors/v_error_403', $data);
    }

    public function error_500() {
        $this->output->set_status_header('500');
        $data['title'] = '500 Internal Server Error';
        $this->load->view('errors/v_error_500', $data);
    }
}
