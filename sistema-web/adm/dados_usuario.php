<?php

    class usuario {
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

        public function select_perfil ($email) {
            try{
                $sql = "SELECT * FROM usuario WHERE email = '$email'";
                $stmt = $this->conn->prepare($sql);
                // Bind do parâmetro
                $stmt->bindParam(':email', $email);
                // Execução da consulta
                $stmt->execute();
                // Obtenção do resultado
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $nome = $row["nome"];
                    $cpf = $row["cpf"];
                    $data_nasc = $row["data_nasc"]; 
                    $sexo = $row["sexo"];
                    $email = $row["email"];
                    $tipo = $row["tipo"];
                    $categoria = $row["categoria"];
                    $cidade = $row["cidade"];
                    $estado = $row["estado"];
                    $celular = $row["celular"];
                    $foto = $row["foto"];
                } else {
                    echo "Usuário não encontrado.";
                    exit;
                }
            }catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
                return;
            }
        }

        public function __destruct() { 
            $this->conn = NULL;
        } 
    }
?>