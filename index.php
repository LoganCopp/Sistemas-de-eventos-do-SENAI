<?php
     require_once 'init.php';
?>


    <html>
        <head>
            <title> Eventos SENAI</title>
            <link rel="stylesheet" href="/css/styleIndex.css">
        </head>
            <body>
                
                <div class="container">
                    <header>
                        <h1>Sistema de Eventos SENAI</h1>
                            <p>Consulte os eventos disponíveis.</p>
                    </header>

                    <a href="/resetaSession.php">Resetar</a>

                    <a class="botao cadastro" href="cadastro.php">
                        + Cadastrar um novo evento
                    </a>

                    <h2>Lista de eventos</h2>

                    <?php if (empty($_SESSION['eventos'])): ?>
                        <div class="mensagem">
                            <p>Nenhum evento cadastrado no momento</p>
                            <p>Clique no botão acima para cadastrar um novo evento</p>
                        </div>
                    <?php else: ?>

                        <?php foreach
                    ($_SESSION['eventos'] as $evento): ?>

                        <div class="evento">
                            <h2>
                                <?=htmlspecialchars($evento['titulo'], ENT_QUOTES, 'UTF-8') ?>
                            </h2>
                            <P>
                                <strong>ID:</strong>
                                <?= (int)$evento['id'] ?>
                            </P>

                            <p>
                                <strong>Área:</strong>
                                <?=htmlspecialchars($evento['area'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                             <p>
                                <strong>Data:</strong>
                                <?=htmlspecialchars($evento['data'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                             <p>
                                <strong>Horário:</strong>
                                <?=htmlspecialchars($evento['inicio'], ENT_QUOTES, 'UTF-8') ?>
                                às <?=htmlspecialchars($evento['fim'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                                 <p>
                                <strong>Local:</strong>
                                <?=htmlspecialchars($evento['local'], ENT_QUOTES, 'UTF-8') ?>
                            </p>

                            <div class="acoes">
                                <a class="botao detalhes" href="detalhe.php?id=<?= (int) $evento['id'] ?>"> Ver detalhes</a>
                                <a class="botao edicao" href="edicao.php?id=<?= (int) $evento['id'] ?>"> Editar</a>
                                <a class="botao remocao" href="remocao.php?id=<?= (int) $evento['id'] ?>"> Remover</a>
                            </div>

                            <div>
                                <?php endforeach; ?>

                                <?php endif; ?>
                            </div>


                        </div>
                </div>


            </body>
    </html>

