<?php
class Triwulan_model extends CI_Model
{
    public function getAllTriwulan()
    {
        return $this->db->select('triwulan.*, tahun_pelayanan.tahun')
                        ->from('triwulan')
                        ->join('tahun_pelayanan', 'triwulan.tahun_id = tahun_pelayanan.id')
                        ->get()->result_array();
    }

    public function insertTriwulan($data)
    {
        $this->db->insert('triwulan', $data);
    }

    public function activateTriwulan($id)
    {
        $this->db->set('aktif', 1);
        $this->db->where('id', $id);
        $this->db->update('triwulan');
    }

    public function deactivateAllTriwulan()
    {
        $this->db->set('aktif', 0);
        $this->db->update('triwulan');
    }

    public function deleteTriwulan($id)
    {
        $this->db->delete('triwulan', ['id' => $id]);
    }

    public function get_triwulan_ke($triwulan_id) {
        $this->db->select('triwulan_ke');
        $this->db->from('triwulan');
        $this->db->where('id', $triwulan_id); // Asumsi kolom id di tabel triwulan
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Kembalikan array hasil query
        } else {
            return null; // Kembalikan null jika tidak ada data
        }
    }

    public function get_active_triwulan() {
        $this->db->select('triwulan_ke');
        $this->db->from('triwulan');
        $this->db->where('aktif', 1); // Ambil hanya triwulan yang aktif
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->row_array()['triwulan_ke']; // Kembalikan nilai triwulan_ke
        } else {
            return null; // Kembalikan null jika tidak ada data
        }
    }
    
    
}
