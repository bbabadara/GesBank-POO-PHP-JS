<?php
require_once "../src/models/DemandeModel.php";
require_once "../src/core/controller.php";
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
        parent::renderJson($this->demandeModel->findAllWithClient()) ;
        
        // $datas = $this->demandeModel->findAllWithClient();
        // echo json_encode($datas);
    }
}
