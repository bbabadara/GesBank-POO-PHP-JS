<?php
class Routeur
{
    public static function run()
    {
        if (!isset($_SESSION["user"]) && $_REQUEST["controller"]!="security") {
            require_once "../src/controllers/html/SecurityController.php";
            $security=new SecurityController();
            exit();
        }
        
        if (isset($_REQUEST["ressource"])) {
            $ressource = $_REQUEST["ressource"];
            if (isset($_REQUEST["controller"])) {
                $controllerClass = ucfirst($_REQUEST["controller"]) . "Controller";
                $fileController= "../src/controllers/$ressource/$controllerClass.php";
                if (file_exists($fileController)) {
                    require_once $fileController;
                    $controller = new $controllerClass();
                }else {
                
                    require_once "../src/controllers/html/ErrorController.php";
                    $controller = new ErrorController();
                }
                // $demande = new $controllerClass();
            }
        }else{
            require_once "../src/controllers/html/SecurityController.php";
            $security=new SecurityController();
        }
    
    }
}
