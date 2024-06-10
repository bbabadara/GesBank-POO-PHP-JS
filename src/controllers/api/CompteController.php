<?php
require_once "../src/models/CompteModel.php";
require_once "../src/core/controller.php";
class CompteController extends Controller
{
    private CompteModel $compteModel;

    public function __construct()
    {
        $this->compteModel = new CompteModel;
        $this->load();
    }
    public function load()
    {
        $this->listerCompte();
    }
    private function listerCompte()
    {
        parent::renderJson($this->compteModel->findAllWithClient());
       
    }
}
