<?php 
    interface Publicacao {
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avancarPag();
        public function voltarPag();
    } //todos são public abstract function...
?>
