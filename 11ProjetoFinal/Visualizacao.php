<?php 
require_once 'Aluno.php';
require_once 'Video.php';

class Visualizacao {
    private $espectador, $filme;

    public function __construct($espectador, $filme) {
        $this -> espectador = $espectador;
        $this -> filme = $filme;
    }

    public function getEspectador() {
        return $this -> espectador;
    }
    public function getFilme() {
        return $this -> filme;
    }

    public function setEspectador($es) {
        $this -> espectador = $es;
    }
    public function setFilme($fi) {
        $this -> filme = $fi;
    }
        
    
}
?>