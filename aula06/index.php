<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO_PHP</title>
</head>
<body>
    <h1>Projeto Classe Controle Remoto</h1>
    <pre>
    <?php
        require_once 'ControleRemoto.php';
        $ctrl = new ControleRemoto();
        $ctrl->ligar();
        $ctrl->maisVolume();
        $ctrl->play(); 
        $ctrl->abrirMenu();
    ?>
    </pre>
</body>
</html>