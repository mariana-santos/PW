<?php
    class Cliente{
        private $nome;
        private $rg;
        private $cpf;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setRG($rg){
            $this->rg = $rg;
        }

        public function setCPF($cpf){
            $this->cpf = $cpf;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getRG(){
            return $this->rg;
        }

        public function getCPF(){
            return $this->cpf;
        }
    }
?>