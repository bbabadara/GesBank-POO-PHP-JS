<?php
class Routeur
{
    public static function run()
    {
        if (isset($_REQUEST["ressource"])) {
            $ressource = $_REQUEST["ressource"];
            if (isset($_REQUEST["controller"])) {
                $controllerClass = ucfirst($_REQUEST["controller"]) . "Controller";
                require_once "../src/controllers/$ressource/$controllerClass.php";
                $demande = new $controllerClass();
            }
        }else{
            require_once "../src/controllers/html/SecurityController.php";
            $security=new SecurityController();
        }
    }
}
