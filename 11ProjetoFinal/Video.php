<?php 
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    //Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    //Métodos especiais
    public function __construct($titulo) {
        $this -> titulo = $titulo;
        $this -> avaliacao = 1;
        $this -> views = 0;
        $this -> curtidas = 0;
        $this -> reproduzindo = false;
    }

    public function getTitulo() {
        return $this -> titulo;
    }
    public function getAvaliacao() {
        return $this -> avaliacao;
    }
    public function getViews() {
        return $this -> views;
    }
    public function getCurtidas() {
        return $this -> curtidas;
    }
    public function getReproduzindo() {
        return $this -> reproduzindo;
    }

    public function setTitulo($ti) {
        $this -> titulo = $ti;
    }
    public function setAvaliacao($av) {
        $this -> avaliacao = $av;
    }
    public function setViews($vi) {
        $this -> views = $vi;
    }
    public function setCurtidas($cur) {
        $this -> curtidas = $cur;
    }
    public function setReproduzindo($re) {
        $this -> reproduzindo = $re;
    }

    public function play() {
        $this -> reproduzindo = true;
    }
    public function pause() {
        $this -> reproduzindo = false;  
    }
    public function like() {
        $this -> curtidas ++;
    }
}

?>