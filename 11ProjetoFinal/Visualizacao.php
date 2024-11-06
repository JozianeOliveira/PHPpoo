<?php 
require_once 'Aluno.php';
require_once 'Video.php';

class Visualizacao {
    private $espectador, $filme;

    public function __construct($espectador, $filme) {
        $this -> espectador = $espectador;
        $this -> filme = $filme;
        $this -> filme -> setViews($this -> filme -> getViews() + 1);
        $this -> espectador -> setTotAssistido($this -> espectador -> getTotAssistido() + 1);
    }

    public function avaliar() {
        $this -> filme -> setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this -> filme -> setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        $nova = 0;
        if ($porc <= 20) {
            $nove = 3;
        } elseif ($porc <= 50) {
            $nova = 5;
        } elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this -> filme -> setAvaliacao($nova);
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