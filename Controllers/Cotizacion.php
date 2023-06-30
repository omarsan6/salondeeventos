<?php
    class Cotizacion extends Controller{

        public function __construct(){
            session_start();
            parent::__construct();
        }

        public function index()
        {
            if(empty($_SESSION['activo'])){
                header("location: ".base_url);
            }

            $data = $this->model->getServicios();

            $this->views->getView($this,"index",$data);
        }

        public function salir(){
            session_destroy();
            header("location: ".base_url);
        }

        public function registrarCotizacion(){

            $id_usuario = $_SESSION['id_usuario'];
            $fecha = $_POST['fecha'];
            $nombreEvento = $_POST['nombreEvento'];
            $formato = 'No requiere';
            $monto = 0;

            if(isset($_POST['servicio'])){

                $servicios = $_POST['servicio'];

                foreach($servicios as $servicio){
                    $servicioPrecio = $this->model->getPrecio($servicio);
                    $monto = $servicioPrecio['costo'] + $monto;
                }

                $formato = implode(',',$_POST['servicio']);
            }

            $verificar = $this->model->getEventofecha($fecha);
            
            if(empty($verificar)){
                $data = $this->model->registrarCotizacion($nombreEvento,$formato,$monto,$fecha);
            
                if($data == "ok"){
                    $id = $this->model->getCotizacionActual();
    
                    $id_cotizacion = $id['c'];
    
                    $result = $this->model->registrarUsuarioCotizacion($id_usuario,$id_cotizacion);
    
                    $msg = array("msg"=>"Cotización realizada con exito","icono"=>"success");

                } else {
                    $msg = array("msg"=>"Error al registrar cotización","icono"=>"warning");
                }
            } else {
                $msg = array("msg"=>"No puede cotizar en una fecha ocupada","icono"=>"warning");
            }

           

            echo json_encode($msg,JSON_UNESCAPED_UNICODE);
            die();

        }

        public function listar(){
            $data = $this->model->listar();
            
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function listarApartado(){
            $data = $this->model->listarApartado();
            
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function listarFinalizado(){
            $data = $this->model->listarFinalizado();
            
            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }
    }


?>