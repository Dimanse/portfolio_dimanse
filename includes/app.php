<?php 

use Dotenv\Dotenv;
use Model\ActiveRecord;
// use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Imagick\Driver;
require __DIR__ . '/../vendor/autoload.php';

// Añadir Dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);

//Crear una nueva instancia de manager con el controlador deseado
// $manager = new ImageManager(new Driver());