<?php 
    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        //Método construtor
        public function __construct () { 
            //ou public function ContaBanco () {}
            $this -> setSaldo(0);
            $this -> setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function getNumconta () {
            return $this -> numConta;
        }
        public function getTipo () {
            return $this -> tipo;
        }        
        public function getDono () {
            return $this -> dono;
        }        
        public function getSaldo () {
            return $this -> saldo;
        }        
        public function getStatus () {
            return $this -> status;
        }

        public function setNumConta ($num) {
            $this -> numConta = $num;
        } 
        public function setTipo ($tip) {
            $this -> tipo = $tip;
        }
        public function setDono ($don) {
            $this -> dono = $don;
        }
        public function setSaldo ($sal) {
            $this -> saldo = $sal;
        }
        public function setStatus ($st) {
            $this -> status = $st;
        }

        public function abrirConta($tip) {
            $this -> setTipo($tip);
            $this -> setStatus(true);
            
            if ($tip == "cc") {
                $this -> setSaldo(50);
            } else if ($tip == "cp"){
                $this -> setSaldo(150);
            }
        }

        public function fecharConta() {            
            if ($this -> getSaldo() > 0) {
                echo "<p>Conta com dinheiro, não posso fechá-la</p>";
            } else if ($this -> getSaldo() < 0){
                echo "<p>Conta em débito, impossível encerrar</p>";
            } else {
                $this -> setStatus(false);
                echo "<p>Conta de " . $this -> getDono() . " fechada com sucesso.</p>";
            }
        }

        public function depositar($val) {            
            if ($this -> getStatus()) {
                $this -> setSaldo($this -> getSaldo() + $val);
                echo "<p>Depósito de $val na conta de " . $this -> getDono() . "</p>";
            } else {
                echo "<p>Conta fechada, impossível depositar</p>";
            }
        }

        public function sacar($val) {            
            if ($this -> getStatus()) {
                if ($this -> getSaldo() >= $val) {
                  $this -> setSaldo($this -> getSaldo() - $val); 
                  echo "<p>Saque autorizado de R$ $val na conta de " . $this -> getDono() . "</p>"; 
                } else {
                    echo "<p>Saldo insuficiente para saque</p>";
                }
            } else {
                echo "<p>Impossível sacar, conta fechada</p>";
            }
        }

        public function pagarMensal() {            
            if ($this -> getTipo() == "cc") {
                $val = 12;
            } else if ($this -> getTipo() == "cp"){
                $val = 20;
            } 
            if ($this -> getStatus()) { 
                $this -> setSaldo($this -> getSaldo() - $val);
                echo "<p>Mensalidade de R$ $val debitada da conta de " . $this -> getDono() . "</p>";
            } else {
                echo "<p>Problemas com a conta. Impossível cobrar</p>";
            }
        }
           
    }
?>