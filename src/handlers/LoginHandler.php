<?php

namespace src\handlers;

use src\models\usuarios;

class LoginHandler
{

    public static function checkLogin()
    {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = usuarios::select()->where('token', $token)->one();
                if (count($data) > 0) {

                    $loggedUser = new usuarios();
                    $loggedUser->id = $data['id'];
                    $loggedUser->name = $data['name'];
                    $loggedUser->email = $data['email'];

                    return $loggedUser;
                }
        }

        return false;
    }

    public static function verifyLogin($email, $password)
    {
        $user = usuarios::select()->where('email', $email)->one();

         if ($user) {
            if (password_verify($password, $user['password'])) {
                $token = md5(time() . rand(0, 9999) . time());

                usuarios::update()
                    ->set('token', $token)
                    ->where('email', $email)
                    ->execute();

                return $token;
            }
        }

        return false;
    }

    public static function emailExists($email)
    {
        $user = usuarios::select()->where('email', $email)->one();
        return $user ? true : false;
    }

    public static function addUser($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time() . rand(0, 9999) . time());

        usuarios::insert([
            'email' => $email,
            'password' => $hash,
            'name' => $name,
            'token' => $token
        ])->execute();

        return $token;
    }
}
