<?php
    require_once __DIR__ . "/init.php";

    $eventoDetectado = false; 

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']) && $_GET['id'] !== ""){
        $id = $_GET['id'];
        $eventoDetectado = true;
    }
    if(!isset($_SESSION['eventos'][$id]) || $_SESSION['eventos'][$id] == ""){
        $eventoDetectado = false;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['acao']) && $_POST['acao'] !== ""){
            $acao = $_POST['acao'];
        }
    }
?>



<html>
    <head></head>

    <body>
        <?php if($eventoDetectado == false):?>
                <h1>Encontre um evento existente</h1>
        <?php endif;?>    
        <?php if($eventoDetectado):?>
                <h1><?= $_SESSION['eventos'][$id]['titulo']?></h1>
                <h2><?= $_SESSION['eventos'][$id]['descricao']?></h2>
                <p>Data: <?= $_SESSION['eventos'][$id]['data']?></p>
                <p>Horarios:</p>
                <p>Inicio: <?= $_SESSION['eventos'][$id]['inicio'] ?> | Fim:<?= $_SESSION['eventos'][$id]['fim'] ?></p>
                <form action="" method="POST">
                    <button name="acao" value="deletar">Deletar Evento</button>
                    <button name="acao" value="cancelar">cancelar Deleção</button>
                </form>
        <?php endif;?>


        <?php if($acao == "deletar"):?>
            <?php
                array_splice($_SESSION['eventos'], $id, 1);
                header("Location: index.php");
                exit;
                ?>
        <?php elseif($acao == "cancelar"): ?>
            <?php
                header("Location: index.php?deletar=delecaoCancelada");
                exit;
                ?>
        <?php endif;?>

        
    </body>
</html>