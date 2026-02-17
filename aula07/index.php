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
        require_once 'Lutador.php';
        require_once 'Luta.php';

        $l = array();

        $l[0] = new Lutador("Caíke", "Brasil", 20, 1.83, 60, 10, 2, 3);
        $l[1] = new Lutador("Aizen", "Japão", 27, 1.80, 70, 12, 1, 0);

        $ufc01 = new Luta();

        $ufc01->marcarLuta($l[0], $l[1]);
        $ufc01->lutar();
    ?>
</div>
</body>
</html>