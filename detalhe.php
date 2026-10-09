<?php
    require_once 'init.php';

    $eventoID = $_GET['id'];
    $eventos = $_SESSION['eventos'][$eventoID];
?>

<html>
    <head>
        <link rel="stylesheet" href="/css/styleDetalhe.css">
    </head>    
        <body>
            <div class="container">
                <header>
                    <h1> Detalhes do evento</h1>
                    <p> Informações completas do evento selecionado</p>
                </header>

                
                            <div class="campo">
                               
                                           <h3><?= $eventos['titulo'] ?></h3> 
                                    </div>
                                    <div class="campo">
                                            <strong>Descrição: </strong>
                                           <?=$eventos['descricao'] ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Área: </strong>
                                            <?=$eventos['area'] ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Data: </strong>
                                            <?=$eventos['data'] ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Horário inicial: </strong>
                                            <?=$eventos['inicio'] ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Horário final: </strong>
                                            <?=$eventos['fim'] ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Local: </strong>
                                            <?= $eventos['local']?>
                                    </div>
                                    <div class="campo">
                                            <strong>Responsável: </strong>
                                            <?=$eventos['responsavel'] ?>
                                    </div>
                                    <br>
                                    <br>

                                    <div>
                                    
                                   
                                     <a class="home" href="index.php">Voltar para a listagem</a>
                                      <a class="edicao" href="edicao.php?id=<?=(int) $evento['id'] ?>"> Editar evento </a>
                                      <a class="remocao" href="remocao.php?id=<?=(int) $evento['id'] ?>"> Remover evento </a>
                                    
                                    
                                 </div>
                
                               </div>
        </body>
</html>