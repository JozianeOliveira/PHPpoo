<?php 
require_once 'Aluno.php';
class Bolsista extends Aluno{
    //Atributos
    private $bolsa;

    //Métodos 
    public function renovarBolsa () {
        echo "<p>Renovando bolsa do(a) aluno(a) " . $this -> getNome() . "</p>";
    }
    public function pagarMens () {
        echo "<p>Pagando mensalidade do(a) aluno(a) " . $this -> getNome() . "</p>";
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