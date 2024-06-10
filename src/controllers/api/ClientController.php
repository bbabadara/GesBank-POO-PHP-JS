<?php
require_once "../src/models/UsersModel.php";
require_once "../src/core/controller.php";
class ClientController extends Controller
{
    private UsersModel $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel;
        $this->load();
    }
    public function load()
    {
        $this->listClient();
    }
    private function listClient()
    {
        parent::renderJson($this->usersModel->findAllUsersByProfil("Client"));

    }
}
