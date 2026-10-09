<?php
require_once __DIR__ ."/init.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(!isset($_POST['id']) || $_POST['id'] == "" ||
    !isset($_POST['titulo']) || $_POST['titulo'] == "" ||
    !isset($_POST['descricao']) || $_POST['descricao'] == "" ||
    !isset($_POST['area']) || $_POST['area'] == "" ||
    !isset($_POST['data']) || $_POST['data'] == "" ||
    !isset($_POST['inicio']) || $_POST['inicio'] == "" ||
    !isset($_POST['fim']) || $_POST['fim'] == "" ||
    !isset($_POST['local']) || $_POST['local'] == "" ||
    !isset($_POST['responsavel']) || $_POST['responsavel'] == ""){

    header("Location:cadastro.php?erro=Não preeenchido");
    exit;
    }
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = new DateTime();
$datainform = new DateTime($_POST['data']);

if($dataAtual < $datainform){
header("Location: cadastro.php?erro=Espaço vazio");
exit;
}
if($dataAtual < $datainform){
    header("Location: cadastro.php?erro=Espaço vazio");
    exit;
}

if(strilen($_POST['descricao']) <25){
    header("Location: cadastro.php?erro=Espaço vazio");
    exit;
}

?>