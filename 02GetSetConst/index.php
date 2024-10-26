<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Getter, Setter e Construtor</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Caneta.php';

        $c1 = new Caneta ("BIC", "Azul", 0.5);
        $c2 = new Caneta ("Kit", "Verde", 0.7);
       /* $c1 -> setModelo ("BIC");
        // ou $c1 -> modelo = "BIC";, porém só irá dar certo se o atributo estiver como público, caso seja privado, como ponta, não irá ser aceito 
        $c1 -> setPonta (0.5);
        print "Eu tenho uma caneta {$c1 -> getModelo()} de ponta {$c1 -> getPonta()}";*/
        print_r($c1);
        print_r($c2);
    ?>
    </pre>
</body>
</html>