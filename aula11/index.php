<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO_PHP_Herança</title>
</head>
<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";
            require_once "Tecnico.php";

            $v1 = new Visitante();
            $v1->setNome("Fulanderson_Silva");
            $v1->setIdade(23);
            $v1->setSexo("M");
            print_r($v1);

            $a1 = new Aluno();
            $a1-> setNome("Mario Mario");
            $a1-> setIdade(42);
            $a1-> setSexo("M");
            $a1-> setMaricula(123321);
            $a1-> setCurso("GTI");
            $a1-> pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1-> setNome("Dell_Hperson");
            $b1-> setIdade(25);
            $b1-> setSexo("F");
            $b1-> setMaricula(321321);
            $b1-> setCurso("ADS");
            $b1-> setBolsa(20);
            $b1-> pagarMensalidade();
            $b1-> renovarBolsa();
            print_r($b1);

            $t1 = new Tecnico();
            $t1-> setNome("Oracle");
            $t1-> setIdade(45);
            $t1-> setSexo("M");
            $t1-> setCurso("Sistemas de Informação");
            $t1-> setMaricula(333222111);
            $t1-> setEspecialidade("Banco de Dados");
            $t1-> setRegistroProfissional("12345");
            $t1-> setCargo("Tecnico");
            $t1-> pagarMensalidade();
            $t1->praticar();
            print_r($t1);


        ?>
    </pre>
    
</body>
</html>