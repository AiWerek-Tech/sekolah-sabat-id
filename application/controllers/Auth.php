<?php
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Pastikan model User_model dimuat di sini
    }

    public function login() {

        $this->config->load('site_config');
        // Load helper url
        $this->load->helper('url');

        $data = [
            'judul' => 'Login',
            'subjudul' => '',

            // 'og_title' => 'Login',
            // 'og_description' => 'Situs Penyedia Materi Pelajaran Sekolah Sabat',
            // 'og_image' => base_url('assets/image/home_image.webp'),
            // 'og_url' => base_url(''),
        ];

        $this->load->view('admin/auth/v_login', $data);

        // $this->load->view('admin/auth/v_login'); // Tampilkan form login
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user_by_username($username);

        if ($user && password_verify($password, $user['password'])) {
            $this->session->set_userdata('user_id', $user['id']);
            $role = $this->User_model->get_user_role($user['id']);
            $this->session->set_userdata('role', $role);

            // Pesan sukses
            $this->session->set_flashdata('success', 'Login berhasil');
            redirect('admin/dashboard');

        } else {
            // Pesan error jika login gagal
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('admin/login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('role');
        redirect('admin/login');
    }
}
?>
