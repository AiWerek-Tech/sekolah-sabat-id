<?php
class BeritaMisiModel extends CI_Model {
    public function getBeritaMisi($hari_sabat_id) {
        return $this->db->where('hari_sabat_id', $hari_sabat_id)->get('berita_misi')->row_array();
    }

    public function addBeritaMisi($data) {
        $this->db->insert('berita_misi', $data);
    }

    public function updateBeritaMisi($id, $data) {
        $this->db->where('id', $id)->update('berita_misi', $data);
    }

    public function deleteBeritaMisi($id) {
        $this->db->where('id', $id)->delete('berita_misi');
    }
}


?>