<?php

/*
    Tarefa.php
*/
    class Tarefa {

        private $nome;
        private $descricao;
        private $prioridade;
        private $concluido;

        function setNome($nome) {
            $this->nome = $nome;
        }

        function getNome() {
            return $this->nome;
        }

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        function getDescricao() {
            return $this->descricao;
        }

        function setPrioridade($prioridade) {
            $this->prioridade = $prioridade;
        }

        function getPrioridade() {
            return $this->prioridade;
        }

        function setConcluido($concluido) {
            $this->concluido = $concluido;
        }

        function getConcluido() {
            return $this->concluido;
        }
    }

?>