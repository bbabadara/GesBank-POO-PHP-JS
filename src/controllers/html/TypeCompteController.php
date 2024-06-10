<?php
require_once"../src/models/TypeCompteModel.php";
require_once"../src/core/Controller.php";

class TypeCompteController extends Controller{
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
        parent::renderView("typeComptes/liste",["datas" =>$this->typeCompteModel->findAll() ]);

    //   $datas=$this->typeCompteModel->findAll();
    //   require_once"../views/typeComptes/liste.html.php";
    }
}