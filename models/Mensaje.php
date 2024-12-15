<?php

namespace Model;

class Mensaje extends ActiveRecord{
    protected static $tabla = 'mensajes';
    protected static $columnasDB = ['id', 'nombre', 'apellidos', 'email', 'telefono', 'mensaje', 'fecha', 'hora'];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $mensaje;
    public $fecha;
    public $hora;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Tu nombre es Obligatorio';
        }
        if(!$this->apellidos) {
            self::$alertas['error'][] = 'Tus apellidos son Obligatorios';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email del Usuario es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if(!$this->mensaje) {
            self::$alertas['error'][] = 'El mensaje no puede ir vacio';
        }
        return self::$alertas;

    }

}