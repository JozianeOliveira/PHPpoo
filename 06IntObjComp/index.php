<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos compostos e Encapsulamento</title>
</head>
<body>
    <pre>
        <?php 
        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $p[0] = new Pessoa("jozi", 35, "F");
        $p[1] = new Pessoa("Alan", 39, "M");

        $l[0] = new Livro("Crônicas", "S. White", 200, $p[0]);
        $l[1] = new Livro("Luciadas", "W. Simons", 100, $p[1]);

        $l[0] -> abrir();
        $l[0] -> folhear(80);
        $l[0] -> avancarPag();

        $l[0] -> detalhes();

        $l[1] -> abrir();
        $l[1] -> folhear(99);
        $l[1] -> voltarPag();
        
        $l[1] -> detalhes();

        ?>
    </pre>
</body>
</html>