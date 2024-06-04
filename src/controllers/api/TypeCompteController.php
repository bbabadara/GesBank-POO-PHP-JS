<?php
require_once"../src/models/TypeCompteModel.php";
class TypeCompteController{
private TypeCompteModel $typeCompteModel;

public function __construct()
{
    $this->typeCompteModel = new TypeCompteModel;
    $this->load();
}
public function load(){
    $this->listerTypeCompte();
}
    private function listerTypeCompte(){
      $datas=$this->typeCompteModel->findAll();
      echo json_encode($datas);
    }
}