<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO</title>
</head>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Banco</title>
</head>
<body>

    <pre>
        <?php
            require_once 'ContaBanco.php';

            $pessoa1 = new ContaBanco(); //Jubileu
            $pessoa2 = new ContaBanco(); //Creuza

            $pessoa1->abrirConta("CP");
            $pessoa1->setDono('Jubileu');
            $pessoa1->sacar(10);
            $pessoa1->depositar(200);
            $pessoa1->pagarMensal(); //Verificar metodo

            $pessoa2->abrirConta("CC");
            $pessoa2->setDono('Creuza');

            print_r($pessoa1);

            print_r($pessoa2);

        ?>
    </pre>
    
</body>
</html>