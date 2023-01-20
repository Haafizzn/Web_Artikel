<?php

class Artikel extends Controller
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
        $data['title'] = 'Halaman Artikel';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['artikel'] = $this->model('ArtikelModel')->getAllArtikel();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('artikel/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id_artikel)
    {

        $data['title'] = 'Detail Artikel';
        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['artikel'] = $this->model('ArtikelModel')->getArtikelById($id_artikel);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('artikel/detail', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Artikel';
        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('artikel/create', $data); //body
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function simpan()
    {
        if ($this->model('ArtikelModel')->tambah($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/artikel');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/artikel');
            exit;
        }
    }

    public function edit($id_artikel)
    {

        $data['title'] = 'Halaman Edit Artikel';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['artikel'] = $this->model('ArtikelModel')->getArtikelById($id_artikel);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('artikel/edit', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function update()
    {
        if ($this->model('ArtikelModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/artikel');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/artikel');
            exit;
        }
    }

    public function hapus($id_artikel)
    {
        if ($this->model('ArtikelModel')->delete($id_artikel) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/artikel');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/artikel');
            exit;
        }
    }
}
