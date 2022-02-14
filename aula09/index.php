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
            require_once 'Pessoa';
            require_once 'Livro.php';

            $pe[0] = new Pessoa("Fulano", 40, "M");
            $pe[1] = new Pessoa("Josefina", 32, "F");

            $lv[0] = new Livro("PHP Básico", "João Abelar", 250, $pes[0]);
            $lv[1] = new Livro("PHP POO", "Paula Silveira", 400, $pes[1]);
            $lv[2] = new Livro("PHP Avançado", "Henri da Silva", 800, $pes[1]);

            print_r($lv[0]);
            echo "Helo<br>";
            
        ?>
    </pre>
</body>
</html>