<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $matr, $curso;

    //Métodos 
    public function cancelarMatr () {
        echo "<p>Matrícula será cancelada</p>";
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