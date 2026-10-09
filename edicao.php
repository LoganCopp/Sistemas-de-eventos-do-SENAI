<?php

    require_once __DIR__ . "/init.php";

    $camposPrenchidos = false;
    $fimMaiorInicio = false;
    $dataMenorHoje = false;

    if(!isset($_GET['id']) || $_GET['id'] == ""
    || !isset($_SESSION['eventos'][$_GET['id']]) || $_SESSION['eventos'][$_GET['id']] == ""){
        header("Location: index.php?erro=EVENTO_NAO_DETECTADO");
        exit;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['titulo']) && $_POST['titulo'] != ""
        &&isset($_POST['descricao']) && $_POST['descricao'] != ""
        &&isset($_POST['area']) && $_POST['area'] != ""
        &&isset($_POST['data']) && $_POST['data'] != ""
        &&isset($_POST['inicio']) && $_POST['inicio'] != ""
        &&isset($_POST['fim']) && $_POST['fim'] != ""
        &&isset($_POST['local']) && $_POST['local'] != ""
        &&isset($_POST['responsavel']) && $_POST['responsavel'] != ""){
        $camposPrenchidos = true;
    }
    }
    if( (int) $_POST['fim'] > (int) $_POST['inicio']){
        $fimMaiorInicio = true;
    }


    $dataAtual = new datetime;
    $dataPosta = new datetime($_POST['data']);
    if($dataPosta <= $dataAtual){
        $dataMenorHoje = true;
    }
    

    if($camposPrenchidos == true && $fimMaiorInicio == true && $dataMenorHoje == true)
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_SESSION['eventos'][$_GET['id']] = $_POST;
            header("Location: index.php");
            exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Eventos</title>
    <link rel="stylesheet" href="/css/styleEdicao.css">
</head>
    <body class="fundoEdicao">
        <h1><?=$_SESSION['eventos'][$_GET['id']]['titulo'] ?></h1>
        <div class="caixaFormulario">
        <form action="" method="POST" class="formulario">
            <input type="text" name="id" id="id"
            value="<?= $_GET['id'] ?>"
            hidden
            >

            <div class="tituloEdicao">
            <div><label for="titulo">Titulo</label></div>
            <input type="text" name="titulo" id="titulo"
            value="<?= $_SESSION['eventos'][$_GET['id']]['titulo'] ?>"
            >
            </div>
            <br>

            <div class="descricaoEdicao">
            <div><label for="descricao">Descrição</label></div>
            <input type="text" name="descricao" id="descricao"
            value="<?= $_SESSION['eventos'][$_GET['id']]['descricao'] ?>"
            >
            <br>
            </div>
            
            <div class="areaEdicao">
            <div><label for="area">Área</label></div>
            <input type="text" name="area" id="area"
            value="<?= $_SESSION['eventos'][$_GET['id']]['area'] ?>"
            >
            <br>
            </div>
            
            <div class="dataEdicao">
            <div><label for="data">Data</label></div>
            <input type="date" name="data" id="data" class="dataEdicao"
            value="<?= $_SESSION['eventos'][$_GET['id']]['data'] ?>"
            >
            <br>
            </div>

            <div class="inicioEdicao">
            <div><label for="inicio">Inicio</label></div>
            <input type="time" name="inicio" id="inicio"
            value="<?= $_SESSION['eventos'][$_GET['id']]['inicio'] ?>"
            >
            <br>
            </div>
            
            <div class="fimEdicao">
            <div><label for="fim">Fim</label></div>
            <input type="time" name="fim" id="fim"
            value="<?= $_SESSION['eventos'][$_GET['id']]['fim'] ?>"
            >
            <br>
            </div>

            <div class="localEdicao">
            <div><label for="local">Local</label></div>
            <input type="text" name="local" id="local"
            value="<?= $_SESSION['eventos'][$_GET['id']]['local'] ?>"
            >
            <br>
            </div>

            <div class="responsavelEdicao">
            <div><label for="responsavel">Responsavel</label></div>
            <input type="text" name="responsavel" id="responsavel"
            value="<?= $_SESSION['eventos'][$_GET['id']]['responsavel'] ?>"
            >
            <br>
            </div>

            <button type="submit">Mudar</button>

            <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && $camposPrenchidos == false && $fimMaiorInicio == false && $dataMenorHoje == false):?>
                <p>ALGUM CAMPO NÃO PREENCHIDO, INICIO MAIOR QUE O FIM E DATA MAIOR QUE O DIA ATUAL</p>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $camposPrenchidos == false && $fimMaiorInicio == false):?>
                <p>ALGUM CAMPO NÃO PREENCHIDO E INICIO MAIOR QUE O FIM</p>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $fimMaiorInicio == false && $dataMenorHoje == false):?>
                <P>INICIO MAIOR QUE O FIM E DATA MAIOR QUE O DIA ATUAL</P>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $camposPrenchidos == false && $dataMenorHoje == false):?>
                <p>ALGUM CAMPO NÃO PREENCHIDO E DATA MAIOR QUE O DIA ATUAL</p>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $camposPrenchidos == false):?>
                <p>ALGUM CAMPO NÃO PREENCHIDO</p>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $dataMenorHoje == false):?>
                <p>DATA MENOR QUE O DIA ATUAL</p>
            <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && $fimMaiorInicio == false):?>
                <p>INICIO MAIOR QUE O FIM</p>
            <?php endif ?>
        </form>
        </div>
    </body>
</html>