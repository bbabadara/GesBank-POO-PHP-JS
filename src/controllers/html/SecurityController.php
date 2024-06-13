<?php
require_once "../src/models/SecurityModel.php";
require_once "../src/core/Controller.php";

class SecurityController extends Controller
{
    private SecurityModel $securityModel;
    public function __construct()
    {
        $this->securityModel = new SecurityModel;
        $this->layout = "security";
        $this->load();
    }
    public function load()
    {
        $this->listerSecurity();
    }
    private function listerSecurity()
    {

        if (isset($_REQUEST["action"])) {
          
            if ($_REQUEST["action"] == "login") {
                extract($_POST);
                $_SESSION["user"] = $this->securityModel->findUserLogged($email, $pwd);

                if (!empty($_SESSION["user"])) {
                    
                    if ($_SESSION["user"]["libp"] == "Client") {
                        // $this->dd($_SESSION["user"] );
                        $this->redirectToRoot("ressource=html&controller=demande");
                    } elseif ($_SESSION["user"]["libp"] == "RG") {
                        echo "salam ";
                    } elseif ($_SESSION["user"]["libp"] == "CC") {
                        echo "salam todos";
                    }
                } else {
                    parent::renderView("security/login1");
                }
            } elseif ($_REQUEST["action"] == "off") {
                unset($_SESSION["user"]);
                session_destroy();
                $this->redirectToRoot("ressource=html&controller=security");
            }
        } else {
            parent::renderView("security/login1");
        }
    }
}
