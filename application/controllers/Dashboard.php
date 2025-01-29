<?php
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');
        $this->load->model('Tahun_model');
        $this->load->model('Kelas_model'); // Memuat Kelas_model di sini
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
        $this->load->helper('url');
        $this->load->config('site_config');

        // Ambil tahun aktif
        $tp_active = $this->Tahun_model->getActiveTahun();
        $smt_active = $tp_active ? $this->Tahun_model->getActiveTriwulan($tp_active->id) : null;
        
        // Ambil data yang diperlukan
        $data = [
            'tp_active' => $tp_active,
            'smt_active' => $smt_active,
            'tahun' => $this->Tahun_model->getAllTahun(),
            'triwulan' => $this->Tahun_model->getAllTriwulan(),
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

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function usermanagement() {
        $this->load->helper('url');
        $this->load->config('site_config');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data = [
            'users' => $this->User_model->get_all_users(),
            'roles' => $this->Role_model->get_all_roles(),
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
            'permissions' => $this->Permission_model->get_all_permissions(),
        ];

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function permissionmanagement() {
        $this->load->helper('url');
        $this->load->config('site_config');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data = [
            'users' => $this->User_model->get_all_users(),
            'roles' => $this->Role_model->get_all_roles(),
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
            'permissions' => $this->Permission_model->get_all_permissions(),
        ];

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function kelas() {
        $this->load->helper('url');
        $this->load->config('site_config');
        
        // Mengambil semua kelas dan kategori dengan menggunakan $this->Kelas_model
        $data['kelas'] = $this->Kelas_model->get_all_classes(); // Mengambil semua kelas
        $data['kategori'] = $this->Kelas_model->get_all_categories(); // Mengambil kategori
    
        // Ambil semua pengguna, peran, kelas, dan kategori untuk ditampilkan di view
        $view_data = [
            'users' => $this->User_model->get_all_users(),
            'roles' => $this->Role_model->get_all_roles(),
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
            'permissions' => $this->Permission_model->get_all_permissions(),
        ];
        
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
        
        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }
    

    public function get_all() {
        $query = $this->db->get('kategori'); // Nama tabel kategori
        return $query->result_array(); // Mengembalikan hasil sebagai array
    }
    

    public function add_kelas() {
        $this->load->helper('url');
        
        $kelas_name = $this->input->post('nama');
        $id_kategori = $this->input->post('id_kategori'); // Ambil id kategori dari form
        
        if ($kelas_name && $id_kategori) {
            $data = [
                'nama' => $kelas_name,
                'id_kategori' => $id_kategori // Tambahkan id_kategori ke data
            ];
            $this->db->insert('kelas', $data);
            $this->session->set_flashdata('success', 'Kelas berhasil ditambahkan.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan kelas, pastikan data sudah lengkap.');
        }
        redirect('admin/kelas-sekolah-sabat');
    }
    
    public function edit_kelas($id) {
        $this->load->helper('url');
    
        // Ambil data kelas dan kategori berdasarkan ID
        $kelas = $this->Kelas_model->get_class_by_id($id);
        $kategori = $this->Kelas_model->get_all_categories(); // Ambil semua kategori
    
        // Jika data kelas tidak ditemukan, redirect atau tampilkan error
        if (empty($kelas)) {
            $this->session->set_flashdata('error', 'Kelas tidak ditemukan.');
            redirect('admin/kelas-sekolah-sabat');
        }
    
        // Kirim data ke view modal edit
        $data = [
            'kelas' => $kelas,
            'kategori' => $kategori
        ];
    
        echo json_encode($data); // Kirimkan data dalam format JSON
    }
    
    
    
    public function update_kelas() {
        $this->load->helper('url');
    
        $id = $this->input->post('id');
        $kelas_name = $this->input->post('class_name');
        $id_kategori = $this->input->post('id_kategori');
    
        if ($id && $kelas_name && $id_kategori) {
            $data = [
                'nama' => $kelas_name,
                'id_kategori' => $id_kategori
            ];
            $this->db->update('kelas', $data, ['id' => $id]);
            $this->session->set_flashdata('success', 'Kelas berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui kelas, pastikan data sudah lengkap.');
        }
        redirect('admin/kelas-sekolah-sabat');
    }
    
    
    
    public function delete_kelas() {
        $this->load->helper('url');
        
        $class_id = $this->input->post('kelas');
        if ($class_id) {
            $this->db->delete('kelas', ['id' => $class_id]); // Ganti 'kelas' dengan nama tabel Anda
            $this->session->set_flashdata('success', 'Kelas berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus kelas, ID tidak valid.');
        }
        redirect('admin/kelas-sekolah-sabat');
    }

    public function bma() {
        $this->load->helper('url');
        $this->load->config('site_config');

        // Ambil semua pengguna, peran, kelas, dan kategori untuk ditampilkan di view
        $data = [
            'users' => $this->User_model->get_all_users(),
            'roles' => $this->Role_model->get_all_roles(),
            'kelas' => $this->Kelas_model->get_all_classes(),
            'kategori' => $this->Kelas_model->get_all_categories(),
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
            'permissions' => $this->Permission_model->get_all_permissions(),
        ];

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }
}
