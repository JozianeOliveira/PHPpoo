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
        $c1 -> modelo = "BIC";
        $c1 -> cor = "Azul";
        // $c1 -> ponta = 0.5 
        // $c1 -> carga = 50   não dá pra acionar em atributos privados ou protegidos
       
        $c1 -> rabiscar();
        // $c1 -> destampar(); não é possível acionar métodos privados ou protegidos
        $c1 -> tampar(); /*o atributo tampada é protegido, porém ao criar o método 
                            destampar como público, ele dá acesso à modificação do atributo*/

        print_r($c1);
    ?>
</body>
</html>