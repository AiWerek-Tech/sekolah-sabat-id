<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission_model extends CI_Model {
    // Method untuk mendapatkan daftar semua permissions
    public function get_all_permissions() {
        return $this->db->get('permissions')->result_array(); // Sesuaikan dengan nama tabel
    }

    // Method untuk mendapatkan permission berdasarkan role
    public function get_permissions_by_role($role_id) {
        // Validasi role_id
        if (!is_numeric($role_id)) {
            return []; // Mengembalikan array kosong jika role_id tidak valid
        }

        $this->db->select('p.*');
        $this->db->from('permissions p');
        $this->db->join('role_permission rp', 'rp.permission_id = p.id');
        $this->db->where('rp.role_id', $role_id);
        return $this->db->get()->result_array();
    }

    // Method untuk menambah permission
    public function add_permission($data) {
        return $this->db->insert('permissions', $data);
    }

    public function update_permission($id, $data) {
        return $this->db->where('id', $id)->update('permissions', $data);
    }
    

    // Method untuk menghapus permission
    public function delete_permission($id) {
        return $this->db->delete('permissions', ['id' => $id]);
    }
}
?>
