<?php 
require_once 'Animal.php';
class Mamifero extends Animal{
    //Atributos
    private $corPelo;

    //Métodos 
    public function locomover () {
        echo "<p>Correndo</p>";
    }
    public function alimentar () {
        echo "<p>Mamando</p>";
    }
    public function emitirSom () {
        echo "<p>Som de Mamífero</p>";
    }

    //Métodos especiais

    public function getCorPelo() {
        return $this -> corPelo;
    }
    public function setCorPelo($cp) {
        $this -> corPelo =  $cp;
    }
   
}
?>