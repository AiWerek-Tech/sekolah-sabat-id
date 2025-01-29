<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HariSabat_model extends CI_Model {
    // Menyimpan data hari sabat
    public function addSabat($data) {
        return $this->db->insert('hari_sabat', $data);
    }

    // Mendapatkan semua hari sabat berdasarkan triwulan
    public function getAllSabat($triwulan_id) {
        $this->db->where('triwulan_id', $triwulan_id);
        return $this->db->get('hari_sabat')->result_array();
    }

    // Menghapus hari sabat berdasarkan ID
    public function deleteSabat($id) {
        return $this->db->delete('hari_sabat', array('id' => $id));
    }

    // Mendapatkan hari sabat berdasarkan ID
    public function getSabatById($id) {
        return $this->db->get_where('hari_sabat', array('id' => $id))->row();
    }

    // Mengupdate hari sabat
    public function updateSabat($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('hari_sabat', $data);
    }
    
    // Update fungsi edit
    public function editSabat($id, $tanggal) {
        $data = [
            'tanggal' => $tanggal,
        ];
        return $this->updateSabat($id, $data);
    }

    public function get_urutan_sabat($id) {
        $this->db->select('sabat_ke, triwulan_id'); // Menggunakan nama kolom yang benar
        $this->db->from('hari_sabat');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }
    
}
?>
