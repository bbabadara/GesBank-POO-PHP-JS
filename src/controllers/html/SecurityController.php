<?php
require_once"../src/models/SecurityModel.php";
require_once"../src/core/Controller.php";

class SecurityController extends Controller{
private SecurityModel $securityModel;
public function __construct()
{
    $this->securityModel = new SecurityModel;
    $this->layout="security";
    $this->load();
}
public function load(){
    $this->listerSecurity();
}
    private function listerSecurity(){
        parent::renderView("security/login1");

    }
}