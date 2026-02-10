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

        require_once 'Celular.php';

        $c1 = new Celular;

        $c1->modelo = "S21";

        $c1->cor = "preto";

        $c1->ip("010203");

        $c1->cor();
    ?>
</div>
</body>
</html>