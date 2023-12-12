<?php

class DBConnect {
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $dbname = "hcc_database";
    private $conn = NULL;

    public function __construct() {         
        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname";
            $this->conn = new PDO($dsn, $this->username, $this-> password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro ao conectar: " . $e->getMessage();
        }
	}  

    public function cadastrar_usuario($nome, $cpf, $data_nasc, $sexo, $email, $senha, $tipo, $categoria, $cidade, $estado, $celular, $foto) {
        try {
            $sql = "INSERT INTO usuario (`nome`, `cpf`, `data_nasc`, `sexo`, `email`, `senha`, `tipo_usuario`, `categoria`, `cidade`, `estado`, `celular`, `foto`) VALUES ('$nome', '$cpf', '$data_nasc', '$sexo', '$email', '$senha', '$tipo', '$categoria', '$cidade', '$estado', '$celular', '$foto')";
            $stmt = $this->conn->query($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
            return;
        }
        return $stmt;
    
    }

    public function select_login($email, $senha) {
        try {
            $sql = "SELECT senha FROM usuario WHERE email=:email";
            $stmt = $this->conn->prepare($sql);
            // Bind do parâmetro
            $stmt->bindParam(':email', $email);
            // Execução da consulta
            $stmt->execute();
            // Obtenção do resultado
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verifica se o email existe
            if ($result) {
                // Retorna a senha correspondente se o email existir
                return $result['senha'];
            } else {
                // Retorna null se o email não existir
                return null;
            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return "SQL Error";
        }
    }
    
    public function select_username ($email) {
        try{
            $sql = "SELECT nome FROM usuario WHERE email='$email'";
            $stmt = $this->conn->query($sql);
            return $stmt;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return "SQL Error";
        }
    }

    public function delete_usuario ($email){
        try{
            $sql = "DELETE FROM usuario WHERE email='$email'";
            $stmt = $this->conn->query($sql);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }    
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return "SQL Error";
        }
    }

    public function select_foto ($username) {
        try {
            $sql = "SELECT foto FROM usuario WHERE nome = :username";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $caminhofoto = $stmt->fetch(PDO::FETCH_ASSOC);
            return $caminhofoto;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return "SQL Error";
        }
    }
    
    /*
    public function select_agendamentos(){
        
    }*/

    public function __destruct() { 
        $this->conn = NULL;
	} 
}

?>