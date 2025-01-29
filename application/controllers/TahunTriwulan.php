<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TahunTriwulan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');

        $this->load->model('Tahun_model');
        $this->load->model('Triwulan_model');

        // Load form validation library
        $this->load->library('form_validation');

        // Pastikan hanya admin yang dapat mengakses halaman ini
        if (!$this->session->userdata('role') || $this->session->userdata('role')['role_name'] !== 'admin') {
            redirect('auth/login');
        }
        
    }

    // Halaman utama
    public function index()
    {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');
        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();
        
        $data['tahun'] = $this->Tahun_model->getAllTahun();
        $data['triwulan'] = $this->Triwulan_model->getAllTriwulan();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Setting',
            'subjudul' => 'Tahun Pelayanan',
            'menu' => 'setting',
            'submenu' => 'tahunpelayanan',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/settings/v_tahun',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    // Tambah Tahun Pelayanan
    // public function addTahun()
    // {
    //     $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
    //     if ($this->form_validation->run() == TRUE) {
    //         $data = [
    //             'tahun' => $this->input->post('tahun'),
    //             'aktif' => 0
    //         ];
    //         $this->Tahun_model->insertTahun($data);
    //         redirect('TahunTriwulan');
    //     } else {
    //         $this->index();
    //     }
    // }
    public function addTahun()
    {
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|exact_length[4]|integer');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('TahunTriwulan');
        } else {
            // Nonaktifkan tahun yang sudah ada
            $this->Tahun_model->deactivateAllTahun();

            // Tambah tahun baru
            $data = [
                'tahun' => $this->input->post('tahun'),
                'aktif' => 1, // Tahun yang baru ditambahkan otomatis aktif
            ];

            $this->Tahun_model->addTahun($data);
            $this->session->set_flashdata('success', 'Tahun pelayanan berhasil ditambahkan.');
            redirect('TahunTriwulan');
        }
    }


    // Tambah Triwulan
    public function addTriwulan()
    {
        $this->form_validation->set_rules('tahun_id', 'Tahun', 'required');
        $this->form_validation->set_rules('triwulan_ke', 'Triwulan Ke', 'required|integer|greater_than[0]|less_than[5]');
        
        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan error
            $this->session->set_flashdata('error', validation_errors());
            redirect('TahunTriwulan');
        } else {
            // Nonaktifkan semua triwulan untuk tahun yang sama
            $this->Tahun_model->deactivateAllTriwulan($this->input->post('tahun_id'));

            $data = [
                'tahun_id' => $this->input->post('tahun_id'),
                'triwulan_ke' => $this->input->post('triwulan_ke'),
                'aktif' => 1, // Triwulan yang baru ditambahkan otomatis aktif
            ];

            $this->Tahun_model->addTriwulan($data);
            $this->session->set_flashdata('success', 'Triwulan berhasil ditambahkan.');
            redirect('TahunTriwulan');
        }
    }


    // Aktifkan Tahun Pelayanan
    public function activateTahun($id)
    {
        $this->Tahun_model->deactivateAllTahun(); // Nonaktifkan semua tahun sebelumnya
        $this->Tahun_model->activateTahun($id);
        redirect('TahunTriwulan');
    }

    // Aktifkan Triwulan
    public function activateTriwulan($id)
{
    // Nonaktifkan semua triwulan pada tahun yang sama
    $triwulan = $this->Tahun_model->getTriwulanById($id);
    $this->Tahun_model->deactivateAllTriwulan($triwulan['tahun_id']);
    
    // Aktifkan triwulan yang dipilih
    $this->Tahun_model->activateTriwulan($id);
    $this->session->set_flashdata('success', 'Triwulan berhasil diaktifkan.');
    redirect('TahunTriwulan');
}


    // Hapus Tahun Pelayanan
    public function deleteTahun($id)
    {
        $this->Tahun_model->deleteTahun($id);
        redirect('TahunTriwulan');
    }

    // Hapus Triwulan
    public function deleteTriwulan($id)
    {
        $this->Triwulan_model->deleteTriwulan($id);
        redirect('TahunTriwulan');
    }
}