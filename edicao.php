<?php
    require_once __DIR__ . "./init.php";

    $eventoDetectado = false;

    if($_SERVER['REQUEST_METHOD'] == "GET" 
    && isset($_GET['id'])){
        $eventoDetectado = true; 
    }

    if($eventoDetectado == true){
        if(!isset($_GET['id']) || $_GET['id'] == ""){
            header("Location: edicao.php?erro=EVENTO_NAO_DETECTADO");
            exit;
        }else{
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Eventos</title>
    <link rel="stylesheet" href="styleEdicao.css">
</head>
<body>
    <form action="" method="GET">
        <input type="text" id="" name="" placeholder="">
    </form>
</body>
</html>