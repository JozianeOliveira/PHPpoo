<?php 

class Pessoa{
    //Atributos
    private $nome, $idade, $sexo;

    //Métodos 
    public function fazerAniver ($l1, $l2) {
        $this -> idade ++;
    }

    //Métodos especiais
    public function __construct($no, $id, $se) {
        $this -> nome = $no;
        $this -> idade = $id;
        $this -> sexo = $se;
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

    public function setNome($no) {
        $this -> nome = $no;
    }
    public function setIdade($id) {
        $this -> idade = $id;
    }
    public function setSexo($se) {
        $this -> sexo = $se;
    }
    
}
?>