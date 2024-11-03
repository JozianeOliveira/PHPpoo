<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr, $curso;

    //Métodos 
    public function pagarMens () {
        echo "<p>Pagando mensalidade do(a) aluno(a) " . $this -> getNome() . "</p>";
    }

    //Métodos especiais

    public function getMatr() {
        return $this -> matr;
    }
    public function getCurso() {
        return $this -> curso;
    }

    public function setMatr($ma) {
        $this -> matr = $ma;
    }
    public function setCurso($cur) {
        $this -> curso = $cur;
    }
}
?>