<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeritaMisiController extends CI_Controller {
    public function index() {
        $this->load->model('TahunModel');
        $this->load->model('SabatModel');
        $this->load->model('BeritaMisiModel');

        $data['tahun_pelayanan'] = $this->TahunModel->getTahun();
        $this->load->view('berita_misi/v_tahun', $data);
    }

    public function triwulan($tahun_id) {
        $this->load->model('TahunModel');
        $this->load->model('SabatModel');

        $data['triwulan'] = $this->db->where('tahun_id', $tahun_id)->get('triwulan')->result_array();
        $this->load->view('berita_misi/v_triwulan', $data);
    }

    public function sabat($triwulan_id) {
        $this->load->model('SabatModel');
        $data['hari_sabat'] = $this->SabatModel->getHariSabat($triwulan_id);
        $this->load->view('berita_misi/v_hari_sabat', $data);
    }

    public function berita($hari_sabat_id) {
        $this->load->model('BeritaMisiModel');
        $data['berita_misi'] = $this->BeritaMisiModel->getBeritaMisi($hari_sabat_id);
        $this->load->view('berita_misi/v_berita_misi', $data);
    }

    public function add_berita() {
        $this->load->model('BeritaMisiModel');
        $data = [
            'hari_sabat_id' => $this->input->post('hari_sabat_id'),
            'judul' => $this->input->post('judul'),
            'teks_cerita' => $this->input->post('teks_cerita'),
            'pendahuluan' => $this->input->post('pendahuluan'),
            'gambar' => $this->upload_gambar(),
            'file_pdf' => $this->input->post('file_pdf'),
            'file_ppt' => $this->input->post('file_ppt')
        ];
        $this->BeritaMisiModel->addBeritaMisi($data);
        redirect('admin/berita_misi');
    }

    private function upload_gambar() {
        // Logika upload gambar
        return 'path/to/gambar';
    }

}
