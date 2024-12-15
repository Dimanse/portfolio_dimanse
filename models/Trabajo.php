<?php

namespace Model;
class Trabajo extends ActiveRecord {
    protected static $tabla = 'trabajos';
    protected static $columnasDB = ['id', 'nombre', 'url_github', 'url_web', 'imagen', 'descripcion'];

    public $id;
    public $nombre;
    public $url_github;
    public $url_web;
    public $imagen;
    public $descripcion;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->url_github = $args['url_github'] ?? '';
        $this->url_web = $args['url_web'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
    }

    public function validarTrabajo() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Tu nombre es Obligatorio';
        }
        if(!$this->url_github) {
            self::$alertas['error'][] = 'La url de Github es Obligatoria';
        }
        if(!$this->url_web) {
            self::$alertas['error'][] = 'La url de la web es Obligatoria';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen del trabajo es Obligatoria';
        }
        
        
        if(!$this->descripcion) {
            self::$alertas['error'][] = 'Añade una descripción de tu trabajo';
        }
        return self::$alertas;

    }

}
