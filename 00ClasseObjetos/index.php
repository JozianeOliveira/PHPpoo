<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando classes e objetos</title>
</head>
<body>
    <?php 
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1-> cor = "Azul";
        $c1-> ponta = 0.5;
        $c1-> tampada = false; //para verdadeiro mostra 1 ou qq valor != 0, para falso mostra vazio
        $c1-> tampar();

        $c1 -> rabiscar();

        print_r($c1); //ou  var_dump()  

        echo "<br>";
        
        $c2 = new Caneta;
        $c2 -> cor = "verde";
        $c2 -> carga = 50;
        $c2 -> destampar();
        print_r($c2);
    ?>
</body>
</html>