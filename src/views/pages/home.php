<?php $render('header'); ?>

<html>
    <head>
        <link rel="stylesheet" href="<?=$base;?>/assets/css/home.css">
    </head>
        <body>
            <a href="<?= $base; ?>/novo">
                <input class="input_button" type="submit" value="Adicionar Novo Jogador">
            </a>

            <table border="1" width="100%">
                <tr>
                    <th>ID do Jogador</th>
                    <th>Nome do Jogador</th>
                    <th>Posição do Jogador</th>
                    <th>Nível Técnico</th>
                    <th>Ações</th>
                </tr>
        </body>
</html>

    <?php foreach ($jogadores as $jogador) : ?>
        <tr class="table_players">
            <td><?= $jogador['id']; ?></td>
            <td><?= $jogador['nome_jogador']; ?></td>
            <td><?= $jogador['posicao_jogador']; ?></td>
            <td><?= $jogador['nivel_tecnico']; ?></td>
            <td>
                <a href="<?=$base;?>/jogador/<?=$jogador['id'];?>/editar">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="" />
                </a>
                <a href="<?=$base;?>/jogador/<?=$jogador['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>