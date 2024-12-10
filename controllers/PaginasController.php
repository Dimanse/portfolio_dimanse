<?php

namespace Controllers;

use MVC\Router;
use Model\Mensaje;
use Model\Trabajo;

Class PaginasController{

    public static function index(Router $router){
        
        $trabajos = Trabajo::all();
        // debuguear($trabajos);

        $router->render('paginas/index', [
            'titulo' => 'Inicio',
            'trabajos' => $trabajos,
        ]);
    }

    

    public static function contacto(Router $router){
        $mensaje = new Mensaje;
        $alertas = [];
        $fecha = date_default_timezone_set('America/managua');
        $fechaActual = Date('H:i');
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensaje->sincronizar($_POST);
            $alertas = $mensaje->validar();
            
            if(empty($alertas)){
                $resultado = $mensaje->guardar();
                // debuguear($resultado);
                if($resultado){
                    header('Location: /');
                }
            }
            // debuguear($mensaje);

        }
        $alertas = Mensaje::getAlertas();
        $router->render('paginas/contacto', [
            'titulo' => 'Gracias por tomarte el tiempo de comunicarte conmigo. ¿Cómo puedo ayudarte hoy?',
            'alertas' => $alertas,
            'fechaActual' => $fechaActual,
            'mensaje' => $mensaje,
        ]);
    }
    
    


}