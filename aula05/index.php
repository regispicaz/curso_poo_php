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
            // Chamando o arquivo de classe no PHP
            require_once 'ContaBanco.php';

            // Instanciando novos objetos
            $pessoa1 = new ContaBanco(); //Jubileu
            $pessoa2 = new ContaBanco(); //Creuza

            // Atibuindo valores aos objetos $pessoaX
            $pessoa1->abrirConta("CP");
            $pessoa1->setDono('Jubileu');
            $pessoa1->setnumConta(123);
            $pessoa1->pagarMensal();

            $pessoa2->abrirConta("CC");
            $pessoa2->setDono('Creuza');
            $pessoa2->setnumConta(122);
            $pessoa2->pagarMensal();

            $pessoa1->sacar(130);
            $pessoa1->fecharConta();


            // Mostrando valores doc objetos no navegador
            print_r($pessoa1);
            print_r($pessoa2);

        ?>
    </pre>
    
</body>
</html>