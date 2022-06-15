<?php

namespace src\controllers;

use \core\Controller;
use src\models\jogadores;

class UsuariosController extends Controller
{

    public function add()
    {
        $this->render('add');
    }

    public function addAction()
    {
        $nome_jogador = filter_input(INPUT_POST, 'name');
        $posicao_jogador = filter_input(INPUT_POST, 'posicao_jogador');
        $nivel_tecnico = filter_input(INPUT_POST, 'nivel_tecnico');

        if ($nome_jogador && $posicao_jogador && $nivel_tecnico) {
            $data = jogadores::select()->where('nome_jogador', $nome_jogador)->execute();

            if (count($data) === 0) {
                jogadores::insert([
                    'nome_jogador' => $nome_jogador,
                    'posicao_jogador' => $posicao_jogador,
                    'nivel_tecnico' => $nivel_tecnico
                ])->execute();

                $this->redirect('/');
            }
        }

        $this->redirect('/novo');
    }

    public function edit($args)
    {
        $jogador = jogadores::select()->find($args['id']);

        $this->render('edit', [
            'jogador' => $jogador
        ]);
    }

    public function editAction($args)
    {
        $nome_jogador = filter_input(INPUT_POST, 'name');
        $posicao_jogador = filter_input(INPUT_POST, 'posicao_jogador');
        $nivel_tecnico = filter_input(INPUT_POST, 'nivel_tecnico');

        if ($nome_jogador && $posicao_jogador && $nivel_tecnico) {
            jogadores::update()
                ->set('nome_jogador', $nome_jogador)
                ->set('posicao_jogador', $posicao_jogador)
                ->set('nivel_tecnico', $nivel_tecnico)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }

        $this->redirect('/jogador/' . $args['id'] . '/editar');
    }

    public function del($args) {
        jogadores::delete()->where('id', $args['id'])->execute();
        $this->redirect('/');
    }

}
