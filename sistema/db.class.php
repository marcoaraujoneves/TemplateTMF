<?php

    class db{
        //Host, usuário, senha e banco de dados
        private $host ='localhost';
        private $usuario = 'marcoaraujo';
        private $senha = 'password';
        private $database='bdTMF';

        public function conecta_mysql(){
            //criar a conexão
            $con = mysqli_connect($this->host, $this->usuario,$this->senha,$this->database);
            //Ajustar o charset de comunicação entre a aplicação e o banco de dados
            mysqli_set_charset($con,'utf8');
            //Verificar erro de conexão
            if(mysqli_connect_errno()){
                echo 'Erro ao conectar com o Banco de Dados'.mysqli_connect_error();
            }
            return $con;
        }
    }
?>