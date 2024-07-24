<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{


    public function ssaa()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Anak-anak',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssaa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'og_title' => 'Sekolah Sabat Anak-anak',
            'og_description' => 'Kumpulan Pelajaran Sekolah Sabat Anak-anak',
            'og_image' => base_url('assets/image/gambar_slide_5.webp'),
            'og_url' => base_url('kelas/ss-anak-anak')
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function beginner()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Beginner',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/ssaa/v_beginner', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function ssremaja()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Remaja',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssremaja', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function ssdewasa()
    {
        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sekolah Sabat Dewasa',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssdewasa', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer

            'triwulan' => 'Triwulan 3 - 2024',
            'judul_pelajaran1' => 'Permulaan Injil',
            'judul_pelajaran2' => 'Setiap Hari Dalam Pelayanan Yesus',
            'judul_pelajaran3' => 'Pertentangan',
            'judul_pelajaran4' => 'Berbagai Perumpamaan',
            'judul_pelajaran5' => 'Mukjizat di Sekitar Danau',
            'judul_pelajaran6' => 'Dari Dalam Keluar',
            'judul_pelajaran7' => 'PMengajar Para Murid: Bagian I',
            'judul_pelajaran8' => 'Mengajar Para Murid: Bagian II',
            'judul_pelajaran9' => 'Kontroversi di Yerusalem',
            'judul_pelajaran10' => 'Hari-Hari Terakhir',
            'judul_pelajaran11' => 'Ditangkap dan Diadili',
            'judul_pelajaran12' => 'Diadili dan Disalibkan',
            'judul_pelajaran13' => 'Tuhan yang Bangkit',

        ];

        // Menambahkan modal lessons 1-13 ke dalam data jika ada
        for ($i = 1; $i <= 13; $i++) {
            $data['modal_lesson' . $i] = 'modals/absg/modal_lesson' . $i;
        }


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function englishversion()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'English Version',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ssenglish', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

}
?>