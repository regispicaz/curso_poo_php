<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO-PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once "Aluno.php";//Este não é necessário chamar pois as demais classes estão fazendo sua extenção
            require_once "Funcionario.php";
            require_once "Professor.php";

            $p1 = new Aluno();

            $p1->setNome("Maria");
            $p1->setIdade(20);
            $p1->setSexo("F");
            $p1->setCurso("ADS");
            $p1->setMatricula(123321);

            $p2 = new Professor();
            $p2->setNome("Pedro");
            $p2->setIdade(30);
            $p2->setSexo("M");
            $p2->setSalario(2500);
            $p2->setEspecialidade("Matemática");

            $p3 = new Funcionario();
            $p3->setNome("João");
            $p3->setIdade(40);
            $p3->setSexo("M");
            $p3->setTrabalhando(true);

            print_r($p3);


            $p1->cancelarMat();
            $p2->receberAumento();

            print_r($p1);
            print_r($p2);


        ?>
    </pre>
    
</body>
</html>