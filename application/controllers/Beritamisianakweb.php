<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritamisianakweb extends MY_Controller
{

    public function cerita1()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'sabatke' => '1',
            'judul' => $data_beritamisi_anak['titlestory1'],
            'tanggal' => $data_beritamisi_anak['datetory1'],
            'storyby' => $data_beritamisi_anak['storyby1'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak1', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory1'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory1'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/1-CostaRica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story1.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita2()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory2'],
            'tanggal' => $data_beritamisi_anak['datetory2'],
            'sabatke' => '2',
            'storyby' => $data_beritamisi_anak['storyby2'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak2', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory2'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory2'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/2-CostaRica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story2.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita3()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory3'],
            'tanggal' => $data_beritamisi_anak['datetory3'],
            'sabatke' => '3',
            'storyby' => $data_beritamisi_anak['storyby3'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak3', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory3'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory3'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/3-CostaRica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story3.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita4()
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
        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory4'],
            'tanggal' => $data_beritamisi_anak['datetory4'],
            'sabatke' => '4',
            'storyby' => $data_beritamisi_anak['storyby4'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak4', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory4'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory4'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/4-CostaRica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story4.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita5()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory5'],
            'tanggal' => $data_beritamisi_anak['datetory5'],
            'sabatke' => '5',
            'storyby' => $data_beritamisi_anak['storyby5'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak5', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory5'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory5'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/5-Colombia-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story5.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita6()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory6'],
            'tanggal' => $data_beritamisi_anak['datetory6'],
            'sabatke' => '6',
            'storyby' => $data_beritamisi_anak['storyby6'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak6', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory6'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory6'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/6-Colombia-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story6.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita7()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory7'],
            'tanggal' => $data_beritamisi_anak['datetory7'],
            'sabatke' => '7',
            'storyby' => $data_beritamisi_anak['storyby7'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak7', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory7'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory7'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/7-Colombia-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story7.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita8()
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
        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory8'],
            'tanggal' => $data_beritamisi_anak['datetory8'],
            'sabatke' => '8',
            'storyby' => $data_beritamisi_anak['storyby8'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak8', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory8'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory8'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/8-Trinidad&Tobago-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story8.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita9()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory9'],
            'tanggal' => $data_beritamisi_anak['datetory9'],
            'sabatke' => '9',
            'storyby' => $data_beritamisi_anak['storyby9'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak9', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory9'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory9'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/9-Dominica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story9.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita10()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory10'],
            'tanggal' => $data_beritamisi_anak['datetory10'],
            'sabatke' => '10',
            'storyby' => $data_beritamisi_anak['storyby10'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak10', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory10'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory10'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/10-Dominica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story10.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita11()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory11'],
            'tanggal' => $data_beritamisi_anak['datetory11'],
            'sabatke' => '11',
            'storyby' => $data_beritamisi_anak['storyby11'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak11', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory11'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory11'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/11-Dominica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story11.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita12()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory12'],
            'tanggal' => $data_beritamisi_anak['datetory12'],
            'sabatke' => '12',
            'storyby' => $data_beritamisi_anak['storyby12'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak12', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory12'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory12'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/12-Dominica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story12.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }

    public function cerita13()
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

        // Load data sesi dari Page > BeritaMisi
        $data_beritamisi_anak = $this->session->userdata('data_beritamisi_anak');

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => $data_beritamisi_anak['titlestory13'],
            'tanggal' => $data_beritamisi_anak['datetory13'],
            'sabatke' => '13',
            'storyby' => $data_beritamisi_anak['storyby13'],
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/post/v_cerita_anak13', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi', // Lokasi view footer

            'og_title' => $data_beritamisi_anak['titlestory13'],
            'og_description' => 'Berita Misi Dewasa untuk Sabat, ' . $data_beritamisi_anak['datetory13'],
            'og_image' => "https://am.adventistmission.org/assets/public/resources/childrens-magazine/files/issues/2024/3Q/13-Dominica-head.jpg",
            // 'og_image' => base_url('assets/image/berita_misi/post_q1/story13.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];
        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/beritamisi/v_template_beritamisi', $data);
    }


    // Tambahkan method lain untuk setiap halaman yang ada di navigasi Anda
    // Contoh: public function beginner(), public function kindergarten(), dll.
}
?>