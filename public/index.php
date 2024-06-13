<?php
define("WEBROOT","http://127.0.0.1:8010");
require_once "../src/core/Routeur.php";
session_start();
Routeur::run();