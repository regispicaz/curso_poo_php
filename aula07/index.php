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
            require_once "Lutador.php";

            $lt = array();
            $lt[0] = new Lutador("Fulanderson Miranha","Brasil", 32, 1.75, 59.9, $this->getCategoria(), 14, 2, 7);
            $lt[1] = new Lutador("Octo Loctopos","USA", 53, 1.95, 89.4, $this->getCategoria(), 1, 14, 6);
            $lt[2] = new Lutador("Osborn Duende","Brasil", 65, 1.62, 65.1, $this->getCategoria(), 2, 2, 2);
            $lt[3] = new Lutador("Ryu Ken","Japão", 29, 1.81, 57.9, $this->getCategoria(), 12, 2, 1);
            $lt[4] = new Lutador("Nakamura","Japão", 28, 1.75, 62.5, $this->getCategoria(), 12, 2, 1);
            $lt[5] = new Lutador("Honda","Japão", 29, 1.81, 57.9, $this->getCategoria(), 12, 2, 1);

            $lt[0]->status();
            $lt[1]->apresentar();

        ?>
    </pre>
</body>
</html>