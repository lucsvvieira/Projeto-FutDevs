<?php
namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;
use \src\models\jogadores;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct() {
        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false) {
            $this->redirect('/login');
        }
    }

    public function index() {
        $jogadores = jogadores::select()->execute();
        $this->render('home', ['jogadores' => $jogadores]);
    }

}