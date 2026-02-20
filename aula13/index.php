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
    require_once 'Visualizacao.php';
        $v[0] = new Video("C++");
        $v[1] = new Video("Java");

        $p[0] = new Gafanhoto("Caíke", 20, "M", "Vermithor");
        $p[1] = new Gafanhoto("Franciely", 20, "F", "Ivad");

        $vis[0] = new Visualizacao($p[0], $v[1]);
        $vis[1] = new Visualizacao($p[1], $v[0]);

        $vis[0]->avaliar();

        $v[1]->play();
        $v[0]->like();

        print_r($vis[0]);
        print_r($vis[1]);
    ?>
    </pre>
</div>
</body>
</html> 