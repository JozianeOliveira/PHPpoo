<?php 
require_once 'Animal.php';
class Peixe extends Animal{
    //Atributos
    private $corEscama;

    //Métodos 
    public function locomover () {
        echo "<p>Nadando</p>";
    }
    public function alimentar () {
        echo "<p>Comendo</p>";
    }
    public function emitirSom () {
        echo "<p>Som de Peixe</p>";
    }
    public function soltarBolha() {
        echo "<p>Soltando bolhas</p>";
    }

    //Métodos especiais

    public function getCorEscama() {
        return $this -> corEscama;
    }
    public function setCorEscama($cep) {
        $this -> corEscama =  $cep;
    }
   
}
?>