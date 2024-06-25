<?php
define("WEBROOT","http://127.0.0.1:8010");
require_once "../src/core/Routeur.php";
require_once "../src/core/Validator.php";
require_once "../src/core/Session.php";
require_once "../src/core/Autorisation.php";
 session_start();
Routeur::run();