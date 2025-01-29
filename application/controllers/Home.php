<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function index()
    {
        // Model sudah otomatis dimuat, jadi tidak perlu memuat ulang
        // echo 'Model Loaded'; // Hapus jika tidak diperlukan
        $this->config->load('site_config');
        // Load helper url
        $this->load->helper('url');

        // Inisialisasi session
        $session_id = $this->session->userdata('session_id');
        if (!$session_id) {
            $session_id = uniqid();
            $this->session->set_userdata(['session_id' => $session_id]);
        }

        // Hitung jumlah kunjungan
        $current_url = current_url();
        $this->PageCounter_model->count_page($current_url, $session_id);

        // Ambil data pengunjung
        $visitor_data = (object) [
            'total_visitors' => $this->PageCounter_model->get_total_visitors(),
            'today_visitors' => $this->PageCounter_model->get_today_visitors(),
            'yesterday_visitors' => $this->PageCounter_model->get_yesterday_visitors(),
            'online_visitors' => $this->PageCounter_model->get_online_visitors(),
        ];

        // Siapkan data untuk view
        $data = [
            'judul' => 'Home',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header',
            'navbar' => 'template/v_navbar',
            'page' => 'v_home',
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer',
            'og_title' => 'Home',
            'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            'og_image' => base_url('assets/image/home_image.webp'),
            'og_url' => base_url(''),
            'visitor_data' => $visitor_data
        ];

        // Load view
        $this->load->view('template/v_template_home', $data);
    }
}
