<?php 
    class Caneta {
        public $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        //Método construtor
        public function __construct ($m, $c, $p) { 
            //ou public function Caneta () {}
            $this -> modelo = $m;
            $this -> cor = $c;
            $this -> ponta =$p;
            $this -> tampar();
        }

        public function tampar () {
            $this -> tampada = true;
        }

        public function getModelo () {
            return $this -> modelo;
        }
        public function setModelo ($m) {
            $this -> modelo = $m; 
        }
        public function getPonta () {
            return $this -> ponta;
        }
        public function setPonta ($p) {
            $this -> ponta = $p;
        }        
    }
?>