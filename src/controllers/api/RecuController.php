<?php
require_once "../src/models/recuModel.php";
require_once "../src/core/controller.php";
class RecuController extends Controller
{
    private recuModel $recuModel;

    public function __construct()
    {
        $this->recuModel = new recuModel;
        $this->load();
    }
    public function load()
    {
        $this->listerrecu();
    }
    private function listerrecu()
    {
        parent::renderJson($this->recuModel->findAllWithTrasactionUsers());
    }
}
