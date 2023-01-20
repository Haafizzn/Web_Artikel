<?php

class KategoriModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM kategori ORDER by nama ASC');
        return $this->db->resultSet();
    }

    public function getArtikelByIdKategori($id_kategori_kategori)
    {
        $this->db->query('SELECT * FROM artikel INNER JOIN kategori ON artikel.id_kategori = kategori.id_kategori WHERE kategori.id_kategori=:id_kategori');
        $this->db->bind('id_kategori', $id_kategori_kategori);
        return $this->db->resultSet();
    }

    public function getKategoriById($id_kategori)
    {
        $this->db->query('SELECT * FROM kategori WHERE id_kategori=:id_kategori');
        $this->db->bind('id_kategori', $id_kategori);
        return $this->db->single();
    }

    public function tambahKategori($data)
    {
        $query = "INSERT INTO kategori (nama) VALUES(:nama)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE kategori SET nama=:nama WHERE id_kategori=:id_kategori";
        $this->db->query($query);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('nama', $data['nama']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id_kategori)
    {
        $this->db->query('DELETE FROM kategori WHERE id_kategori=:id_kategori');
        $this->db->bind('id_kategori', $id_kategori);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
