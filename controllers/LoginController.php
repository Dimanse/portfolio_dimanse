<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

class LoginController {

    public static function login(Router $router){
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuario($_POST);
            $alertas = $auth->validarLogin();
            // debuguear($alertas);
            if(empty($alertas)){
                // Comprobar que existe el usuario
                $usuario = Usuario::where('email', $auth->email);

                if($usuario){
                    // Redireccionamiento
                    if($usuario->admin === '1'){
                        $_SESSION['admin'] = $usuario->admin ?? null;

                        header('Location: /admin');
                    }else{
                        header('Location: /');
                    }

                    // debuguear($_SESSION);
                
                }else{
                    header('Location: /');
                }
            
            }
        }

        $alertas = Usuario::getAlertas();

       $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas,
      
       ]);
    }


    public static function olvide(Router $router){


        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Usuario($_POST);
            $alertas = $auth->validarEmail();

            if(empty($alertas)){
                $usuario = Usuario::where('email', $auth->email);

                if($usuario && $usuario->admin === '1'){
                    $usuario->crearToken();
                    $usuario->guardar();
                    header('Location: /recuperar?token='.$usuario->token );
                }else{
                    Usuario::setAlerta('error', 'El Usuario no Existe');
                }

                // debuguear($usuario);
            }
            // debuguear($auth);
        }
        $alertas = Usuario::getAlertas();

        $router->render('/auth/olvide', [
            'titulo' => 'Cambia tu password',
            'alertas' => $alertas,

        ]);
    }

    public static function recuperar(Router $router){
        $alertas = [];
        $error = false;
        $token = s($_GET['token']);
        $usuario = Usuario::where('token', $token);
        if(empty($usuario)){
            Usuario::setAlerta('error', 'Token No Válido');
            $error = true;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $password = new Usuario($_POST);
            $alertas = $password->validarPassword();
            if(empty($alertas)){
                $usuario->password = null;
                $usuario->password = $password->password;
                $usuario->hashPassword();
                $usuario->token = null;
                // debuguear($usuario);
                $resultado = $usuario->guardar();
                if($resultado){
                    header('Location: /login');
                }
                // debuguear($usuario);
            }
        }
        
        $alertas = Usuario::getAlertas();
        $router->render('auth/recuperar', [
            'alertas' => $alertas,
            'error' => $error,
        ]);
    }

    public static function mesage(Router $router){
        $token = s($_GET['token']);
        $usuario = Usuario::where('token', $token);
        $router->render('auth/mesage', [
            'usuario' => $usuario,
        ]);
    }
}