<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php
        require_once "Caneta.php"; //Carregando arquivo com classe
        
        $c1 = new Caneta;//Instânciando o objeto Caneta
        $c1->cor = "Amarelo";//Adicionando atributos ao objeto instanciado
        $c1->modelo = "Bic Cristal";
        $c1->ponta = 0.5;
        $c1->tampar();//chamando o método tampar || podemos também neste caso chamar o método destampar
        $c1->rabiscar();//Chamando o método Rabiscar da clase caneta
        //var_dump($c1);
        echo "<br/>";
        print_r($c1);
        echo "<br/>";
        echo "<br/>";

        $c2 = new Caneta;//Instânciando novo objeto
        $c2->cor = "Azul";
        $c2->modelo = "Compactor";
        $c2->ponta = 0.7;
        $c2->carga = "100%";
        $c2->destampar();//chamando método destampar

        $c2->rabiscar();//chamando método

        print_r($c2);

    ?>
</body>
</html>