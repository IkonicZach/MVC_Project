<?php

class UserModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database; // instantiation database object
    }
    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM users");
        return $this->db->multipleSet();
    }
}
