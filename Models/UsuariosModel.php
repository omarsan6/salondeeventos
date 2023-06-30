<?php

    class UsuariosModel extends Query{


        public function __construct(){
            parent::__construct();
        }

        public function registrar($nombreCompleto,$nombreDeUsuario,$contrasenia,$telefono,$correo){
            $sql = "INSERT INTO usuario(nombre_completo,nombre_de_usuario,contrasenia,telefono,correo)
                VALUES (?,?,?,?,?)";

            $datos = array($nombreCompleto,$nombreDeUsuario,$contrasenia,$telefono,$correo);

            $data = $this->save($sql,$datos);

            if($data == 1){
                $res = "ok";
            } else {
                $res ="error";
            }
            
            return $res;
        }

        public function iniciarSesion($nombreDeUsuario,$contrasenia){
            $sql = "SELECT * from usuario 
                where nombre_de_usuario = '$nombreDeUsuario' and
                contrasenia = '$contrasenia'";
            
            $data = $this->select($sql);

            return $data;
        }

        public function iniciarSesionAdmin($nombreDeUsuario,$contrasenia){
            $sql = "SELECT * from administrador 
                where nombre_de_usuario = '$nombreDeUsuario' and
                contrasenia = '$contrasenia'";
            
            $data = $this->select($sql);

            return $data;
        }
    }


?>