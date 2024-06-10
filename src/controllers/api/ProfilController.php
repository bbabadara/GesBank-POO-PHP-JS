<?php
require_once"../src/models/ProfilModel.php";
require_once"../src/core/controller.php";
class ProfilController extends Controller
 {
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
        parent::renderJson($this->profilModel->findAll());
      
    }
}