<?php
class Role_model extends CI_Model {
    // Method untuk mendapatkan daftar semua roles
    public function get_all_roles() {
        return $this->db->get('roles')->result_array();
    }
}
?>