<?php
    require_once 'init.php';

    $id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);

    if ($id === false || $id === null || $id <=0 || !isset ($_SESSION['eventos']['id'])) {
        $evento = null;
    } else {
        $evento = $_SESSION['eventos'][$id];
    }

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

                <?php if ($evento === null): ?>

                    <div class="erro">
                        <h2>Evento não encontrado</h2>
                        <p>O ID informado nao existe</p>
                        
                        <a class="botao voltar"> voltar para a listagem</a>
                    </div>

                        <?php else: ?>
                            <div class="card">

                            <div class="campo">
                                <strong>ID:</strong>
                                <?= (int) $evento['id'] ?>

                            </div>
                                    <div class="campo">
                                            <strong>Título: </strong>
                                            <?=htmlspecialchars($evento['titulo'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Descrição: </strong>
                                            <?=htmlspecialchars($evento['descricao'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Área: </strong>
                                            <?=htmlspecialchars($evento['area'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Data: </strong>
                                            <?=htmlspecialchars($evento['data'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Horário inicial: </strong>
                                            <?=htmlspecialchars($evento['inicio'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Horário final: </strong>
                                            <?=htmlspecialchars($evento['fim'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Local: </strong>
                                            <?=htmlspecialchars($evento['local'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    <div class="campo">
                                            <strong>Responsável: </strong>
                                            <?=htmlspecialchars($evento['responsavel'], ENT_QUOTES, 'UTF-8') ?>
                                    </div>
                                    
                                    <a class="botao voltar" href="index.php"> Voltar para a listagem </a>

                                    <a class="botao edicao" href="edicao.php?id=<?=(int) $evento['id'] ?>"> Editar evento </a>

                                    <a class="botao remocao" href="remocao.php?id=<?=(int) $evento['id'] ?>"> Remover evento </a>
                                    
                </div>
                        <?php endif; ?>
            </div>
        </body>
</html>