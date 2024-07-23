<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hoome extends CI_Controller {

    public function index()
    {
        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'v_home', // Lokasi view content halaman utama
            'footer' => 'template/v_footer', // Lokasi view footer
        ];

        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }
}
