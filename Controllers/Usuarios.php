<?php

    class Usuarios extends Controller{

        public function __construct(){
            session_start();
            parent::__construct();
        }

        //vista
        public function iniciarSesion()
        {
            $this->views->getView($this,"iniciarSesion");
        }

        public function iniciarSesionAccion(){

            $tipo = $_POST['tipo'];
            $nombreDeUsuario = $_POST['nombre_de_usuario'];
            $contrasenia = $_POST['contrasenia'];

            if($tipo == 'usuario'){
                $data = $this->model->iniciarSesion($nombreDeUsuario,$contrasenia);

                if($data){

                    $_SESSION['correo'] = $data['correo'];
        
                    $_SESSION['usuario'] = $data['nombre_de_usuario'];
        
                    $_SESSION['nombre'] = $data['nombre_completo'];
        
                    $_SESSION['id_usuario'] = $data['id_usuario'];
        
                    $_SESSION['activo'] = true;
        
                    $msg = "usuario";
                } else {
                    $msg = array("msg"=>"Error de usuario o contraseña","icono"=>"error");
                }
            } else {
                $data = $this->model->iniciarSesionAdmin($nombreDeUsuario,$contrasenia);    
                
                if($data){

                    $_SESSION['correo'] = $data['correo'];
        
                    $_SESSION['usuario'] = $data['nombre_de_usuario'];
        
                    $_SESSION['nombre'] = $data['nombre_completo'];
        
                    $_SESSION['id_administrador'] = $data['id_administrador'];
        
                    $_SESSION['activo'] = true;
        
                    $msg = "admin";
                } else {
                    $msg = array("msg"=>"Error de usuario o contraseña","icono"=>"error");
                }
            }

            

            echo json_encode($msg,JSON_UNESCAPED_UNICODE);
            die();
        }

        //vista
        public function registrarUsuario()
        {
            $this->views->getView($this,"registrarUsuario");
        }

        public function registrar(){
            $nombreCompleto = $_POST['nombre_completo'];
            $nombreDeUsuario = $_POST['nombre_de_usuario'];
            $contrasenia = $_POST['contrasenia'];
            $contraseniaConfirm = $_POST['contraseniaConfirm'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            if($contrasenia != $contraseniaConfirm){
                $msg = array("msg"=>"Las contraseñas no coinciden","icono"=>"error");
            } else if($nombreCompleto == '' || $nombreDeUsuario == '' || $telefono == '' || $correo == '') {
                $msg = array("msg"=>"Rellene todos los campos","icono"=>"warning");
            } else{
                $data = $this->model->registrar($nombreCompleto,$nombreDeUsuario,$contrasenia,$telefono,$correo);

                if($data == "ok"){
                    $msg = array("msg"=>"Usuario registrado exitosamente","icono"=>"success");
                } else {
                    $msg = array("msg"=>"Error al registrar usuario","icono"=>"error");
                }
            }

            echo json_encode($msg,JSON_UNESCAPED_UNICODE);
            die();
        }
        

    }



?>