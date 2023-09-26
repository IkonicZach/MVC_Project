<?php
class Home extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model("userModel");
    }
    public function index($data = [])
    {
        $data = $this->userModel->getAllUsers();
        $this->view("home/index", $data);
    }
}
