<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <pre><!--Tag de texto pre formatado.-->

    <?php
        require_once "Caneta.php"; //Carregando arquivo com classe
        
        $c1 = new Caneta;//Instânciando o objeto Caneta
        $c1-> modelo = "BIC Cristal";
        $c1-> cor = "Amarelo";
        //$c1-> ponta = 0.5;
        //$c1->carga = 99;
       
        $c1->destampar();
        //$c1->tampar();
        
        print_r($c1);
        $c1->rabiscar();

    ?>
    </pre>
</body>
</html>