<?php
class Auth extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Pastikan model User_model dimuat di sini
    }

    public function login() {
        // Jika user sudah login, redirect ke dashboard
        if ($this->session->userdata('user_id')) {
            redirect('admin/dashboard');
        }

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
        // Jika user sudah login, redirect ke dashboard
        if ($this->session->userdata('user_id')) {
            redirect('admin/dashboard');
        }

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi input
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username dan password tidak boleh kosong.');
            redirect('admin/login');
            return;
        }

        // Validasi panjang username dan password
        if (strlen($username) < 3 || strlen($password) < 6) {
            $this->session->set_flashdata('error', 'Username minimal 3 karakter dan password minimal 6 karakter.');
            redirect('admin/login');
            return;
        }

        $user = $this->User_model->get_user_by_username($username);

        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            $session_data = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'role' => $this->User_model->get_user_role($user['id']),
                'last_login' => date('Y-m-d H:i:s')
            ];
            $this->session->set_userdata($session_data);

            // Update last login time
            $this->User_model->update_last_login($user['id']);

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
        // Clear all session data
        $this->session->sess_destroy();
        
        // Redirect ke halaman login dengan pesan
        $this->session->set_flashdata('success', 'Anda telah berhasil logout');
        redirect('admin/login');
    }
}
?>
