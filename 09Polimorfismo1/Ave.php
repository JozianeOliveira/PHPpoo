<?php 
require_once 'Animal.php';
class Ave extends Animal{
    //Atributos
    private $corPena;

    //Métodos 
    public function locomover () {
        echo "<p>Voando</p>";
    }
    public function alimentar () {
        echo "<p>Comendo</p>";
    }
    public function emitirSom () {
        echo "<p>Som de Ave</p>";
    }
    public function fazerNinho() {
        echo "<p>Fazendo ninho</p>";
    }

    //Métodos especiais

    public function getCorPena() {
        return $this -> corPena;
    }
    public function setCorPena($cpn) {
        $this -> corPena =  $cpn;
    }
   
}
?>