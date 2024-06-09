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
            if ($_REQUEST["action"] == "cClient") {
                parent::rendorView("comptes/liste",["datas" => $this->compteModel->findAllCompteByClient($_REQUEST["key"])]);
                // $datas = $this->compteModel->findAllCompteByClient($_REQUEST["key"]);
                // require_once "../views/comptes/liste.html.php";
            }
        }else {
            parent::rendorView("comptes/liste",["datas" => $this->compteModel->findAllWithClient()]);
            // $datas = $this->compteModel->findAllWithClient();
            // require_once "../views/comptes/liste.html.php";
        }
    }
}
