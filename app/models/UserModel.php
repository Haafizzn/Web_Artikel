<?php

class UserModel
{

    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id_user)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }



    public function tambahUser($data)
    {
        $query = "INSERT INTO user (nama,username,password,level) VALUES(:nama,:username,:password,:level)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', md5($data['password']));
        $this->db->bind('level', $data['level']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekUsername()
    {
        $username = $_POST['username'];
        $this->db->query("SELECT * FROM user WHERE username = :username");
        $this->db->bind('username', $username);
        return $this->db->single();
    }


    public function updateDataUser($data)
    {
        if (empty($_POST['password'])) {
            $query = "UPDATE user SET nama=:nama, level=:level WHERE id_user=:id_user";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('level', $data['level']);
        } else {
            $query = "UPDATE user SET nama=:nama, password=:password, level=:level WHERE id_user=:id_user";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('level', $data['level']);
            $this->db->bind('password', md5($data['password']));
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteUser($id_user)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id_user);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
