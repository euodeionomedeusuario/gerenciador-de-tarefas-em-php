<?php

/* 
    Connection.php
**/

require "ConnectionFactory.php";
require "Tarefa.php";

    class Connection {

		private $connection;
	
		function abrir() {
			try {
				$cf = new ConnectionFactory();
				$this->connection = $cf->getConnection();
				$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				echo "Mensagem: " . $e->getMessage();
			}
		}


		function inserir(Tarefa $t) {
            
            $sql = "INSERT INTO tarefa (nome, descricao, prioridade, concluido) VALUES (:nome, :descricao, :prioridade, :concluido)";

            try {
                $this->abrir();
                
                $stmt = $this->connection->prepare($sql);
                $stmt->bindParam(":nome", $t->getNome());
                $stmt->bindParam(":descricao", $t->getDescricao());
                $stmt->bindParam(":prioridade", $t->getPrioridade());
                $stmt->bindParam(":concluido", $t->getConcluido());

                $stmt->execute();

                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
				echo "Mensagem: " . $e->getMessage();
			}
        }
	}
?>