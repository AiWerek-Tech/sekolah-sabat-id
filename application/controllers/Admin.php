<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function dashboard()
    {
        // Model sudah otomatis dimuat, jadi tidak perlu memuat ulang
        // echo 'Model Loaded'; // Hapus jika tidak diperlukan
        $this->config->load('site_config');
        // Load helper url
        $this->load->helper('url');

        $data = [
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_primary',
            'page' => 'admin/v_dashboard',
            'footer' => 'admin/_template/v_admin_footer',

            // 'og_title' => 'Home',
            // 'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            // 'og_image' => base_url('assets/image/home_image.webp'),
            // 'og_url' => base_url(''),
        ];

        // Load view
        $this->load->view('admin/_template/v_template_admin', $data);
    }
}
