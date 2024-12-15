<?php

namespace Model;

class Usuario extends ActiveRecord{
    public static $tabla = 'usuarios';
    public static $columnasDB = ['id', 'nombre', 'apellidos', 'email', 'password', 'admin', 'token'];

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $password;
    public $admin;
    public $token;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellidos = $args['apellidos'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->admin = $args['admin'] ?? '0';
    }

    public function validarLogin(){
        if(!$this->email){
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!$this->password){
            self::$alertas['error'][] = 'El Password es Obligatorio';
        }

        return self::$alertas;
    }
    public function validarEmail(){
        if(!$this->email){
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }

        return self::$alertas;
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas['error'][] = 'El Passsword es Obligatorio';
        }
        if(strlen($this->password) < 6){
            self::$alertas['error'][] = 'El Passsword Debe Tener al Menos 6 Caracteres ';
        }
        return self::$alertas;
    }

    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
   }
}
