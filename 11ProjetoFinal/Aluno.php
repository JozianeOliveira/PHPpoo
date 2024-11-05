<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //Atributos
    private $login, $totAssistido;

    //Métodos 
    public function viuMaisUm () {
        $this -> totAssistido ++;
    }

    //Métodos especiais

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this -> login = $login;
        $this -> totAssistido = 0;
    }

    public function getLogin() {
        return $this -> login;
    }
    public function getTotAssistido() {
        return $this -> totAssistido;
    }

    public function setLogin($lo) {
        $this -> login =  $lo;
    }
    public function setTotAssistido($tot) {
        $this -> totAssistido =  $tot;
    }
   
}
?>