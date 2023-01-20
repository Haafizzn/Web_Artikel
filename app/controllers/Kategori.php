<?php

class Kategori extends Controller
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
        $data['title'] = 'Halaman Kategori';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function artikelByKategori($id_kategori)
    {
        $data['title'] = 'Halaman Artikel berdasarkan Kategori';
        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['artikel'] = $this->model('KategoriModel')->getArtikelByIdKategori($id_kategori);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Kategori';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/create', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function simpan()
    {
        if ($this->model('KategoriModel')->tambahKategori($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/kategori');
            exit;
        }
    }

    public function edit($id_kategori)
    {

        $data['title'] = 'Halaman Edit kategori';

        $data['editKategori'] = $this->model('KategoriModel')->getkategoriById($id_kategori);
        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/edit', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function update()
    {
        if ($this->model('KategoriModel')->update($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/kategori');
            exit;
        }
    }

    public function hapus($id_kategori)
    {
        if ($this->model('KategoriModel')->delete($id_kategori) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/kategori');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/kategori');
            exit;
        }
    }
}
