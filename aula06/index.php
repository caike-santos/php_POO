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
        require_once 'ControleRemoto.php';

        $c1 = new ControleRemoto();

        $c1->abrirMenu();

        $c1->ligar();

        $c1->abrirMenu();

        $c1->fecharMenu();

        $c1->maisvolume();

        $c1->maisvolume();

        $c1->abrirMenu();

        $c1->play();

        $c1->setVolume(100);

        $c1->maisvolume();

        $c1->abrirMenu();
    ?>
</div>
</body>
</html>