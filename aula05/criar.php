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
        session_start();
        require_once 'Banco.php';

        $v = filter_input(INPUT_GET, 'v')??0;
        $num = filter_input(INPUT_GET, 'num')??0;
        $nome = filter_input(INPUT_GET, 'dono')??"Nao definido";
        $tipo = filter_input(INPUT_GET, 'tipo')??"Nao definido";

        $c1 = new Banco($num, $tipo, $nome);

        $c1->exibir();

    ?>

    <a href="mudar.html">Modificar</a>
</div>
</body>
</html>