<?php
require_once"../src/models/ProfilModel.php";
require_once"../src/core/Controller.php";

class ProfilController extends Controller{
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
        parent::renderView("profils/liste",["datas" => $this->profilModel->  findAll()]);

    //   $datas=$this->profilModel->  findAll();
    //    require_once"../views/profils/liste.html.php"; 
    }
}