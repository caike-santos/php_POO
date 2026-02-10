<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>modelo</title>
</head>
<body>
<div>
    <pre>
    <?php
        require_once  'Monitor.php';

        $m1 = new Monitor("concordia", "OLED", "24.5", "preta", "450");

        print_r($m1);


        print "Eu tenho um monitor da {$m1->getMarca()}, {$m1->getTipotela()} de {$m1->getPolegada()} polegadas da cor {$m1->getCor()} e custa {$m1->getPreco()}";
        
    ?>
    </pre>
</div>
</body>
</html>