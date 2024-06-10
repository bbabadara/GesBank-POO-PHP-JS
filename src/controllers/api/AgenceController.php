<?php
require_once"../src/models/AgenceModel.php";
require_once"../src/core/controller.php";
class AgenceController extends Controller
{
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
       parent::renderJson($this->agenceModel->findAll());
    }
}