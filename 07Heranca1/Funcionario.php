<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    //Atributos
    private $setor, $trabalhando;

    //Métodos 
    public function mudarTrabalho () {
        $this -> setTrabalhando(! $this -> getTrabalhando());
    }

    //Métodos especiais

    public function getSetor() {
        return $this -> setor;
    }
    public function getTrabalhando() {
        return $this -> trabalhando;
    }

    public function setSetor($se) {
        $this -> setor = $se;
    }
    public function setTrabalhando($tra) {
        $this -> trabalhando = $tra;
    }
}
?>