<?php
require_once "../src/models/AgenceModel.php";
require_once "../src/core/Controller.php";
class AgenceController extends Controller
{
    private AgenceModel $agenceModel;

    public function __construct()
    {
        $this->agenceModel = new AgenceModel;
        $this->load();
    }
    public function load()
    {
        $this->listerAgence();
    }
    private function listerAgence()
    {
        parent::renderView("agences/liste",["datas" => $this->agenceModel->findAll()]);
        // $datas = $this->agenceModel->findAll();
        // require_once "../views/agences/liste.html.php";
    }
}
