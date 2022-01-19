<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Carro</title>
</head>
<body>
    <?php
        require_once "exer01.php";

        $car01 = new Carro;

        $car01->marca = "Mescedes Benz";
        $car01->modelo = "ônibus";
        $car01->cor = "Azul";
        $car01->ano = 1999;
        $car01->passeio = false;

        print_r($car01);
        echo"<br/>";

        $car01->passear();


    ?>
</body>
</html>