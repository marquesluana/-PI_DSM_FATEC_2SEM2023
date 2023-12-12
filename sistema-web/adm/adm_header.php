<?php
require_once('..\session.php');

if (!isset($_SESSION)) {//Verificar se a sessão já não está aberta.
    session_start();
  }

if(!isset($_SESSION['online']) || !$_SESSION['online']){
    header("location: ..\login.php");
    exit;
}

?>