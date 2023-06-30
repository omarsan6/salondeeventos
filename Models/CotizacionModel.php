<?php

    class CotizacionModel extends Query{


        public function __construct(){
            parent::__construct();
        }

        public function getServicios(){
            $sql = "SELECT * FROM servicio where estatus = 1";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function getPrecio($servicio){
            $sql = "SELECT costo FROM servicio where nombre = '$servicio'";
            $data = $this->select($sql);
            return $data;
        }

        public function registrarCotizacion($nombreEvento,$formato,$monto,$fecha){
            $sql = "INSERT INTO cotizacion(title,servicios,monto,start)
            VALUES (?,?,?,?)";

            $datos = array($nombreEvento,$formato,$monto,$fecha);

            $data = $this->save($sql,$datos);

            if($data == 1){
                $res = "ok";
            } else {
                $res ="error";
            }
            
            return $res;
        }

        public function listar(){
            $sql = "SELECT * from cotizacion where disponibilidad = 'no' and estado = 1";

            $data = $this->selectAll($sql);

            return $data;
        }

        public function listarApartado(){
            $sql = "SELECT * from cotizacion where disponibilidad = 'si' and estado = 1";

            $data = $this->selectAll($sql);

            return $data;
        }

        public function listarFinalizado(){
            $sql = "SELECT * from cotizacion where disponibilidad = 'ok' and estado = 1";

            $data = $this->selectAll($sql);

            return $data;
        }

        public function getCotizacionActual(){
            $sql = "SELECT MAX(id_cotizacion) as c FROM cotizacion";
            $data = $this->select($sql);
            return $data;
        }

        public function registrarUsuarioCotizacion($id_usuario,$id_cotizacion){
            $sql = "INSERT INTO usuario_has_cotizacion(usuario_id_usuario,cotizacion_id_cotizacion)
            VALUES (?,?)";

            $datos = array($id_usuario,$id_cotizacion);

            $data = $this->save($sql,$datos);

            if($data == 1){
                $res = "ok";
            } else {
                $res ="error";
            }
            
            return $res;
        }

        public function getEventofecha($fecha){
            $sql = "SELECT * FROM cotizacion where start = '$fecha' and estado = 1";
            $data = $this->selectAll($sql);

            return $data;
        }
    }


?>