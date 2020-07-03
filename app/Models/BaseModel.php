<?php
abstract class BaseModel {

    protected $table;

    protected $db;

    public function __construct()
    {
        $this->table = $this->setTable();
    }

    public abstract function setTable();

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->db->query($sql);
    }

    public function store($data)
    {
        if(is_array($data)){
            $dataValue = [];
            foreach ($data as $value) {
                $dataValue[] = "'$value'";
            }
            $dataValue = "'" . implode("','", $data) . "'";
            $sql       = "INSERT INTO {$this->table}(firstname, lastname, email, password) VALUES($dataValue) ";
            $created = $this->db->query($sql);
            if ($created) {
                return true;
            } else {
                return 'Thêm mới thất bại';
            }
        }
        else {
            die ('Data bắt buộc phải là mảng !');
        }
    }
    public function update($id, $data)
    {

    }

}