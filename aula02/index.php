<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>modelo</title>
</head>
<body>
<div>
    <?php
        require_once 'parede.php';
        require_once 'sentimento.php';

        $paredesala = new Parede(
            custom2: 15,
            largura: 5.70,
            altura: 3.5,
            material: "Madeira",
            cor: "Marrom"
        );

        $emocao = new Sentimento(
            motivo: "Ganhei na Mega-sena",
            natureza: "Boa",
            nome: "Felicidade"
        );
        echo "<pre>";
        print_r($emocao);
        echo "</pre>";
        echo "<br>";

        echo "Eu estou sentindo ". $emocao->nome. " essa é uma sensação ". $emocao->natureza. " e o motivo é porque eu ". $emocao->motivo. "<br>";

        echo "<pre>";
        print_r($paredesala);
        echo "</pre>";
        echo "<br>";

        echo "Mudei a cor para Azul";
        $paredesala->pintar("Azul");

        echo "<pre>";
        print_r($paredesala);
        echo "</pre>";
        echo "<br>";

        echo "A parede mede ". $paredesala->m2(). "M<sup>2</sup><br>";
        echo "A parede irá custar: ". $paredesala->custo(). "R$";
    ?>
</div>
</body>
</html>