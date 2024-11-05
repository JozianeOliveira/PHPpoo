<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo parte 2</title>
</head>
<body>
    <pre>
        <?php 
        
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m1 = new Mamifero();
        $m1 -> emitirSom();

        $l1 = new Lobo();
        $l1 -> emitirSom();

        $c1 = new Cachorro();
        $c1 -> emitirSom();
        
        /*Php não aceita Polimorfismo de Sobrecarga, portanto é necessário colocar nomes diferentes nas funções*/

        $c1 -> reagirFrase("Olá");
        $c1 -> reagirFrase("Passa!");
        $c1 -> reagirHora(11, 45);
        $c1 -> reagirHora(21, 00);
        $c1 -> reagirDono(true);
        $c1 -> reagirDono(false);
        $c1 -> reagirIdadePeso(2, 12.5);
        $c1 -> reagirIdadePeso(17, 4.5);
        
        ?>
    </pre>
</body>
</html>