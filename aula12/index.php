<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO_PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "Mamifero.php";
            require_once "Arara.php";
            require_once "Ave.php";
            require_once "Cachorro.php";
            require_once "Canguru.php";
            require_once "Cobra.php";
            require_once "GoldFish.php";
            require_once "Peixe.php";
            require_once "Reptil.php";
            require_once "Tartaruga.php";

            $ar = new Arara();
            $kx = new Cachorro();
            $cg = new Canguru();
            $cob = new Cobra();
            $gf = new GoldFish();
            $pe = new Peixe();
            $tart = new Tartaruga();

            $ar->locomover();
            $kx->locomover();
            $kx->EmitirSom();
            $cg->locomover();
            $cob->locomover();
            $gf->locomover();
            $pe->locomover();
            $tart->locomover();

           
        ?>
    </pre>
</body>
</html>