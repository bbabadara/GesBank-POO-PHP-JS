<?php
require_once "../src/models/SecurityModel.php";
require_once "../src/core/Controller.php";

class SecurityController extends Controller
{
    private SecurityModel $securityModel;
    public function __construct()
    {
        parent::__construct();
        $this->securityModel = new SecurityModel;
        $this->layout = "security";
        $this->load();
    }
    public function load()
    {
        if (isset($_REQUEST["action"])) {
            if ($_REQUEST["action"] == "login") {
                $this->login();
            } elseif ($_REQUEST["action"] == "off") {
                $this->logOut();
            } else {
                require_once "../src/controllers/html/ErrorController.php";
                $controller = new ErrorController();
            }
        } else {
            $this->showLoginForm();
        }
    }

    public function showLoginForm()
    {
        parent::renderView("security/login1");
    }
    public function redirectAfterConnect()
    {
        switch (Autorisation::getRole()) {
            case 'Client':
                $this->redirectToRoot("ressource=html&controller=demande");
                break;

            case "CC":
                $this->redirectToRoot("ressource=html&controller=demande");
                break;
            case "RG":
                $this->redirectToRoot("ressource=html&controller=Transaction");
                break;
            default:
                $this->redirectToRoot("ressource=html&controller=security");
                break;
        }
    }

    public function logOut()
    {
        unset($_SESSION["user"]);
        session_destroy();
        $this->redirectToRoot("ressource=html&controller=security");
    }
    public function logIn()
    {
        if (!Validator::isEmpty("email", "Login obligatoire")) {
            Validator::isEmail("email");
        }
        Validator::isEmpty("pwd");
        if (Validator::validate()) {
            $connect = $this->securityModel->findUserLogged($_POST["email"], $_POST["pwd"]);
            //  $this->dd(serialize($connect));
            if ($connect) {
                Session::setObjet("user", $connect);
                // $this->dd(Autorisation::hasRole("Client"));
                $this->redirectAfterConnect();
            } else {
                parent::renderView("security/login1", ["errors" => ["connect" => "Login ou mot de passe incorrect"]]);
            }
        } else {
            parent::renderView("security/login1", ["errors" => Validator::$errors]);
        }
        // extract($_POST);

        // $_SESSION["user"] = $this->securityModel->findUserLogged($email, $pwd);

        // if (!empty($_SESSION["user"])) {

        //     if ($_SESSION["user"]["libp"] == "Client") {
        //         $this->redirectToRoot("ressource=html&controller=compte");
        //     } elseif ($_SESSION["user"]["libp"] == "RG") {
        //         $this->redirectToRoot("ressource=html&controller=Transaction");
        //     } elseif ($_SESSION["user"]["libp"] == "CC") {
        //         $this->redirectToRoot("ressource=html&controller=demande");
        //     }
        // } else {
        //     $this->showLoginForm();
        // }
    }
}
