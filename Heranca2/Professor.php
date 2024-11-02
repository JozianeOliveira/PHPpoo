<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa{
    //Atributos
    private $especialidade, $salario;

    //Métodos 
    public function receberAum ($aum) {
        $this -> setSalario($this -> getSalario() + $aum);
    }

    //Métodos especiais

    public function getespecialidade() {
        return $this -> especialidade;
    }
    public function getSalario() {
        return $this -> salario;
    }

    public function setEspecialidade($esp) {
        $this -> especialidade = $esp;
    }
    public function setSalario($sal) {
        $this -> salario = $sal;
    }
}
?>