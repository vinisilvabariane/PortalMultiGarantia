<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION["logado"])) {
    echo "Vai redirecionar...";
    session_destroy();
    header("Location: /PortalMultiGarantia/views/login/");
    exit;
}
echo "Página protegida!";
