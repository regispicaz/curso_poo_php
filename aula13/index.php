<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plomorfismo Sobracarga</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';

            $c = new Cachorro();
            $c->reagirFrase('Olá');
            $c->reagirFrase('Vai apanhar');
            $c->reagirIdadePeso(11, 45);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdadePeso(12, 10.0);
            $c->reagirIdadePeso(1, 5.0);
            $c->reagirHoraMin(10, 45);
            $c->reagirHoraMin(22, 10);


        ?>
    </pre>
    
</body>
</html>