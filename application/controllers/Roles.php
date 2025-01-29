<?php
class Roles extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('Permission_model');

        // Pastikan hanya admin yang dapat mengakses halaman ini
        if (!$this->session->userdata('role') || $this->session->userdata('role')['role_name'] !== 'admin') {
            redirect('auth/login');
        }
    }

    public function index() {
        // Load konfigurasi dan helper
        $this->config->load('site_config');
        $this->load->helper('url');

        // Ambil semua pengguna dan peran untuk ditampilkan di view
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->Role_model->get_all_roles();

        // Siapkan data untuk view
        $view_data = [
            'judul' => 'Setting',
            'subjudul' => 'Manajemen Peran Pengguna',
            'menu' => 'setting',
            'submenu' => 'manageroles',
            'header' => 'admin/_template/v_admin_header',
            'navbar' => 'admin/_template/v_admin_navbar',
            'sidebar' => 'admin/_template/v_admin_sidebar',
            'breadcrumb' => 'admin/_template/v_breadcrumb_secondary',
            'page' => 'admin/settings/v_manage_roles',
            'footer' => 'admin/_template/v_admin_footer',
            'permissions' => $this->Permission_model->get_all_permissions(), // Ambil semua permissions jika diperlukan
        ];

        // Gabungkan semua data
        $data = array_merge($data, $view_data);

        // Tampilkan view
        $this->load->view('admin/_template/v_template_admin', $data);
    }

    public function add_permission() {
        // Ambil nama izin dan keterangan dari input
        $permission_name = $this->input->post('permission_name');
        $description = $this->input->post('description'); // Tambahkan ini
        
        // Validasi input
        if (!empty($permission_name) && !empty($description)) { // Pastikan kedua input tidak kosong
            // Simpan izin baru ke database
            $data = [
                'permission_name' => $permission_name,
                'description' => $description // Simpan keterangan
            ];
            if ($this->Permission_model->add_permission($data)) {
                $this->session->set_flashdata('success', 'Izin baru berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan izin baru.');
            }
        } else {
            $this->session->set_flashdata('error', 'Nama izin dan keterangan tidak boleh kosong.');
        }
    
        // Redirect kembali ke halaman manajemen peran
        redirect('admin/permission-management');
    }

    public function update_permission() {
        $permission_id = $this->input->post('permission_id');
        $permission_name = $this->input->post('permission_name');
        $description = $this->input->post('description');
    
        // Validasi input
        if ($permission_name) {
            // Update permission di database
            $data = [
                'permission_name' => $permission_name,
                'description' => $description
            ];
            
            if ($this->Permission_model->update_permission($permission_id, $data)) {
                $this->session->set_flashdata('success', 'Izin berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui izin.');
            }
        } else {
            $this->session->set_flashdata('error', 'Nama izin tidak boleh kosong.');
        }
    
        // Redirect kembali ke halaman manajemen peran
        redirect('admin/permission-management');
    }
    
    
    

    public function update_user_role() {
        $user_id = $this->input->post('user_id');
        $role_id = $this->input->post('role_id');

        // Update peran pengguna
        $this->User_model->update_user_role($user_id, $role_id);

        // Redirect ke halaman manajemen peran
        $this->session->set_flashdata('success', 'Peran pengguna berhasil diperbarui.');
        redirect('admin/roles');
    }

    public function update_role_permissions() {
        $role_id = $this->input->post('role_id');
        $permissions = $this->input->post('permissions'); // Array izin yang dipilih

        // Hapus izin yang ada untuk role ini
        $this->db->where('role_id', $role_id);
        if (!$this->db->delete('role_permission')) {
            $this->session->set_flashdata('error', 'Gagal menghapus izin yang ada untuk role ini.');
            redirect('admin/roles');
        }

        // Tambahkan izin yang baru
        if (!empty($permissions)) {
            foreach ($permissions as $permission_id) {
                $insert_data = [
                    'role_id' => $role_id,
                    'permission_id' => $permission_id
                ];
                if (!$this->db->insert('role_permission', $insert_data)) {
                    $this->session->set_flashdata('error', 'Gagal menambahkan izin untuk role ini.');
                    redirect('admin/roles');
                }
            }
        }

        $this->session->set_flashdata('success', 'Izin peran berhasil diperbarui.');
        redirect('admin/roles');
    }

    public function get_permissions_by_role($role_id) {
        $permissions = $this->Permission_model->get_permissions_by_role($role_id);
        $all_permissions = $this->Permission_model->get_all_permissions();

        $permissions_ids = array_column($permissions, 'id'); // Ambil ID permission yang sudah terpilih

        $html = '';
        foreach ($all_permissions as $permission) {
            $checked = in_array($permission['id'], $permissions_ids) ? 'checked' : '';
            $html .= '<div class="form-check">
                          <input class="form-check-input" type="checkbox" name="permissions[]" value="' . $permission['id'] . '" id="permission_' . $permission['id'] . '" ' . $checked . '>
                          <label class="form-check-label" for="permission_' . $permission['id'] . '">' . $permission['permission_name'] . '</label>
                      </div>';
        }

        echo $html; // Kembalikan HTML untuk permissions
    }

}
?>
