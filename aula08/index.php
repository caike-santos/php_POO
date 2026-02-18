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
        require_once 'Livro.php';
        require_once 'Pessoa.php';

        $p = array();
        $l = array();

        $p[0] = new Pessoa("João", 25, "Homem");

        $p[1] = new Pessoa("Joana", 34, "Mulher");

        $p[2] = new Pessoa("Julia", 19, "Mulher");

        $l[0] = new Livro("Como treinar seu dragão", "William Shaskepeare", 354, $p[2]);

        $l[1] = new Livro("Biblia", "Assembleia de Deus", 988, $p[0]);

        $l[2] = new Livro("Receitas da vovó", "Ana Maria Braga", 5, $p[1]);

        $l[0]->detalhes();

        $l[0]->abrir();

        $l[0]->folhear(50);

    ?>
</div>
</body>
</html> 