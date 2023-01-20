<?php

class Home extends Controller
{
    public function __construct()
    {
        //Pengecekan, jika belum ada session akan diarahkan ke halaman login
        if ($_SESSION['session_login'] != 'sudah_login') {
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman Home';
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['artikel'] = $this->model('ArtikelModel')->getAllArtikel();
        $data['info'] = $this->model('InfoModel')->getInfo();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
}
