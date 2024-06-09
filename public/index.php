<?php
define("WEBROOT","http://127.0.0.1:8010");

?>


            <?php
             if (isset($_REQUEST["ressource"])) {
              $ressource=$_REQUEST["ressource"];
            if (isset($_REQUEST["controller"])) {
                $controllerClass=ucfirst($_REQUEST["controller"])."Controller";
                require_once "../src/controllers/$ressource/$controllerClass.php";
                $demande = new $controllerClass();
            }
            }
            ?>
    