<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'v_home', // Lokasi view content halaman utama
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];

        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }
}
