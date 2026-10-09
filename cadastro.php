<?php
require_once __DIR__ ."/init.php";


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./css/styleCadastro.css'>
</head>
<body>

    <header>
    <h1 class="title">CADASTRO</h1>
    <div class="caixa">.</div>
    </header>
<main>
    <form action="processaCadastro.php" method="post">

    <section class ="form">
        <label  for="id">Id: </label>
    <div class="caixa-1">
        <input  type="Id" name="id" id="id">
        
    </div>
    </section>
        <label  for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo">
        

        <label  for="descricao">Descricao: </label>
        <input type="text" name="descricao" id="descricao">
       

        <label  for="area">Area: </label>
        <input type="text" name="area" id="area">
      

        <label  for="data">Data: </label>
        <input type="date" name="data" id="data">
       

        <label  for="inicio">Inicio: </label>
        <input type="time" name="inicio" id="inicio">
        

    
        <label  for="fim">Fim: </label>
        <input type="time" name="fim" id="fim">
        

        <label  for="local">Local: </label>
        <input type="text" name="local" id="local">
      

        <label  for="responsavel">Responsavel: </label>
        <input type="text" name="responsavel" id="responsavel">
      
    

    
        <button class="button" type="submit"> Cadastrar</button>

    </form>
</main>

</body>
</html>