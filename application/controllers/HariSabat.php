<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HariSabat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('HariSabat_model');
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');
        $this->load->model('Tahun_model');

        $this->load->library('session');  // Pastikan library session dimuat
        $this->load->library('form_validation'); // Library untuk validasi form
        $this->load->helper('url'); // Helper URL

        // Cek apakah user sudah login
        if (!$this->session->userdata('user_id')) {
            redirect('auth/login');  // Jika belum login, redirect ke halaman login
        }

        // Ambil data role dari session
        $role = $this->session->userdata('role');
        if ($role) {
            $this->permissions = $this->User_model->get_user_permissions($role['id']);
        } else {
            $this->permissions = []; 
        }
        // Cek permission untuk akses Setting
        if (!in_array('akses_setting', array_column($this->permissions, 'permission_name'))) {
            // Jika tidak memiliki permission, redirect ke halaman akses ditolak
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke dashboard.');
            redirect('admin/no_access');  // Ubah dengan rute yang sesuai untuk akses ditolak
        }
    }

    // Halaman utama
    public function index($triwulan_id = null) {
        if ($triwulan_id === null) {
            $triwulan_id = $this->Tahun_model->getCurrentTriwulanId(); 
        }
        // Load model dan helper yang diperlukan
        $this->config->load('site_config');
        $this->load->helper('url');
        
        // Ambil data hari sabat berdasarkan triwulan yang dipilih
        $data['sabat'] = $this->HariSabat_model->getAllSabat($triwulan_id);
        $data['triwulan_id'] = $triwulan_id;
    
        // Ambil tahun aktif
        $tp_active = $this->Tahun_model->getActiveTahun();
        $smt_active = null;
        if ($tp_active) {
            $smt_active = $this->Tahun_model->getActiveTriwulan($tp_active->id);
        }
    
        // Ambil semua data tahun dan triwulan
        $tahun = $this->Tahun_model->getAllTahun();
        $triwulan = $this->Tahun_model->getAllTriwulan();
    
        // Kirim data tahun dan triwulan ke view
        $data['tp_active'] = $tp_active;
        $data['smt_active'] = $smt_active;
        $data['tahun'] = $tahun;
        $data['triwulan'] = $triwulan;
    
        // Siapkan data tambahan untuk view
        $view_data = [
            'permissions' => $this->permissions,
            'judul' => 'Setting',
            'subjudul' => 'Hari Sabat',
            'menu' => 'setting',
            'submenu' => 'harisabat',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_primary',
            'page' => 'admin/settings/v_harisabat',
            'footer' => 'admin/_template/v_admin_footer',
        ];
    
        // Gabungkan semua data
        $data = array_merge($data, $view_data);
    
        // Tampilkan view dengan template admin
        $this->load->view('admin/_template/v_template_admin', $data);
    }
    
    // Menambahkan hari sabat
    public function add() {
        $triwulan_id = $this->input->post('triwulan_id');

        // Validasi tanggal input
        for ($i = 1; $i <= 13; $i++) {
            $this->form_validation->set_rules('tanggal_' . $i, 'Tanggal Sabat ke-' . $i, 'required');
        }

        if ($this->form_validation->run() === FALSE) {
            // Tampilkan kembali halaman index dengan error
            $this->index($triwulan_id);
        } else {
            for ($i = 1; $i <= 13; $i++) {
                $tanggal = $this->input->post('tanggal_' . $i);
                if ($tanggal) {
                    $data = [
                        'triwulan_id' => $triwulan_id,
                        'sabat_ke' => $i,
                        'tanggal' => $tanggal,
                    ];
                    $this->HariSabat_model->addSabat($data);
                }
            }
            // Set pesan sukses dan redirect
            $this->session->set_flashdata('message', 'Hari Sabat berhasil ditambahkan.');
            redirect('HariSabat/index/' . $triwulan_id);
        }
    }

    // Menghapus hari sabat
    public function delete($id, $triwulan_id) {
        // Cek apakah user memiliki hak akses
        if (!in_array('delete_harisabat', array_column($this->permissions, 'permission_name'))) {
            show_error('Anda tidak memiliki hak akses untuk menghapus hari sabat.', 403);
        }

        $this->HariSabat_model->deleteSabat($id);
        $this->session->set_flashdata('message', 'Hari Sabat berhasil dihapus.');
        redirect('HariSabat/index/' . $triwulan_id);
    }

    // Mengedit hari sabat (tampilkan form edit)
    public function edit($id) {
        // Cek apakah user memiliki hak akses edit_harisabat
        if (!in_array('edit_harisabat', array_column($this->permissions, 'permission_name'))) {
            log_message('debug', 'User does not have edit_harisabat permission.');
            show_error('Anda tidak memiliki hak akses untuk mengedit hari sabat.', 403);
        }
    
        // Ambil data hari sabat
        $sabat = $this->HariSabat_model->getSabatById($id);
        if (!$sabat) {
            show_error('Data hari sabat tidak ditemukan.', 404);
        }
        $data['sabat'] = $sabat;
    
        // Tampilkan view form edit
        $this->load->view('admin/settings/v_harisabat_edit', $data);
    }
    
    // Update hari sabat setelah diedit
    public function update() {
        $id = $this->input->post('id');
    
        // Validasi tanggal
        $this->form_validation->set_rules('tanggal', 'Tanggal Sabat', 'required');
        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, kembali ke halaman edit dengan pesan error
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/hari-sabat'); // Kembali ke halaman index
        } else {
            $tanggal = $this->input->post('tanggal');
            $this->HariSabat_model->updateSabat($id, ['tanggal' => $tanggal]);
    
            // Set pesan sukses dan redirect ke halaman index
            $this->session->set_flashdata('message', 'Hari Sabat berhasil diperbarui.');
            redirect('admin/hari-sabat'); // Redirect ke halaman index
        }
    }
    
    // public function update() {
    //     $id = $this->input->post('id');
    //     $triwulan_id = $this->input->post('triwulan_id');

    //     // Validasi tanggal
    //     $this->form_validation->set_rules('tanggal', 'Tanggal Sabat', 'required');
    //     if ($this->form_validation->run() === FALSE) {
    //         // Jika validasi gagal, kembali ke halaman edit dengan pesan error
    //         $this->edit($id); // Kembali ke form edit
    //     } else {
    //         $tanggal = $this->input->post('tanggal');
    //         $this->HariSabat_model->editSabat($id, $tanggal);

    //         // Set pesan sukses dan redirect ke halaman index
    //         $this->session->set_flashdata('message', 'Hari Sabat berhasil diperbarui.');
    //         redirect('HariSabat/index/' . $triwulan_id);
    //     }
    // }

    public function get_hari_sabat($id) {
        // Ambil data hari sabat berdasarkan ID
        $sabat = $this->HariSabat_model->getSabatById($id);
        if (!$sabat) {
            show_error('Data hari sabat tidak ditemukan.', 404);
        }
        echo json_encode($sabat); // Kembalikan data sebagai JSON
    }
    
}
