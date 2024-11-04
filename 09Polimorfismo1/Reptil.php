<?php 
require_once 'Animal.php';
class Reptil extends Animal{
    //Atributos
    private $corEscama;

    //Métodos 
    public function locomover () {
        echo "<p>Correndo</p>";
    }
    public function alimentar () {
        echo "<p>Comendo</p>";
    }
    public function emitirSom () {
        echo "<p>Som de Réptil</p>";
    }

    //Métodos especiais

    public function getCorEscama() {
        return $this -> corEscama;
    }
    public function setCorEscama($ce) {
        $this -> corEscama =  $ce;
    }
   
}
?>