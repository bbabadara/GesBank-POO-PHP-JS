<?php
require_once "../src/models/DemandeModel.php";
require_once "../src/core/Controller.php";
class DemandeController extends Controller
{
    private DemandeModel $demandeModel;

    public function __construct()
    {
        $this->demandeModel = new DemandeModel;
        $this->load();
    }
    public function load()
    {
        $this->listerDemande();
    }
    private function listerDemande()
    {
        parent::renderView("demandes/liste",["datas" =>$this->demandeModel->findAllWithClient() ]);
        //  $datas = $this->demandeModel->findAllWithClient();
        //  parent::dd($datas);
        // require "../views/demandes/liste.html.php";
    }
}
