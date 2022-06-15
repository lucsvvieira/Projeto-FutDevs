<?php $render('header'); ?>

<h2>Editar Jogador</h2>

<form method="POST" action="<?= $base; ?>/jogador/<?=$jogador['id'];?>/editar">
    <label>
        Nome do Jogador:<br />
        <input type="text" name="name" value="<?= $jogador['nome_jogador']; ?>">
    </label><br /><br />

    <label>
        Posição do Jogador:<br />
        <input type="text" name="posicao_jogador" value="<?= $jogador['posicao_jogador']; ?>">
        </label><br/><br/>

        <label>
            Nível Técnico:<br/>
            <input type="text" name="nivel_tecnico" value="<?= $jogador['nivel_tecnico']; ?>">
        </label><br/><br/>

        <input type="submit" value="Salvar Alterações">
</form>

<?php $render('footer'); ?>