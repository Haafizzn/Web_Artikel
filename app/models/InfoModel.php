<?php

class InfoModel
{

    private $table = 'info';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getInfo()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->single();
    }
}
