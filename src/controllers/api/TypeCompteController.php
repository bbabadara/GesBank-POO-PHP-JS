<?php
require_once "../src/models/TypeCompteModel.php";
require_once "../src/core/controller.php";
class TypeCompteController extends Controller
{
    private TypeCompteModel $typeCompteModel;

    public function __construct()
    {
        $this->typeCompteModel = new TypeCompteModel;
        $this->load();
    }
    public function load()
    {
        $this->listerTypeCompte();
    }
    private function listerTypeCompte()
    {
        parent::renderJson($this->typeCompteModel->findAll());
        
    }
}
