<?php

class User extends BaseModel {

    public $table = 'users';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function setTable()
    {
        return $this->table;
    }
}