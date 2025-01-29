<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaMisiAnak_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Method untuk mendapatkan semua berita misi anak berdasarkan triwulan
    public function getAllBerita($triwulan_id) {
        $this->db->select('berita_misi_anak.*, hari_sabat.tanggal AS tanggal_sabat');
        $this->db->from('berita_misi_anak');
        $this->db->join('hari_sabat', 'berita_misi_anak.hari_sabat_id = hari_sabat.id');
        $this->db->where('hari_sabat.triwulan_id', $triwulan_id);
        $query = $this->db->get();
        
        return $query->result();
    }

    // Mengambil semua berita misi anak
    public function get_all_misi_anak() {
        $this->db->select('berita_misi_anak.*, hari_sabat.tanggal');
        $this->db->from('berita_misi_anak');
        $this->db->join('hari_sabat', 'berita_misi_anak.hari_sabat_id = hari_sabat.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Menambahkan berita misi anak
    public function insert_misi_anak($data) {
        return $this->db->insert('berita_misi_anak', $data);
    }

    // Mendapatkan data berita misi anak berdasarkan ID
    public function get_misi_anak_by_id($id) {
        $this->db->select('berita_misi_anak.*, hari_sabat.tanggal');
        $this->db->from('berita_misi_anak');
        $this->db->join('hari_sabat', 'berita_misi_anak.hari_sabat_id = hari_sabat.id');
        $this->db->where('berita_misi_anak.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Mendapatkan detail berita misi anak berdasarkan ID
    public function get_misi_anak_detail($id) {
        $this->db->select('berita_misi_anak.*, hari_sabat.tanggal, berita_misi_anak.gambar');
        $this->db->from('berita_misi_anak');
        $this->db->join('hari_sabat', 'berita_misi_anak.hari_sabat_id = hari_sabat.id');
        $this->db->where('berita_misi_anak.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Mengupdate berita misi anak
    public function update_misi_anak($id, $data) {
        if (isset($data['gambar']) && empty($data['gambar'])) {
            unset($data['gambar']); // Hapus kolom gambar dari data jika kosong
        }
        $this->db->where('id', $id);
        return $this->db->update('berita_misi_anak', $data);
    }

    // Menghapus berita misi anak
    public function delete_misi_anak($id) {
        $this->db->where('id', $id);
        return $this->db->delete('berita_misi_anak');
    }

    // Mengambil data berdasarkan file PDF atau PPT, bisa digunakan jika diperlukan
    public function get_by_file_url($type, $url) {
        if ($type === 'pdf') {
            $this->db->where('file_pdf', $url);
        } elseif ($type === 'ppt') {
            $this->db->where('file_ppt', $url);
        }
        $query = $this->db->get('berita_misi_anak');
        return $query->result();
    }
}
?>
