<?php
require_once"../src/models/DemandeModel.php";
// require_once"../src/models/CompteModel.php";
// class ApiController{
// private CompteModel $compteModel;

// public function __construct()
// {
//     $this->compteModel = new CompteModel;
//     $this->load();
// }
// public function load(){
//     $this->listerCompte();
// }
//     private function listerCompte(){
//       $datas=$this->compteModel->findAll();
//      echo json_encode($datas);
//     }
// } 
class ApiController{
private DemandeModel $demandeModel;

public function __construct()
{
    $this->demandeModel = new DemandeModel();
    $this->load();
}
public function load(){
    $this->listerDemande();
}
    private function listerDemande(){
      $datas=$this->demandeModel->findAll();
     echo json_encode($datas);
    }
} 