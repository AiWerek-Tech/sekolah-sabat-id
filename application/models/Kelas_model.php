<?php
class Kelas_model extends CI_Model {

    // Ambil semua kelas beserta nama kategorinya
    public function get_all_classes() {
        $this->db->select('kelas.*, kategori.kategori AS kategori'); // Pilih semua kolom dari kelas dan nama kategori
        $this->db->from('kelas'); // Tabel kelas
        $this->db->join('kategori', 'kelas.id_kategori = kategori.id', 'left'); // Gabungkan dengan tabel kategori
        return $this->db->get()->result_array(); // Kembalikan hasil
    }

    // Ambil kelas berdasarkan ID
    public function get_class_by_id($id) {
        $this->db->select('kelas.*, kategori.kategori AS kategori'); // Pilih semua kolom dari kelas dan nama kategori
        $this->db->from('kelas'); // Tabel kelas
        $this->db->join('kategori', 'kelas.id_kategori = kategori.id', 'left'); // Gabungkan dengan tabel kategori
        $this->db->where('kelas.id', $id); // Filter berdasarkan ID
        return $this->db->get()->row_array(); // Kembalikan hasil sebagai array
    }

    // Ambil semua kategori
    public function get_all_categories() {
        return $this->db->get('kategori')->result_array(); // Ambil semua kategori
    }

    public function get_all() {
        // Ambil data kelas
        $this->db->select('kelas.*, kategori.nama AS kategori_nama'); // Ganti 'kategori.nama' sesuai dengan struktur tabel Anda
        $this->db->from('kelas');
        $this->db->join('kategori', 'kategori.id = kelas.kategori_id'); // Misalnya, jika Anda punya kategori_id di tabel kelas
        $query = $this->db->get();
        return $query->result(); // Kembalikan hasil
    }
}
?>
