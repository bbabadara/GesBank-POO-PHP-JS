<?php
require_once "../src/models/CompteModel.php";
require_once "../src/core/Controller.php";

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
        if (isset($_REQUEST["action"])) {
            if ($_REQUEST["action"] == "cClient" || $_SESSION["user"]["libp"] == "Client") {
                $key = $_SESSION["user"]["libp"] == "Client" ? $_SESSION["user"]["idu"] : $_REQUEST["key"];
                parent::renderView("comptes/liste", ["datas" => $this->compteModel->findAllCompteByClient($key)]);
            }
        } else {
            if ($_SESSION["user"]["libp"] == "Client") {
                parent::renderView("comptes/liste", ["datas" => $this->compteModel->findAllCompteByClient($_SESSION["user"]["idu"])]);
            } else {
                parent::renderView("comptes/liste", ["datas" => $this->compteModel->findAllWithClient()]);
            }
        }
    }
}
