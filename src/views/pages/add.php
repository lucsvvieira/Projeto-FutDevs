<?php $render('header'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/addJogador.css">
    <title>FootDevs - Adicionar Jogador</title>
</head>
<body>
    
    <div class="cadastroJogador">
            <h2>Adicionar Novo Jogador</h2>
            <form class="addForm" method="POST" action="<?=$base;?>/novo">
                <label>
                    Nome do Jogador:<br/>
                    <input class="form_input" type="text" name="name">
                </label><br/><br/>

                <label>
                    Posição do Jogador:<br/>
                    <input class="form_input" type="text" name="posicao_jogador">
                </label><br/><br/>

                <label>
                    Nível Técnico:<br/>
                    <input class="form_input" type="text" name="nivel_tecnico">
                </label><br/><br/>

                <input class="form_button" type="submit" value="Adicionar">
            </form>
        </div>
    </body>
</html>

<?php $render('footer'); ?>