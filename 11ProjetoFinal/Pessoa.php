<?php 
abstract class Pessoa{
    //Atributos
    protected $nome, $idade, $sexo, $experiencia;

    //Métodos 
    protected function ganharExp($n) { 
        $this -> experiencia += $n;
    }

    //Métodos especiais

    public function __construct($nome, $idade, $sexo) {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> sexo = $sexo;
        $this -> experiencia = 0;
    }

    public function getNome() {
        return $this -> nome;
    }
    public function getIdade() {
        return $this -> idade;
    }
    public function getSexo() {
        return $this -> sexo;
    }
    public function getExperiencia() {
        return $this -> experiencia;
    }

    public function setNome($no) {
        $this -> nome = $no;
    }
    public function setIdade($id) {
        $this -> idade = $id;
    }
    public function setSexo($se) {
        $this -> sexo = $se;
    }
    public function setExperiencia($ex) {
        $this -> experiencia = $ex;
    }
    
}
?>