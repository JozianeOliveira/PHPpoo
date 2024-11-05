<?php 
abstract class Animal{
    //Atributos
    protected $peso, $idade, $membros;

    //Métodos 
    public function emitirSom() {
        
    }

    //Métodos especiais

    public function getPeso() {
        return $this -> peso;
    }
    public function getIdade() {
        return $this -> idade;
    }
    public function getMembros() {
        return $this -> membros;
    }

    public function setPeso($pe) {
        $this -> peso = $pe;
    }
    public function setIdade($id) {
        $this -> idade = $id;
    }
    public function setMembros($mem) {
        $this -> membros = $mem;
    }
    
}
?>