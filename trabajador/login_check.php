<?php
session_start();
if($_SESSION['logueado'] !== 1 && $_SESSION['empleado'] !== 1){
    unset($_SESSION);
    session_destroy();
    header("location:../index.php");
    exit;

}

include("../assets/config.php");