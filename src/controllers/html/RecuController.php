<?php
require_once"../src/models/recuModel.php";
require_once"../src/core/Controller.php";

class RecuController extends Controller{
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
        parent::rendorView("recus/liste",["datas" =>$this->recuModel->findAllWithTrasactionUsers()]);

    //   $datas=$this->recuModel->findAllWithTrasactionUsers();
    //   require_once"../views/recus/liste.html.php";
    }
}