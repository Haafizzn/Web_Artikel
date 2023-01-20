<?php

class ArtikelModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArtikel()
    {
        $this->db->query('SELECT * FROM artikel inner join kategori on artikel.id_kategori = kategori.id_kategori');
        return $this->db->resultSet();
    }

    public function getArtikelById($id_artikel)
    {
        $this->db->query('SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori = kategori.id_kategori WHERE id_artikel=:id_artikel');
        $this->db->bind('id_artikel', $id_artikel);
        return $this->db->single();
    }

    public function tambah($data)
    {
        $query = "INSERT INTO artikel (id_kategori,judul,deskripsi,tanggal) VALUES(:id_kategori,:judul,:deskripsi,:tanggal)";
        $this->db->query($query);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('tanggal', date("Y-m-d"));
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE artikel SET id_kategori=:id_kategori, judul=:judul, deskripsi=:deskripsi WHERE id_artikel=:id_artikel";
        $this->db->query($query);
        $this->db->bind('id_artikel', $data['id_artikel']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id_artikel)
    {
        $this->db->query('DELETE FROM artikel WHERE id_artikel=:id_artikel');
        $this->db->bind('id_artikel', $id_artikel);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
