<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritamisianak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BeritaMisiAnak_model');
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');
        $this->load->model('Tahun_model');
        $this->load->model('HariSabat_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->config('site_config');

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }

        // Ambil data role dari session
        $role = $this->session->userdata('role');
        if ($role) {
            $this->permissions = $this->User_model->get_user_permissions($role['id']);
        } else {
            $this->permissions = [];
        }

        // Cek permission untuk akses Berita Misi Anak
        if (!in_array('akses_bma', array_column($this->permissions, 'permission_name'))) {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke berita misi anak.');
            redirect('admin/no_access');
        }
    }

    public function index($triwulan_id = null) {
        // Jika triwulan_id tidak diberikan, gunakan triwulan saat ini
        if ($triwulan_id === null) {
            $triwulan_id = $this->Tahun_model->getCurrentTriwulanId();
        }

        // Ambil semua berita misi anak berdasarkan triwulan
        $data['berita_misi'] = $this->BeritaMisiAnak_model->getAllBerita($triwulan_id);

        // Ambil informasi triwulan aktif
        $tp_active = $this->Tahun_model->getActiveTahun();
        $smt_active = null;
        if ($tp_active) {
            $smt_active = $this->Tahun_model->getActiveTriwulan($tp_active->id);
        }

        // Ambil semua data tahun dan triwulan
        $tahun = $this->Tahun_model->getAllTahun();
        $triwulan = $this->Tahun_model->getAllTriwulan();

        // Siapkan data tambahan untuk view
        $view_data = [
            'permissions' => $this->permissions,
            'judul' => 'Berita Misi Anak',
            'subjudul' => 'Berita Misi untuk Anak-anak',
            'menu' => 'beritamisi',
            'submenu' => 'anak-anak',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_primary',
            'page' => 'admin/beritamisi/v_bma',
            'footer' => 'admin/_template/v_admin_footer',
            'tp_active' => $tp_active,
            'smt_active' => $smt_active,
            'tahun' => $tahun,
            'triwulan' => $triwulan,
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view dengan template admin
        $this->load->view('admin/_template/v_template_admin', $data);
    }
    // Menampilkan form tambah berita misi anak
    // Dalam method create() di controller Beritamisianak
    public function create() {
        // Muat model
        $this->load->model('Tahun_model');
        $this->load->model('HariSabat_model');
    
        // Ambil triwulan aktif
        $active_year = $this->Tahun_model->getActiveTahun(); // Pastikan ini dipanggil dari model
        $active_quarter = $this->Tahun_model->getActiveTriwulan($active_year->id);
        $data['hari_sabat'] = $this->HariSabat_model->getAllSabat($active_quarter->id);
    
        // Siapkan data tambahan untuk view
        $view_data = [
            'permissions' => $this->permissions,
            'judul' => 'Tambah Berita Misi Anak',
            'subjudul' => 'Form Tambah',
            'menu' => 'berita_misi',
            'submenu' => 'anak-anak',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_primary',
            'page' => 'admin/beritamisi/v_create_bma', // Form yang Anda buat
            'footer' => 'admin/_template/v_admin_footer',
        ];
    
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
    
        // Validasi input
        $this->form_validation->set_rules('gambar', 'Gambar', 'callback_valid_image');
        $this->form_validation->set_rules('gambar_url', 'Gambar URL', 'valid_url');
        $this->form_validation->set_rules('file_pdf_url', 'File PDF URL', 'valid_url');
        $this->form_validation->set_rules('file_ppt_url', 'File PPT URL', 'valid_url');
    
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan view dengan form
            $this->load->view('admin/_template/v_template_admin', $data);
        } else {
            // Jika validasi berhasil, proses gambar
            $gambar_path = null; // Inisialisasi variabel untuk menyimpan path gambar
    
            // Proses gambar
            if (!empty($_FILES['gambar']['name'])) {
                // Proses upload file gambar
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
    
                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $gambar_path = $upload_data['file_name'];
                } else {
                    // Tangani error jika upload gagal
                    $gambar_path = null; // Atau Anda bisa menambahkan error message
                }
            } elseif (!empty($this->input->post('gambar_url'))) {
                // Jika ada URL gambar, simpan URL tersebut
                $gambar_path = $this->input->post('gambar_url');
            }
    
            // Ambil URL untuk file PDF dan PPT
            $file_pdf_url = $this->input->post('file_pdf_url');
            $file_ppt_url = $this->input->post('file_ppt_url');
    
            // Lanjutkan untuk menyimpan data ke database
            // Pastikan Anda menambahkan logika untuk menyimpan $gambar_path, $file_pdf_url, dan $file_ppt_url ke dalam database
            // Contoh:
            // $this->Some_model->insert_data($gambar_path, $file_pdf_url, $file_ppt_url);
    
            // Redirect atau tampilkan pesan sukses
        }
    }
    

        

    // Proses penambahan berita misi anak
    public function store() {
        // Atur aturan validasi untuk field yang diperlukan
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('hari_sabat_id', 'Hari Sabat', 'required');
        $this->form_validation->set_rules('teks_cerita', 'Teks Cerita', 'required');
        $this->form_validation->set_rules('pendahuluan', 'Pendahuluan', 'required');
        
        // Jika validasi gagal, kembali ke form tambah
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            // Persiapkan data untuk disimpan
            $data = [
                'hari_sabat_id' => $this->input->post('hari_sabat_id'), // Menyimpan ID Hari Sabat
                'judul' => $this->input->post('judul'), // Menyimpan Judul
                'teks_cerita' => $this->input->post('teks_cerita'), // Menyimpan Teks Cerita
                'pendahuluan' => $this->input->post('pendahuluan'), // Menyimpan Pendahuluan
                'gambar' => $this->input->post('gambar_url') ?: $this->_upload_image(), // Menyimpan gambar dari URL atau hasil upload
                'file_pdf' => $this->input->post('file_pdf_url'), // Menyimpan link PDF
                'file_ppt' => $this->input->post('file_ppt_url') // Menyimpan link PPT
            ];
    
            // Simpan data ke database
            $this->BeritaMisiAnak_model->insert_misi_anak($data);
            
            // Set flashdata untuk pesan sukses
            $this->session->set_flashdata('success', 'Berita Misi Anak berhasil ditambahkan');
            
            // Redirect ke halaman daftar berita misi anak-anak
            redirect('admin/berita-misi/anak-anak');
        }
    }    
    

    // Mengedit berita misi anak
    public function edit($id) {
        $data['misi'] = $this->BeritaMisiAnak_model->get_misi_anak_by_id($id);
        $data['hari_sabat'] = $this->HariSabat_model->get_all_hari_sabat();
        $this->load->view('admin/beritamisi/v_bma_edit', $data);  // Mengarahkan ke view form edit
    }

    // Proses update berita misi anak
    public function update($id) {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('hari_sabat_id', 'Hari Sabat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'hari_sabat_id' => $this->input->post('hari_sabat_id'),
                'judul' => $this->input->post('judul'),
                'teks_cerita' => $this->input->post('teks_cerita'),
                'pendahuluan' => $this->input->post('pendahuluan'),
                'gambar' => $this->_upload_image(),
                'file_pdf' => $this->input->post('file_pdf'),
                'file_ppt' => $this->input->post('file_ppt')
            ];
            $this->BeritaMisiAnak_model->update_misi_anak($id, $data);
            $this->session->set_flashdata('success', 'Berita Misi Anak berhasil diupdate');
            redirect('admin/berita-misi/anak-anak');
        }
    }

    // Menghapus berita misi anak
    public function delete($id) {
        $this->BeritaMisiAnak_model->delete_misi_anak($id);
        $this->session->set_flashdata('success', 'Berita Misi Anak berhasil dihapus');
        redirect('admin/berita-misi/anak-anak');
    }

    // Fungsi untuk upload gambar
    private function _upload_image() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // Maksimal ukuran 2MB
    
        $this->load->library('upload', $config);
    
        if ($this->upload->do_upload('gambar')) {
            $upload_data = $this->upload->data();
            return $upload_data['file_name']; // Kembalikan nama file yang diupload
        } else {
            // Anda bisa menangani error disini jika diperlukan
            return null; // Kembalikan null jika upload gagal
        }
    }
    
}
