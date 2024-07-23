<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function aboutus()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Tentang Kami',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentangkami', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function aboutss()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Tentang Sekolah Sabat',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentangss', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function ruanglingkupss()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Ruang Lingkup dan Urutan Materi',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_ruanglingkupss', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function aboutgracelink()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Kurikulum Gracelink',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_tentanggracelink', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }


    // BERITA MISSION CONTROLLER
    public function beritamisi()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Berita Misi',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_beritamisi', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function videoberitamisi()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Video Berita Misi',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/beritamisi/v_videoberitamisi', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function resources()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Sumber Daya',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_resources', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    public function resourcelinks()
    {

        // Aktifkan pesan kesalahan PHP
        error_reporting(E_ALL);
        ini_set('display_errors', 4);

        // Load konfigurasi sebelum memuat view
        $this->config->load('site_config'); // Pastikan 'site_config' sesuai dengan nama file tanpa ekstensi

        // Menyiapkan data untuk dikirimkan ke view
        $data = [
            'judul' => 'Resources Link',
            'subjudul' => '',
            'menu' => '',
            'submenu' => '',
            'header' => 'template/v_header', // Lokasi view header
            'navbar' => 'template/v_navbar', // Lokasi view navbar
            'page' => 'pages/v_resourcelinks', // Lokasi view content halaman ssa
            'aside' => 'template/v_aside',
            'footer' => 'template/v_footer', // Lokasi view footer
        ];


        // Memuat view 'template/v_template_home' dengan data yang telah disiapkan
        $this->load->view('template/v_template_home', $data);
    }

    // Tambahkan method lain untuk setiap halaman yang ada di navigasi Anda
    // Contoh: public function beginner(), public function kindergarten(), dll.
}
?>