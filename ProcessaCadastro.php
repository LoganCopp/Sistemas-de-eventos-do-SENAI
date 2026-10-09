<?php
require_once __DIR__ .'/init.php';


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

}
$_SESSION['eventos'][$_SESSION['proximo_id']];
header("Location: index.php");

?>