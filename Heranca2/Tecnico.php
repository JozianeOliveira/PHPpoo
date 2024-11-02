<?php 
require_once 'Aluno.php';
class Tecnico extends Aluno{
    //Atributos
    private $registroProfissional;

    //Métodos 
    public function praticar () {
        echo "<p>Praticando...</p>";
    }

    //Métodos especiais

    public function getRegistroProfissional() {
        return $this -> registroProfissional;
    }
    public function setRegistroProfissional($rp) {
        $this -> registroProfissional = $rp;
    }
   
}
?>