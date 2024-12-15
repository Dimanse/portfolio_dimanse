<?php

namespace Controllers;

use MVC\Router;
use Model\Mensaje;
use Model\Trabajo;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;

class AdminController{
    public static function index(Router $router){

        if(!isset($_SESSION)){
            session_start();
            }
        isAdmin();
            $trabajos = Trabajo::all();
            $mensajes = Mensaje::all();
            // debuguear($trabajos);
        $router->render('/admin/index', [
            'titulo'=> 'Panel de Administración',
            'trabajos' => $trabajos,
            'mensajes' => $mensajes,
        ]);
    }

    public static function correos(Router $router){
        $mensajes = Mensaje::all();

        $router->render('admin/correos', [
            'titulo' => 'Correos Recibidos',
            'mensajes' => $mensajes
        ]);
    } 

    public static function correo_eliminar(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!isAdmin()){
                header('Location: /');
            }
            $id = $_POST['id'];
            $mensaje = Mensaje::find($id);

            if(!isset($mensaje)){
                header('Location: /admin/inicio');
            }

            $resultado = $mensaje->eliminar();
            if($resultado){
                header('Location: /admin/correos');

            }
            // debuguear($ponente);
        }
    }

    public static function trabajos(Router $router){
        $trabajos = Trabajo::all();
        $imagen = 'pagina.webp';
        $router->render('admin/trabajos', [
            'titulo' => 'Proyectos Realizados',
            'trabajos' => $trabajos,
            'imagen' => $imagen,
        ]);
    }

    public static function crear(Router $router){
        isAdmin();
        $alertas = [];
        $trabajo = new Trabajo;
       
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // leer imagen
            if(!empty($_FILES['imagen']['tmp_name'])){
                $carpeta_imagenes = '../public/img/trabajos';
                // Crear la carpeta si no existe
                if(!is_dir($carpeta_imagenes)){
                    mkdir($carpeta_imagenes, 0777, true);
                    
                }
                $manager = new ImageManager(new Driver());
                $imagen = $manager->read($_FILES['imagen']['tmp_name']);
                $encoded = $imagen->toWebp(80);
                $nombre_imagen = md5(uniqId(rand(), true));

                $_POST['imagen'] = $nombre_imagen; 
            }

            $trabajo->sincronizar($_POST);

            // Validar

            $alertas = $trabajo->validarTrabajo(); 


            // Guardar el registro
            if(empty($alertas)){
                // $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . '.png');
                // $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . '.webp');
                $encoded->save( $carpeta_imagenes . '/' . $nombre_imagen . '.webp');
                $resultado = $trabajo->guardar();

                if($resultado){
                    header('Location: /admin/trabajos');
                }
            }
        }
        $alertas = Trabajo::getAlertas();
        $router->render('admin/crear', [
            'titulo' => 'Registra un nuevo trabajo',
            'alertas' => $alertas,
            'trabajo' => $trabajo
        ]);
    }

    public static function editar(Router $router){

        if(!isset($_SESSION)){
            session_start();
        }
        // debuguear($_GET['id']);
        isAdmin();
        if(!is_numeric($_GET['id'])) return;
        $trabajo = Trabajo::find($_GET['id']);
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $carpeta_imagenes = '../public/img/trabajos';

            $manager = new ImageManager(new Driver());
                $imagen = $manager->read($_FILES['imagen']['tmp_name']);
                $encoded = $imagen->toWebp(80);
                $nombre_imagen = md5(uniqId(rand(), true));

                $_POST['imagen'] = $nombre_imagen; 


            $trabajo->sincronizar($_POST);
            // debuguear($trabajo);
            $alertas = $trabajo->validarTrabajo();
            if(empty($alertas)){
                $encoded->save( $carpeta_imagenes . '/' . $nombre_imagen . '.webp');
                $trabajo->guardar();
                header('Location: /admin/trabajos');
            }
        }
        $alertas = Trabajo::getAlertas();
            $router->render('admin/editar', [
                'titulo' => 'Actualiza tu los datos de tu trabajo',
                'trabajo' => $trabajo,
            ]);
            // debuguear($ponente);
        }
    

    public static function trabajo_eliminar(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!isAdmin()){
                header('Location: /');
            }
            $id = $_POST['id'];
            $trabajo = Trabajo::find($id);

            if(!isset($mensaje)){
                header('Location: /admin/inicio');
            }

            $resultado = $trabajo->eliminar();
            if($resultado){
                header('Location: /admin/trabajos');

            }
            // debuguear($ponente);
        }
    }
}
