<?php
require_once"../src/models/ProfilModel.php";
class ProfilController{
private ProfilModel $profilModel;

public function __construct()
{
    $this->profilModel = new ProfilModel;
    $this->load();
}
public function load(){
    $this->listerProfil();
}
    private function listerProfil(){
      $datas=$this->profilModel->  findAll();
       require_once"../views/profils/liste.html.php"; 
    }
}