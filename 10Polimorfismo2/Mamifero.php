<?php 
require_once 'Animal.php';
class Mamifero extends Animal{
    //Atributos
    private $corPelo;

    //Métodos 
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