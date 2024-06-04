<?php
require_once"../src/models/CompteModel.php";
class CompteController{
private CompteModel $compteModel;

public function __construct()
{
    $this->compteModel = new CompteModel;
    $this->load();
}
public function load(){
    $this->listerCompte();
}
    private function listerCompte(){
      $datas=$this->compteModel->findAllWithClient();
      require_once"../views/comptes/liste.html.php";
    }
}