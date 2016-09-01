<?php

/* 
    ConnectionFactory.php
*/

	class ConnectionFactory {

		private $servidor = "localhost";
		private $usuario = "root";
		private $senha = "";
		private $nome_do_banco_de_dados = "dbmanageroftasks";

        private $connection;

		function getConnection() {
			try {
                $this->connection = new PDO("mysql:host=$this->servidor;dbname=$this->nome_do_banco_de_dados", $this->usuario, $this->senha);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				echo "Mensagem: " . $e->getMessage();
			
            }		
		}
	}

?>
