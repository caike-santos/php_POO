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
        require_once 'Banco.php';

        $c1 = $_SESSION['minhaConta'];

        $v = filter_input(INPUT_POST, 'valor')??0;
        $btn = filter_input(INPUT_POST, 'acao');

        if($btn == "Depositar"){
            $c1->depositar($v);
        }elseif($btn == "Sacar"){
            $c1->sacar($v);
        }else{
            $c1->fecharConta();
        }
    ?>
</div>
</body>
</html>