<?php
require_once"../src/models/UsersModel.php";
class ClientController{
private UsersModel $usersModel;

public function __construct()
{
    $this->usersModel = new UsersModel;
    $this->load();
}
public function load(){
    $this->listClient();
}
    private function listClient(){
      $datas=$this->usersModel->  findAllUsersByProfil("Client");
      echo json_encode($datas);
    }
}