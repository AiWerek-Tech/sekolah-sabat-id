<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beritamisiweb extends MY_Controller
{
    public function __construct() {
        parent::__construct();
        // $this->load->model('BeritaMisiAnak_model');
        $this->load->model('Tahun_model');
        $this->load->model('HariSabat_model');
        $this->load->model('Triwulan_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->config('site_config');
        $this->load->model('BeritaMisiAnak_model');
        $this->load->model('PageCounter_model'); 
    }

    
    public function beritamisianak($id = null)  // Tambahkan parameter $id
    {
        // Load model
        $this->load->model('BeritaMisiAnak_Model');
        
        // Ambil semua berita misi anak
        $data['berita_misi'] = $this->BeritaMisiAnak_Model->get_all_misi_anak();
        
        // Jika $id disediakan, ambil data berita tertentu, cek jika datanya ada
        if ($id) {
            $berita = $this->BeritaMisiAnak_Model->get_misi_anak_by_id($id);
            if (!$berita) {
                show_404(); // Tampilkan error jika data tidak ditemukan
                return;
            }
            $data['berita'] = $berita;
        } else {
            $data['berita'] = null; // Jika $id tidak disediakan, set ke null atau array kosong
        }

        // Hitung jumlah kunjungan
        $current_url = current_url();
        $session_id = session_id();  // Inisialisasi session_id
        $this->PageCounter_model->count_page($current_url, $session_id);

        // Ambil data pengunjung
        $visitor_data = (object) [
            'total_visitors' => $this->PageCounter_model->get_total_visitors(),
            'today_visitors' => $this->PageCounter_model->get_today_visitors(),
            'yesterday_visitors' => $this->PageCounter_model->get_yesterday_visitors(),
            'online_visitors' => $this->PageCounter_model->get_online_visitors(),
        ];

        // Mengambil data sabat dan triwulan berdasarkan ID berita
        $urutan_sabat = $this->HariSabat_model->get_urutan_sabat($id);
        $sabat_ke = $urutan_sabat ? $urutan_sabat['sabat_ke'] : 'N/A';
        $tahun = date('Y'); // Anda bisa mengubah ini sesuai dengan logika Anda

        // Ambil triwulan_ke dari tabel triwulan
        $triwulan_data = $this->Triwulan_model->get_triwulan_ke($sabat_ke); // Ambil data triwulan berdasarkan sabat_ke

        // Ambil triwulan_ke dari tabel triwulan yang aktif
        $triwulan_ke = $this->Triwulan_model->get_active_triwulan(); // Mendapatkan triwulan yang aktif
        $triwulan_ke = $triwulan_ke ? $triwulan_ke : 'N/A'; // Jika tidak ada, set N/A

        // Menentukan format triwulan dalam angka Romawi
        switch ($triwulan_ke) {
            case 1:
                $triwulan_ke = 'I';
                break;
            case 2:
                $triwulan_ke = 'II';
                break;
            case 3:
                $triwulan_ke = 'III';
                break;
            case 4:
                $triwulan_ke = 'IV';
                break;
            default:
                $triwulan_ke = 'N/A';
                break;
        }

        // Menyiapkan data untuk dikirimkan ke view
        $view_data = [
            'judul' => 'Berita Misi Anak-anak',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi',
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisianak', // Lokasi view content halaman
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi',
            'og_title' => 'Berita Misi Anak-anak',
            'og_description' => 'Kisah Misi Advent Sedunia untuk Anak-anak',
            'og_image' => base_url('assets/image/berita_misi/bma.webp'),
            'og_url' => base_url('pages/berita-misi'),
            'visitor_data' => $visitor_data,
            'sabat_ke' => $sabat_ke,
            'triwulan_ke' => $triwulan_ke,
            'tahun' => $tahun
        ];
        
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
        
        // Tampilkan view
        $this->load->view('template/v_template_home', $data);
    }

    public function detail_bma($id) {
        $data['berita_detail'] = $this->BeritaMisiAnak_model->get_misi_anak_detail($id);

        if (empty($data['berita_detail'])) {
            show_404(); // Tampilkan error jika ID tidak ditemukan
        }

        // Hitung jumlah kunjungan halaman (opsional)
        $current_url = current_url();
        $session_id = $this->session->userdata('session_id');
        $this->PageCounter_model->count_page($current_url, $session_id);

         // Ambil data pengunjung
         $visitor_data = (object) [
            'total_visitors' => $this->PageCounter_model->get_total_visitors(),
            'today_visitors' => $this->PageCounter_model->get_today_visitors(),
            'yesterday_visitors' => $this->PageCounter_model->get_yesterday_visitors(),
            'online_visitors' => $this->PageCounter_model->get_online_visitors(),
        ];

        // Mengambil data sabat dan triwulan berdasarkan ID berita
        $urutan_sabat = $this->HariSabat_model->get_urutan_sabat($id);
        $sabat_ke = $urutan_sabat ? $urutan_sabat['sabat_ke'] : 'N/A';
        $tahun = date('Y'); // Anda bisa mengubah ini sesuai dengan logika Anda

        // Ambil triwulan_ke dari tabel triwulan
        $triwulan_data = $this->Triwulan_model->get_triwulan_ke($sabat_ke); // Ambil data triwulan berdasarkan sabat_ke

        // Ambil triwulan_ke dari tabel triwulan yang aktif
        $triwulan_ke = $this->Triwulan_model->get_active_triwulan(); // Mendapatkan triwulan yang aktif
        $triwulan_ke = $triwulan_ke ? $triwulan_ke : 'N/A'; // Jika tidak ada, set N/A

        // Menentukan format triwulan dalam angka Romawi
        switch ($triwulan_ke) {
            case 1:
                $triwulan_ke = 'I';
                break;
            case 2:
                $triwulan_ke = 'II';
                break;
            case 3:
                $triwulan_ke = 'III';
                break;
            case 4:
                $triwulan_ke = 'IV';
                break;
            default:
                $triwulan_ke = 'N/A';
                break;
        }

        
        // Data tambahan untuk tampilan detail
        $view_data = [
            'judul_image' => $data['berita_detail']['gambar'],
            'judul' => $data['berita_detail']['judul'],
            'subjudul' => '',
            'story_by' => $data['berita_detail']['dikisahkan_oleh'],
            'from' => $data['berita_detail']['asal_negara'],
            'menu' => '',
            'submenu' => '',
            'header' => 'template/beritamisi/v_header_beritamisi',
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisianak_detail',
            'aside' => 'template/v_aside',
            'footer' => 'template/beritamisi/v_footer_beritamisi',
            'og_title' => 'Berita Misi Anak-anak',
            'og_description' => 'Kisah Misi Advent Sedunia untuk Anak-anak',
            'og_image' => base_url('assets/image/berita_misi/bma.webp'),
            'og_url' => base_url('pages/berita-misi'),
            'visitor_data' => $visitor_data,
            'sabat_ke' => $sabat_ke,
            'triwulan_ke' => $triwulan_ke,
            'tahun' => $tahun
        ];
        $data = array_merge($data, $view_data);
        $this->load->view('template/v_template_home', $data);
    }


}
?>