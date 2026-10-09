<?php
require_once __DIR__ ."/init.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./cadastro.css'>
</head>
<body>

    <div class="caixa"></div>
    <h1 class="title">CADASTRO</h1>

    <form class ="form" action="index.php" method="post">

        <label class="text" for="id">Id: </label>
        <input  type="text" name="id" id="id">
        <br>

        <label class="text" for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo">
        <br>

        <label class="text" for="descricao">Descricao: </label>
        <input type="text" name="descricao" id="descricao">
        <br>

        <label class="text" for="area">Area: </label>
        <input type="text" name="area" id="area">
        <br>

        <label class="text" for="data">Data: </label>
        <input type="date" name="data" id="data">
        <br>

        <label class="text" for="inicio">Inicio: </label>
        <input type="text" name="inicio" id="inicio">
        <br>

    
        <label class="text" for="fim">Fim: </label>
        <input type="text" name="fim" id="fim">
        <br>

        <label class="text" for="local">Local: </label>
        <input type="text" name="local" id="local">
        <br>

        <label class="text" for="responsavel">Responsavel: </label>
        <input type="text" name="responsavel" id="responsavel">
        <br>
    
    
        
    
        <button class="button" type="submit"> Cadastrar</button>

    </form>

</body>
</html>