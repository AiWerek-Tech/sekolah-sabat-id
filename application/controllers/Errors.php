<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Errors extends MY_Controller
{

    public function error_404()
    {

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config');

        $data = [
            'judul' => 'Error 404',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'v_error_404', // Lokasi view content halaman ssa
            // 'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];

        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
        $this->output->set_status_header('404');
    }
}

