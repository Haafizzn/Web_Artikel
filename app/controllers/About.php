<?php

class About extends Controller
{
    public function __construct()
    {
        //Pengecekan, jika belum ada session akan diarahkan ke halaman login
        if ($_SESSION['session_login'] != 'sudah_login') {
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    //halaman utama
    public function index()
    {
        //mengatur tittle halaman
        $data['title'] = 'About Me';

        //Menggambil data info dari model (InfoModel)
        $data['info'] = $this->model('InfoModel')->getInfo();

        //Menggambil data kategori dari model (KategoriModel)
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        //tampilan
        $this->view('templates/header', $data); //header
        $this->view('templates/sidebar', $data); //sidebar atau nav
        $this->view('about/index'); //halaman about
        $this->view('templates/aside', $data); //aside
        $this->view('templates/footer', $data); //footer
    }
}
