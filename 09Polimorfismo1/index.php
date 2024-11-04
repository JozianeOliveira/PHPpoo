<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança parte 2</title>
</head>
<body>
    <pre>
        <?php 
        // $p1 = new Animal(); não pode ser criado por ser abstrata
        require_once 'Mamifero.php';
        require_once 'Ave.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Canguru.php';
        require_once 'Cachorro.php';
        require_once 'Cobra.php';
        require_once 'Tartaruga.php';
        require_once 'Goldfish.php';
        require_once 'Arara.php';

        $m1 = new Mamifero();
        $m1 -> setPeso(2);
        $m1 -> setIdade(1);
        $m1 -> setMembros(4);
        $m1 -> setCorPelo("Preto");
        print_r($m1);
        $m1 -> locomover();
        $m1 -> alimentar();
        $m1 -> emitirSom();

        $cg1 = new Canguru();
        $cg1 -> setPeso(20);
        $cg1 -> setIdade(1);
        $cg1 -> setMembros(4);
        $cg1 -> setCorPelo("Preto");
        print_r($cg1);
        $cg1 -> locomover();
        $cg1 -> alimentar();
        $cg1 -> emitirSom();
        $cg1 -> usarBolsa();

        $ca1 = new Cachorro();
        $ca1 -> setPeso(2);
        $ca1 -> setIdade(1);
        $ca1 -> setMembros(4);
        $ca1 -> setCorPelo("Preto");
        print_r($ca1);
        $ca1 -> locomover();
        $ca1 -> alimentar();
        $ca1 -> emitirSom();
        $ca1 -> enterrarOsso();
        $ca1 -> abanarRabo();

        $r1 = new Reptil();
        $r1 -> setPeso(2);
        $r1 -> setIdade(1);
        $r1 -> setMembros(4);
        $r1 -> setCorEscama("Preto");
        print_r($r1);
        $r1 -> locomover();
        $r1 -> alimentar();
        $r1 -> emitirSom();

        $co1 = new Cobra();
        $co1 -> setPeso(2);
        $co1 -> setIdade(1);
        $co1 -> setMembros(4);
        $co1 -> setCorEscama("Preto");
        print_r($co1);
        $co1 -> locomover();
        $co1 -> alimentar();
        $co1 -> emitirSom();
        
        $ta1 = new Tartaruga();
        $ta1 -> setPeso(2);
        $ta1 -> setIdade(1);
        $ta1 -> setMembros(4);
        $ta1 -> setCorEscama("Preto");
        print_r($ta1);
        $ta1 -> locomover();
        $ta1 -> alimentar();
        $ta1 -> emitirSom();

        $p1 = new Peixe();
        $p1 -> setPeso(2);
        $p1 -> setIdade(1);
        $p1 -> setMembros(3);
        $p1 -> setCorEscama("Preto");
        print_r($p1);
        $p1 -> locomover();
        $p1 -> alimentar();
        $p1 -> emitirSom();
        $p1 -> soltarBolha();

        $gf1 = new Goldfish();
        $gf1 -> setPeso(2);
        $gf1 -> setIdade(1);
        $gf1 -> setMembros(3);
        $gf1 -> setCorEscama("Dourado");
        print_r($p1);
        $gf1 -> locomover();
        $gf1 -> alimentar();
        $gf1 -> emitirSom();
        $gf1 -> soltarBolha();

        $a1 = new Ave();
        $a1 -> setPeso(2);
        $a1 -> setIdade(1);
        $a1 -> setMembros(3);
        $a1 -> setCorPena("Preto");
        print_r($a1);
        $a1 -> locomover();
        $a1 -> alimentar();
        $a1 -> emitirSom();
        $a1 -> fazerNinho();

        $ar1 = new Arara();
        $ar1 -> setPeso(2);
        $ar1 -> setIdade(1);
        $ar1 -> setMembros(3);
        $ar1 -> setCorPena("Azul");
        print_r($ar1);
        $ar1 -> locomover();
        $ar1 -> alimentar();
        $ar1 -> emitirSom();
        $ar1 -> fazerNinho();

        ?>
    </pre>
</body>
</html>