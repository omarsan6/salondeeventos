<?php

    class Administracion extends Controller{

        public function __construct(){
            session_start();
            parent::__construct();
        }

        public function index()
        {
            $this->views->getView($this,"index");
        }

        public function listar(){
            $data = $this->model->getAllCotizacion();

            for($i=0;$i < count($data); $i++){

                if($data[$i]['disponibilidad'] == "no"){
                    $data[$i]['disponibilidad'] = '<span class="badge badge-primary">En espera</span>';
                } else if($data[$i]['disponibilidad'] == "si"){
                    $data[$i]['disponibilidad'] = '<span class="badge badge-success">Apartado</span>';
                } else{
                    $data[$i]['disponibilidad'] = '<span class="badge badge-danger">Finalizado</span>';
                }

                
                $data[$i]['acciones'] = '<div>
                    <button class="btn btn-primary" type="button" onclick="btnEditarCotizacion('.$data[$i]['id_cotizacion'].');">Editar</button>
                    <button class="btn btn-danger" type="button" onclick="btnEliminarCotizacion('.$data[$i]['id_cotizacion'].');">Eliminar</button>
                </div>';
            }

            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function editar(){
            $id_cotizacion = $_POST['id_cotizacion'];

            if($_POST['disponibilidad'] == "En espera"){
                $disponibilidad = 'no';
            } else if ($_POST['disponibilidad'] == "Apartado"){
                $disponibilidad = 'si';
            } else {
                $disponibilidad = 'ok';
            }

            $data = $this->model->editarCotizacion($id_cotizacion,$disponibilidad);

            if($data == "ok"){
                $msg = "ok";
            } else {
                $msg = "error";
            }

            echo json_encode($data,JSON_UNESCAPED_UNICODE);
            die();
        }

        public function eliminar($id_cotizacion){
            $eliminar = $this->model->eliminar($id_cotizacion);

            if($eliminar == "ok"){
                $msg = "ok"; 
            } else{
                $msg = "error";
            }

            echo json_encode($msg,JSON_UNESCAPED_UNICODE);
            die();
        }

    }


?>
