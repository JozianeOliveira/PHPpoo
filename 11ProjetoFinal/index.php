<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Video.php';
        require_once 'Aluno.php';
        require_once 'Visualizacao.php';
            $v[0] = new Video ("Aula 01");
            $v[1] = new Video ("Aula 02");
            $v[2] = new Video ("Aula 03");

            $a[0] = new Aluno ("Mateus", 25, "M", "Mat");
            $a[1] = new Aluno ("Janaina", 41, "F", "Jan");

            $vis[0] = new Visualizacao($a[0], $v[2]);

            print_r($v);
            print_r($a);
            print_r($vis);
        ?>
    </pre>
</body>
</html>