<?php
session_start();

if(!isset($_SESSION['online'])){
    header("location: login.php");
    exit;
}

if(!$_SESSION['online']){
    header("location: login.php");
    exit;
}
?>