<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'ContaBanco.php';

        $p1 = new ContaBanco() ;
        $p2 = new ContaBanco() ;
        
        $p1 -> abrirConta("cc");
        $p1 -> setNumConta(1111);
        $p1 -> setDono("José");
        $p2 -> abrirConta("cp");
        $p2 -> setNumConta(2222);
        $p2 -> setDono("Maria");

        $p1 -> depositar(300);
        $p2 -> depositar(500);

        $p2 -> sacar(100);

        $p1 -> pagarMensal();
        $p2 -> pagarMensal();

        $p1 -> fecharConta();
        $p1 -> sacar(338);
        $p1 -> fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>