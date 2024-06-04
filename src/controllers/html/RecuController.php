<?php
require_once"../src/models/recuModel.php";
class RecuController{
private recuModel $recuModel;

public function __construct()
{
    $this->recuModel = new recuModel;
    $this->load();
}
public function load(){
    $this->listerrecu();
}
    private function listerrecu(){
      $datas=$this->recuModel->findAllWithTrasactionUsers();
      require_once"../views/recus/liste.html.php";
    }
}