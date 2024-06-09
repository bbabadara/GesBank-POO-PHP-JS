<?php
require_once "../src/models/UsersModel.php";
require_once "../src/core/Controller.php";

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
        parent::rendorView("clients/liste",["datas" => $this->usersModel->findAllUsersByProfil("Client")]);
        // $datas = $this->usersModel->findAllUsersByProfil("Client");
        // require_once "../views/clients/liste.html.php";
    }
}
