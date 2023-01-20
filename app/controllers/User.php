<?php

class User extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman User';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $data['user'] = $this->model('UserModel')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('user/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Tambah User';

        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('user/create', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function simpanUser()
    {
        $row = $this->model('UserModel')->cekUsername();
        if ($row['username'] == $_POST['username']) {
            Flasher::setMessage('Gagal', 'Username yang anda masukan sudah pernah digunakan!', 'danger');
            header('location: ' . base_url . '/user/tambah');
            exit;
        } else {
            if ($this->model('UserModel')->tambahUser($_POST) > 0) {
                Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
                header('location: ' . base_url . '/user');
                exit;
            } else {
                Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
                header('location: ' . base_url . '/user');
                exit;
            }
        }
    }

    public function edit($id_user)
    {

        $data['title'] = 'Halaman Edit User';

        $data['user'] = $this->model('UserModel')->getUserById($id_user);
        $data['info'] = $this->model('InfoModel')->getInfo();
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('user/edit', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function updateUser()
    {
        if ($this->model('UserModel')->updateDataUser($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/user');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/user');
            exit;
        }
    }

    public function hapus($id_user)
    {
        if ($this->model('UserModel')->deleteUser($id_user) > 0) {
            Flasher::setMessage('Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/user');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/user');
            exit;
        }
    }
}
