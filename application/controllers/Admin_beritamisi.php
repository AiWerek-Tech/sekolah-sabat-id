<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_beritamisi extends CI_Controller
{
    public function bmd()
    {
        // Model sudah otomatis dimuat, jadi tidak perlu memuat ulang
        // echo 'Model Loaded'; // Hapus jika tidak diperlukan
        $this->config->load('site_config');
        // Load helper url
        $this->load->helper('url');

        $data = [
            'judul' => 'Berita Misi Dewasa',
            'subjudul' => '',
            'menu' => 'bmd',
            'submenu' => '',
            // 'header' => 'template/v_header',
            // 'navbar' => 'template/v_navbar',
            // 'page' => 'v_home',
            // 'aside' => 'template/v_aside',
            // 'footer' => 'template/v_footer',
            // 'og_title' => 'Home',
            // 'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            // 'og_image' => base_url('assets/image/home_image.webp'),
            // 'og_url' => base_url(''),
        ];

        // Load view
        $this->load->view('admin/beritamisi/v_bmd', $data);
    }
}
