<?php
require_once "../src/models/securityModel.php";
require_once "../src/core/Controller.php";
class ErrorController extends Controller
{
    public function __construct()
    {
        $this->layout = "security";
        $this->load();
    }
    public function load()
    {
        $this->showError();
    }
    private function showError()
    {
        parent::renderView("errors/eror404");
    }
}
