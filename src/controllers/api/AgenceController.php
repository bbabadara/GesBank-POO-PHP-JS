<?php
require_once"../src/models/AgenceModel.php";
class AgenceController{
private AgenceModel $agenceModel;

public function __construct()
{
    $this->agenceModel = new AgenceModel;
    $this->load();
}
public function load(){
    $this->listerAgence();
}
    private function listerAgence(){
      $datas=$this->agenceModel->  findAll();
       echo json_encode($datas);
    }
}