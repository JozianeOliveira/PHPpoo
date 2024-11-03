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
        // $p1 = new Pessoa(); não pode ser criada por ser abstrata
        require_once 'Visitante.php';
        require_once 'Professor.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Tecnico.php';

        $v1 = new Visitante();
        $v1 -> setNome("João");
        $v1 -> setIdade(28);
        $v1 -> setSexo("M");
        $v1 -> fazerAniver();
        print_r($v1);

        $p1 = new Professor();
        $p1 -> setNome("José");
        $p1 -> setIdade(52);
        $p1 -> setSexo("M");
        $p1 -> setEspecialidade("Math");
        $p1 -> setSalario(5200);
        $p1 -> fazerAniver();
        $p1 -> receberAum(500);
        print_r($p1);
        

        $a1 = new Aluno();
        $a1 -> setNome("Rafaela");
        $a1 -> setIdade(22);
        $a1 -> setSexo("F");
        $a1 -> fazerAniver();
        $a1 -> setMatr(111);
        $a1 -> setCurso("Admin");
        print_r($a1); 
        $a1 -> pagarMens ();

        $b1 = new Bolsista();
        $b1 -> setNome("Lucas");
        $b1 -> setIdade(25);
        $b1 -> setSexo("M");
        $b1 -> fazerAniver();
        $b1 -> setMatr(112);
        $b1 -> setCurso("Econ");
        $b1 -> setBolsa("50%");
        print_r($b1); 
        $b1 -> pagarMens ();
        $b1 -> renovarBolsa();
        
        $t1 = new Tecnico();
        $t1 -> setNome("Amanda");
        $t1 -> setIdade(20);
        $t1 -> setSexo("F");
        $t1 -> fazerAniver();
        $t1 -> setMatr(113);
        $t1 -> setCurso("Inform");
        $t1 -> setRegistroProfissional(102);
        print_r($t1); 
        $t1 -> pagarMens ();
        $t1 -> praticar();

        ?>
    </pre>
</body>
</html>