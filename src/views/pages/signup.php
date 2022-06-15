<?php $render('header'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - Projeto Futebol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css">
</head>

<body>
    <section class="container-main">
        <form method="POST" action="<?= $base; ?>/cadastro">
            <?php if (!empty($flash)) : ?>
                <div class="flash"><?php echo $flash; ?></div>
            <?php endif; ?>

            <input placeholder="Digite seu Nome Completo" class="input" type="text" name="name">

            <input placeholder="Digite seu E-mail" class="input" type="email" name="email">

            <input placeholder="Digite sua Senha" class="input" type="password" name="password">

            <input class="button" type="submit" value="Confirmar cadastro">

            <a href="<?= $base; ?>/login">Já tem cadastro? Faça o login</a>
        </form>
    </section>
</body>

</html>