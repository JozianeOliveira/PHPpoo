<?php 
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Métodos
    public function detalhes() {
        echo "<p>-----------------------------------</p>";
        echo "<p>Título do livro: " . $this -> getTitulo() . "</p>";
        echo "<p>Autor do livro: " . $this -> getAutor() . "</p>";
        echo "<p>Total de páginas: " . $this -> getTotPaginas() . "</p>";
        echo "<p>-----------------------------------</p>";
    }

    //Métodos especiais
    public function __construct($ti, $au, $tot) {
        $this -> titulo = $ti;
        $this -> autor = $au;
        $this -> totPaginas = $tot;
        $this -> pagAtual = 0;
        $this -> aberto = false;
    }

    private function getTitulo() {
        return $this -> titulo;
    }
    private function getAutor() {
        return $this -> autor;
    }
    private function getTotPaginas() {
        return $this -> totPaginas;
    }
    private function getPagAtual() {
        return $this -> pagAtual;
    }
    private function getAberto() {
        return $this -> aberto;
    }
    private function getLeitor() {
        return $this -> leitor;
    }

    private function setTitulo($ti) {
        $this -> titulo = $ti;
    }
    private function setAutor($au) {
        $this -> autor = $au;
    }
    private function setTotPaginas($tot) {
        $this -> totPaginas = $tot;
    }
    private function setPagAtual($pa) {
        $this -> pagAtual = $pa;
    }
    private function setAberto($ab) {
        $this -> aberto = $ab;
    }
    private function setLeitor($le) {
        $this -> leitor = $le;
    }

    public function abrir() {
        $this -> setaberto(true);
        $this -> setPagAtual(1);
    }
    public function fechar() {
        $this -> setAberto(false);
    }
    public function folhear() {
        $this -> setPagAtual($this -> getPagAtual() + 1);
    }
    public function avancarPag() {
        $this -> setPagAtual($this -> getPagAtual() + 1);
    }
    public function voltarPag() {
        $this -> setPagAtual($this -> getPagAtual() - 1);
    }
}

?>