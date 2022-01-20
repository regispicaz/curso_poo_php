<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";//Chamando o arquivo com classe

        //Instanciando novo objeto "Caneta"
        //$c1 = new Caneta();
        //Metodo Setter
        //$c1->setModelo("Compactor");
        //$c1->setPonta(0.5);//Somente com o método setter conseguimos modificar um atributo privado
        //print_r($c1);
        //print "Eu tenho uma Caneta modelo {$c1->getModelo()} de ponta {$c1->getPonta()}";//O {$instancia->getModelo()} e {$instancia->getPonta()} buscou o dado armazenado e retornou o modelo e ponta.
        

        //Instânciando Objeto Caneta a partir do chamado do metodo construtor "__constructor()"
        $c1 = new Caneta("Compactor", "Rosa", 0.5);
        $c2 = new Caneta("Bic Cristal", "Magenta", 0.7);
        print_r ($c1);
        print_r ($c2);


    ?>
    </pre>
</body>
</html>