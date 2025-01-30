<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends MY_Controller
{

    public function aboutus()
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
            'judul' => 'Tentang Kami',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentangkami', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Tentang Kami',
            'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            'og_image' => base_url('assets/image/home_image.webp'),
            'og_url' => base_url('pages/tentang-kami'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function ourteam()
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
            'judul' => 'Our Team',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentang_ourteam', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Our Team',
            'og_description' => 'Tentang Tim Kami',
            'og_image' => base_url('assets/image/bg_technologi.webp'),
            'og_url' => base_url('pages/tentang-kami/our-team'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function aboutss()
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
            'judul' => 'Tentang Sekolah Sabat',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentangss', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Tentang Sekolah Sabat',
            'og_description' => 'Sekolah Sabat adalah salah satu bagian terpenting dari hari Sabat. Ini memberi kita kesempatan untuk bersekutu, memahami misi, melakukan pelayanan masyarakat, dan yang paling utama, belajar dan berdiskusi tentang Alkitab...',
            'og_image' => base_url('assets/image/home_image.webp'),
            'og_url' => base_url('pages/pages/tentang-sekolah-sabat'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function ruanglingkupss()
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
            'judul' => 'Ruang Lingkup dan Urutan Pelajaran',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ruanglingkupss', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Ruang Lingkup dan Urutan Pelajaran',
            'og_description' => 'Ruang Lingkup dan Urutan Pelajaran Sekolah Sabat',
            'og_image' => base_url('assets/image/adventist-map.webp'),
            'og_url' => base_url('pages/ruang-lingkup-pelajaran-ss'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function aboutgracelink()
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
            'judul' => 'Kurikulum Gracelink',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentanggracelink', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Kurikulum Gracelink',
            'og_description' => 'GraceLink adalah kurikulum 12 tahun yang terdiri dari 624 pelajaran, semuanya berlandaskan pada Kitab Suci...',
            'og_image' => base_url('assets/image/children-ministry-2.webp'),
            'og_url' => base_url('pages/tentang-kurikulum-gracelink'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }


    // BERITA MISSION CONTROLLER
    public function beritamisi()
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
            'judul' => 'Berita Misi',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisi', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer       

            'og_title' => 'Berita Misi Advent',
            'og_description' => 'Kisah Misi Advent Sedunia',
            'og_image' => base_url('assets/image/adventist-map.webp'),
            'og_url' => base_url('pages/berita-misi'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function beritamisidewasa()
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
            'judul' => 'Berita Misi Dewasa',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisidewasa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'titlestory1' => 'Sabat Penyimpangan',
            'datetory1' => '6 Juli 2024',
            'storyby1' => 'Ursula Leslie, dari Dominica',
            'titlestory2' => 'TUHAN Mengerjakan Bagian-Nya',
            'datetory2' => '13 Juli 2024',
            'storyby2' => 'Roderick, dari Dominica',
            'titlestory3' => 'Perjuangan Atas Iman',
            'datetory3' => '20 Juli 2024',
            'storyby3' => 'Zarrah, dari Dominica',
            'titlestory4' => 'Jerry Si Kapsul Waktu',
            'datetory4' => '27 Juli 2024',
            'storyby4' => 'Antonia, dari Dominica',
            'titlestory5' => 'Perampokan Mobil',
            'datetory5' => '3 Agustus 2024',
            'storyby5' => 'Beverly, dari Trinidad dan Tobago',
            'titlestory6' => '"Aku Membutuhkanmu"',
            'datetory6' => '10 Agustus 2024',
            'storyby6' => 'Faith, dari Trinidad dan Tobago',
            'titlestory7' => '"Kembalilah Kepada Tuhan"',
            'datetory7' => '17 Agustus 2024',
            'storyby7' => 'Wilinton, dari Kolombia',
            'titlestory8' => 'Mengikuti Jejak Paulus',
            'datetory8' => '24 Agustus 2024',
            'storyby8' => 'Wilinton, dari Kolombia',
            'titlestory9' => 'Bar yang Dibeli Dengan Doa',
            'datetory9' => '31 Agustus 2024',
            'storyby9' => 'Adriana, dari Kolombia',
            'titlestory10' => 'Lebih dari Sekadar "Halo"',
            'datetory10' => '7 September 2024',
            'storyby10' => 'Harlin, dari Kosta Rika',
            'titlestory11' => 'Harta Karun yang Sesungguhnya',
            'datetory11' => '14 September 2024',
            'storyby11' => 'Jahiquel, dari Kosta Rika',
            'titlestory12' => 'Berdoa untuk Tiga Orang',
            'datetory12' => '21 September 2024',
            'storyby12' => 'Stephanie, dari Kosta Rika',
            'titlestory13' => 'Seorang Pengunjung dan Sebuah Mimpi',
            'datetory13' => '28 September 2024',
            'storyby13' => 'Erickson, dari Kosta Rika dan Guatemala',

            'og_title' => 'Berita Misi Dewasa',
            'og_description' => 'Kisah Misi Advent Sedunia untuk Dewasa',
            'og_image' => base_url('assets/image/berita_misi/bmd.webp'),
            'og_url' => base_url('pages/berita-misi'),
            'visitor_data' => $visitor_data
        ];

        // Simpan data ke dalam sesi
        $this->session->set_userdata('data_beritamisi', $data);

        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function beritamisianak()
    {
        $this->config->load('site_config');
        // Load helper url
        $this->load->helper('url');

        $this->load->model('BeritaMisiAnak_Model');
        $data['berita_misi'] = $this->BeritaMisiAnak_Model->get_all_misi_anak();
        $berita = $this->BeritaMisiAnak_Model->get_misi_anak_by_id($id);

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
        $view_data = [
            'judul' => 'Berita Misi Anak-anak',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisianak', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer


            'titlestory1' => 'Mencari Lebih Banyak',
            'datetory1' => '6 Juli 2024',
            'storyby1' => 'Deymily',
            'titlestory2' => 'Monyet di Dalam Rumah',
            'datetory2' => '13 Juli 2024',
            'storyby2' => 'Karyeri',
            'titlestory3' => 'Gigitan Ular!',
            'datetory3' => '20 Juli 2024',
            'storyby3' => 'Hickel',
            'titlestory4' => 'Penantian untuk Seorang Ibu',
            'datetory4' => '27 Juli 2024',
            'storyby4' => 'Michelle',
            'titlestory5' => 'Datang ke Kaki Yesus',
            'datetory5' => '3 Agustus 2024',
            'storyby5' => 'Samuel',
            'titlestory6' => '"Tidak" untuk Pergi ke Gereja',
            'datetory6' => '10 Agustus 2024',
            'storyby6' => 'Aaron',
            'titlestory7' => 'Keajaiban Musik',
            'datetory7' => '17 Agustus 2024',
            'storyby7' => 'Moises',
            'titlestory8' => 'Petualangan Destiny',
            'datetory8' => '24 Agustus 2024',
            'storyby8' => 'Destiny',
            'titlestory9' => 'Bukan Monster',
            'datetory9' => '31 Agustus 2024',
            'storyby9' => 'Khyshawn',
            'titlestory10' => 'Memainkan Permainan Kesukaan',
            'datetory10' => '7 September 2024',
            'storyby10' => 'Nikita',
            'titlestory11' => 'Dulu Mengamuk, Sekarang Menjadi Tenang',
            'datetory11' => '14 September 2024',
            'storyby11' => 'Kitona',
            'titlestory12' => 'Berdoa untuk Pergi ke Sekolah',
            'datetory12' => '21 September 2024',
            'storyby12' => 'Keya',
            'titlestory13' => 'Sabat ke Tiga Belas: Kertas Permohonan Doa',
            'datetory13' => '28 September 2024',
            'storyby13' => 'Jerry',

            'og_title' => 'Berita Misi Anak-anak',
            'og_description' => 'Kisah Misi Advent Sedunia untuk Anak-anak',
            'og_image' => base_url('assets/image/berita_misi/bma.webp'),
            'og_url' => base_url('pages/berita-misi'),
            'visitor_data' => $visitor_data
        ];
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
        // Simpan data ke dalam sesi
        $this->session->set_userdata('data_beritamisi_anak', $data);

        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function videoberitamisi()
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
            'judul' => 'Video Berita Misi',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_videoberitamisi', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Video Berita Misi Advent',
            'og_description' => 'Video Kisah Misi Advent Sedunia',
            'og_image' => base_url('assets/image/berita_misi/video-bm.webp'),
            'og_url' => base_url('berita-misi/video'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function resources()
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
            'judul' => 'Sumber Daya',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_resources', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Sumber Daya',
            'og_description' => 'Sumber Daya Lainnya dari Sekolah Sabat ID',
            'og_image' => base_url('assets/image/resource.webp'),
            'og_url' => base_url('pages/resources'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function resourcelinks()
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
            'judul' => 'Resources Link',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_resourcelinks', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Resources Link',
            'og_description' => 'Tautan Sumber Daya merupakan kumpulan tautan atau situs sumber daya eksternal yang relevan dengan Pelajaran Sekolah Sabat Resmi milik Gereja Masehi Advent Hari Ketujuh yang menjadi sumber adopsi semua konten dalam website ini.',
            'og_image' => base_url('assets/image/resource.webp'),
            'og_url' => base_url('pages/resource-links'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function sitemaps()
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
            'judul' => 'Peta Situs',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_sitemaps', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Peta Situs',
            'og_description' => 'Kumpulan Peta Situs Sekolah Sabat ID',
            'og_image' => base_url('assets/image/resource.webp'),
            'og_url' => base_url('pages/sitemaps'),
            'visitor_data' => $visitor_data
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    // Tambahkan method lain untuk setiap halaman yang ada di navigasi Anda
    // Contoh: public function beginner(), public function kindergarten(), dll.
}
?>