<?php
class Tahun_model extends CI_Model
{
    public function getAllTahun()
    {
        return $this->db->get('tahun_pelayanan')->result_array();
    }

    public function insertTahun($data)
    {
        $this->db->insert('tahun_pelayanan', $data);
    }

    public function activateTahun($id)
    {
        $this->db->set('aktif', 1);
        $this->db->where('id', $id);
        $this->db->update('tahun_pelayanan');
    }

    public function deactivateAllTahun()
    {
        $this->db->update('tahun_pelayanan', ['aktif' => 0]);
    }

    public function deleteTahun($id)
    {
        $this->db->delete('tahun_pelayanan', ['id' => $id]);
    }

    public function getAllTriwulan()
    {
        return $this->db->select('triwulan.*, tahun_pelayanan.tahun')
                        ->from('triwulan')
                        ->join('tahun_pelayanan', 'triwulan.tahun_id = tahun_pelayanan.id')
                        ->get()->result_array();
    }

    public function addTriwulan($data)
    {
        $this->db->insert('triwulan', $data);
    }

    public function deactivateAllTriwulan($tahun_id)
    {
        $this->db->where('tahun_id', $tahun_id);
        $this->db->update('triwulan', ['aktif' => 0]);
    }

    public function activateTriwulan($id)
    {
        $this->db->where('id', $id);
        $this->db->update('triwulan', ['aktif' => 1]);
    }

    public function getTriwulanById($id)
    {
        return $this->db->get_where('triwulan', ['id' => $id])->row_array();
    }

    public function getActiveTahun()
    {
        $this->db->where('aktif', 1);
        return $this->db->get('tahun_pelayanan')->row(); // Mengambil satu baris data
    }

    public function getActiveTriwulan($tahun_id)
    {
        $this->db->where('aktif', 1);
        $this->db->where('tahun_id', $tahun_id);
        return $this->db->get('triwulan')->row(); // Mengambil satu baris data
    }

    // Method untuk mendapatkan ID triwulan aktif saat ini
    public function getCurrentTriwulanId()
    {
        $this->db->select('id');
        $this->db->from('triwulan');
        $this->db->where('aktif', 1); // Triwulan aktif
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->id; // Mengembalikan ID triwulan aktif
        } else {
            return null; // Jika tidak ada triwulan aktif
        }
    }
}
