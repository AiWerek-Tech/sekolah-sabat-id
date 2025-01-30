<?php
class User_model extends CI_Model {

    public function get_user_by_username($username) {
        return $this->db->get_where('users', ['username' => $username])->row_array();
    }

    public function get_user_role($user_id) {
        $this->db->select('roles.*');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.id');
        $this->db->where('users.id', $user_id);
        return $this->db->get()->row_array();
    }

    public function get_user_permissions($role_id) {
        $this->db->select('permissions.*');
        $this->db->from('role_permissions');
        $this->db->join('permissions', 'role_permissions.permission_id = permissions.id');
        $this->db->where('role_permissions.role_id', $role_id);
        return $this->db->get()->result_array();
    }

    public function get_all_users() {
        $this->db->select('users.*, roles.role_name');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.id');
        return $this->db->get()->result_array();
    }

    public function update_user_role($user_id, $role_id) {
        $this->db->where('id', $user_id);
        $this->db->update('users', ['role_id' => $role_id]);
    }
    
}
?>
