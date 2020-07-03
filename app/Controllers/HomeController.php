<?php
include ("BaseController.php");


class HomeController {

    public $model;

    public function __construct($db)
    {
        $this->model = new User($db);
    }

    public function store($params = [])
    {
        $result = $this->model->store($params);
        return include ("app/Views/Pages/Home.php");
    }

    public function index()
    {
        $result = $this->model->getAll();
        return include ("app/Views/admin/Pages/Master.php");
    }
}