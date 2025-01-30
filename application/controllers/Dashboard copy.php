<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');
        $this->load->model('Tahun_model');
        $this->load->library('session');  // Pastikan library session dimuat

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');  // Jika belum login, redirect ke halaman login
        }

        // Ambil data role dari session
        $role = $this->session->userdata('role');

        // Pastikan User_model sudah dimuat, lalu ambil permissions berdasarkan role
        if ($role) {
            $this->permissions = $this->User_model->get_user_permissions($role['id']);
        } else {
            $this->permissions = [];  // Jika role tidak ditemukan, set permissions ke array kosong
        }

        // Cek permission untuk akses dashboard
        if (!in_array('akses_dashboard', array_column($this->permissions, 'permission_name'))) {
            // Jika tidak memiliki permission, redirect ke halaman akses ditolak
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke dashboard.');
            redirect('admin/no_access');  // Ubah dengan rute yang sesuai untuk akses ditolak
        }
    }

    public function index() {
        $this->config->load('site_config');
        $this->load->helper('url');

        // Ambil tahun aktif
        $tp_active = $this->Tahun_model->getActiveTahun();
        $smt_active = null;
        if ($tp_active) {
            $smt_active = $this->Tahun_model->getActiveTriwulan($tp_active->id);
        }
        $tahun = $this->Tahun_model->getAllTahun();
        $triwulan = $this->Tahun_model->getAllTriwulan();

        // Kirim data ke view
        $data['tp_active'] = $tp_active;
        $data['smt_active'] = $smt_active;
        $data['tahun'] = $tahun;
        $data['triwulan'] = $triwulan;

        // Siapkan data untuk view
        $view_data = [
            'permissions' => $this->permissions,
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
        ];
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function usermanagement() {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Setting',
            'subjudul' => 'Manajemen Pengguna',
            'menu' => 'setting',
            'submenu' => 'usermanagement',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/settings/v_user_management',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function permissionmanagement() {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Setting',
            'subjudul' => 'Permission Management',
            'menu' => 'setting',
            'submenu' => 'permissionmanagement',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/settings/v_permission_management',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function kelas() {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');
        $this->load->model('Kelas_model');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();
        $data['kelas'] = $this->Kelas_model->get_all_classes();
        $data['kategori'] = $this->Kelas_model->get_all_categories();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Setting',
            'subjudul' => 'Kelas',
            'menu' => 'setting',
            'submenu' => 'settingkelas',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/settings/v_kelas',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function add_kelas() {
        $kelas_name = $this->input->post('nama');
        $id_kategori = $this->input->post('id_kategori'); // Ambil id kategori dari form
        $data = [
            'nama' => $kelas_name,
            'id_kategori' => $id_kategori // Tambahkan id_kategori ke data
        ];
        $this->db->insert('kelas', $data);
        $this->session->set_flashdata('success', 'Kelas berhasil ditambahkan.');
        redirect('admin/kelas-sekolah-sabat');
    }
    
    public function edit_kelas($id) {
        // Ambil data kelas dan tampilkan di form edit
    }
    
    public function delete_kelas() {
        $class_id = $this->input->post('kelas');
        $this->db->delete('kelas', ['id' => $class_id]); // Ganti 'classes' dengan nama tabel Anda
        $this->session->set_flashdata('success', 'Kelas berhasil dihapus.');
        redirect('admin/kelas-sekolah-sabat');
    }



    public function bma() {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');
        $this->load->model('Kelas_model');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();
        $data['kelas'] = $this->Kelas_model->get_all_classes();
        $data['kategori'] = $this->Kelas_model->get_all_categories();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Berita Misi',
            'subjudul' => 'Anak-anak',
            'menu' => 'berita-misi',
            'submenu' => 'bma',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/beritamisi/v_bma',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }
    
    
}
