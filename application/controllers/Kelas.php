<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends MY_Controller
{


    public function ssaa()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Anak-anak',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssaa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Sekolah Sabat Anak-anak',
            'og_description' => 'Kumpulan Pelajaran Sekolah Sabat Anak-anak',
            'og_image' => base_url('assets/image/gambar_slide_5.webp'),
            'og_url' => base_url('kelas/ss-anak-anak'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function beginner()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Beginner',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_beginner', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Beginner',
            'og_description' => 'Kurikulum GraceLink untuk Beginner ditujukan untuk anak usia lahir hingga 2 tahun.',
            'og_image' => base_url('assets/image/gambar_slide_5.webp'),
            'og_url' => base_url('ssaa/beginner'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function kindergarten()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Kindergarten',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_kindergarten', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Kindergarten',
            'og_description' => 'Kurikulum GraceLink untuk Kindergarten ditujukan untuk anak usia 3-4',
            'og_image' => base_url('assets/image/gambar_slide_4.webp'),
            'og_url' => base_url('ssaa/kindergarten'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function primary()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Primary',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_primary', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Primary',
            'og_description' => 'Kurikulum GraceLink untuk Primary ditujukan untuk anak usia 5-9',
            'og_image' => base_url('assets/image/gambar_slide_3.webp'),
            'og_url' => base_url('ssaa/primary'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function powerpoints()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Junior Powerpoints',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_powerpoints', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Junior Powerpoints',
            'og_description' => 'Kurikulum GraceLink untuk Junior Powerpoints ditujukan untuk anak usia 10-12',
            'og_image' => base_url('assets/image/gambar_slide_2.webp'),
            'og_url' => base_url('ssaa/powerpoints'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function activityssaa()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Activity SSAA',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_activity', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Activity SSAA',
            'og_description' => 'Kumpulan Activity untuk SSAA. Setiap Activity 1 - 14 berisi 4 
            halaman dimana setiap halaman terdapat untuk kelas Beginner, Kindergarten, Primary dan Powerpoints',
            'og_image' => base_url('assets/image/gambar_slide_4.webp'),
            'og_url' => base_url('ssaa/activityssaa'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }



    //============================== SS REMAJA ==============================

    public function ssremaja()
    {
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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Remaja',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssremaja', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Sekolah Sabat Remaja',
            'og_description' => 'Sekolah Sabat untuk usia Remaja (Real Time Faith) dan Remaja Dewasa (Cornerstone Connections)',
            'og_image' => base_url('assets/image/gambar_slide_1.webp'),
            'og_url' => base_url('kelas/ss-remaja'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function realtimefaith()
    {
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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Real Time Faith',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssremaja/v_rtf', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Real Time Faith',
            'og_description' => 'Real-Time Faith adalah Panduan Pendalaman Alkitab Sekolah Sabat yang dirancang untuk para remaja muda usia 13-14 tahun dan dibuat
            oleh departemen Sekolah Sabat di General Conference Gereja Masehi Advent Hari Ketujuh.',
            'og_image' => base_url('assets/image/ssremaja/rtf.webp'),
            'og_url' => base_url('ss-remaja/realtimefaith'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function cornerstone()
    {
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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Cornerstone Connections',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssremaja/v_cornerstone', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Cornerstone Connections',
            'og_description' => 'Cornerstone Connections adalah Panduan Pendalaman Alkitab Sekolah Sabat yang dikembangkan untuk remaja Sekolah Menengah Atas (SMA) di departemen Sekolah Sabat di General Conference Gereja Masehi Advent Hari Ketujuh. Panduan ini didasarkan pada kurikulum pendalaman "melalui Alkitab" selama 4 tahun.',
            'og_image' => base_url('assets/image/ssremaja/rtf.webp'),
            'og_url' => base_url('ss-remaja/cornerstone'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }



    //============================== SS DEWASA ==============================

    public function ssdewasa()
    {
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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Dewasa',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssdewasa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Sekolah Sabat Dewasa',
            'og_description' => 'Sekolah Sabat Dewasa',
            'og_image' => base_url('assets/image/pemuda-dewasa.webp'),
            'og_url' => base_url('kelas/ss-dewasa'),
            'visitor_data' => $visitor_data,

            'triwulan' => 'Triwulan 3 - 2024',
            'judul_pelajaran1' => 'Permulaan Injil',
            'judul_pelajaran2' => 'Setiap Hari Dalam Pelayanan Yesus',
            'judul_pelajaran3' => 'Pertentangan',
            'judul_pelajaran4' => 'Berbagai Perumpamaan',
            'judul_pelajaran5' => 'Mukjizat di Sekitar Danau',
            'judul_pelajaran6' => 'Dari Dalam Keluar',
            'judul_pelajaran7' => 'PMengajar Para Murid: Bagian I',
            'judul_pelajaran8' => 'Mengajar Para Murid: Bagian II',
            'judul_pelajaran9' => 'Kontroversi di Yerusalem',
            'judul_pelajaran10' => 'Hari-Hari Terakhir',
            'judul_pelajaran11' => 'Ditangkap dan Diadili',
            'judul_pelajaran12' => 'Diadili dan Disalibkan',
            'judul_pelajaran13' => 'Tuhan yang Bangkit',

        ];

        // Menambahkan modal lessons 1-13 ke dalam data jika ada
        for ($i = 1; $i <= 13; $i++) {
            $data['modal_lesson' . $i] = 'modals/absg/modal_lesson' . $i;
        }


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function pendalamanssdewasa()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Pedoman Pendalaman Alkitab Dewasa',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssdewasa/v_ssdewasa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Pedoman Pendalaman Alkitab Dewasa',
            'og_description' => 'Pedoman Pendalaman Alkitab Dewasa',
            'og_image' => base_url('assets/image/ss-dewasa.webp'),
            'og_url' => base_url('ss-dewasa/pedoman-pendalaman-alkitab-dewasa'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function englishversion()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'English Version',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssdewasa/v_ssenglish', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Pedoman Pendalaman Alkitab Dewasa',
            'og_description' => 'Pedoman Pendalaman Alkitab Dewasa',
            'og_image' => base_url('assets/image/ss-dewasa.webp'),
            'og_url' => base_url('ss-dewasa/english-version'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function inverse()
    {

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

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'inverse',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssdewasa/v_inverse', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'inverse',
            'og_description' => 'Pedoman Pendalaman Alkitab Dewasa Muda - inVerse',
            'og_image' => base_url('assets/image/inverse-study.webp'),
            'og_url' => base_url('ss-pemuda/inverse'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

}
?>