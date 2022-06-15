<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FootDevs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base; ?>/assets/css/login.css">
</head>

<body>
    <?php $render('header'); ?>
    
    <section class="container-main">
        <form method="POST" action="<?= $base; ?>/login">
            <?php if (!empty($flash)) : ?>
                <div class="flash"><?php echo $flash; ?></div>
            <?php endif; ?>

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email">

            <input placeholder="Digite sua senha" class="input" type="password" name="password">

            <input class="button" type="submit" value="Acessar o sistema">

            <a href="<?= $base; ?>/cadastro">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>

</html>