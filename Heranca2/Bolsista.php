<?php 
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;

    //Métodos 
    public function renovarBolsa () {
        echo "<p>Bolsa será renovada</p>";
    }
    public function pagarMens () {
        echo "<p>Mensalidade será paga pelo bolsista</p>";
    }

    //Métodos especiais

    public function getBolsa() {
        return $this -> bolsa;
    }
    public function setBolsa($bo) {
        $this -> bolsa = $bo;
    }
   
}
?>