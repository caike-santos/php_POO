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
        require_once 'Professor.php';
        require_once 'Aluno.php';

        $p1 = new Pessoa("Caio", 45, "Homem");

        $p2 = new Aluno(2510470836061, "ESD", "Enzo", 15, "Homem");
       
        $p3 = new Professor("ESD", 5250.45, "Zanco", 56, "Homem");
    ?>
</div>
</body>
</html>