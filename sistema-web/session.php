<?php

class HCCsession {

    public function __construct() {
        session_start();
    }

    public function login ($email, $senha, $stmt) {
        if ($stmt == NULL){
            echo "E-mail não cadastrado.";
            $_SESSION['online'] = FALSE;
        } else if ($senha == $stmt){
            $_SESSION['online'] = TRUE;
            $_SESSION['email'] = $email;
            header("location: ./adm/index.php");
        } else if ($stmt == "SQL Error"){
            echo "Error SQL";
            $_SESSION['online'] = FALSE;
        } else {
            echo "Senha incorreta.";
            $_SESSION['online'] = FALSE;
        }
    }
}

?>