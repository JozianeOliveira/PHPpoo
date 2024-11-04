<?php 
require_once 'Mamifero.php';
class Canguru extends Mamifero{
    
    //Métodos 
    public function locomover () {
        echo "<p>Pulando</p>";
    }
   
    public function usarBolsa () {
        echo "<p>Usando bolsa</p>";
    }

   
}
?>