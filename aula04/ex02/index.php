<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getters e Setters</title>
</head>
<body>
<pre>
  <?php
    require_once  'Videogame.php';

    // Instanciando classe Videogame
    $psone = new Videogame;

    // Informando valor para parametro via metodo Setter
    $psone->setMarca('Sony');
    $psone->setModelo('Playstation');
    $psone->setMedia('CD');

    print_r($psone);

    echo "O console ". $psone->getModelo(). " da marca " . $psone->getMarca(). " utiliza a mídia " . $psone->getMedia() . ".";

    $xone = new Videogame;

    print_r($xone);

    echo "O console ". $xone->getModelo(). " da marca " . $xone->getMarca(). " utiliza a mídia " . $xone->getMedia() . ".";

  ?>
</pre>
  
</body>
</html>