<?php

    class AdministracionModel extends Query{


        public function __construct(){
            parent::__construct();
        }

        public function getAllCotizacion(){
            $sql = "SELECT * FROM cotizacion c 
                inner join usuario_has_cotizacion uc on c.id_cotizacion = uc.cotizacion_id_cotizacion 
                inner join usuario u on u.id_usuario = uc.usuario_id_usuario
                where c.estado = 1";
            $data = $this->selectAll($sql);
            return $data;
        }

        public function editarCotizacion($id_cotizacion,$disponibilidad){
            $sql = "UPDATE cotizacion set disponibilidad = ? where id_cotizacion = ?";
            $datos = array($disponibilidad,$id_cotizacion);
            $data = $this->save($sql,$datos);

            if($data == 1){
                $res = "ok";
            } else {
                $res ="error";
            }
            
            return $res;
        }

        public function eliminar($id_cotizacion){
            $sql = "UPDATE cotizacion set estado = ? where id_cotizacion = ?";

            $datos = array(0,$id_cotizacion);
            $data = $this->save($sql,$datos);

            if($data == 1){
                $res = "ok";
            } else {
                $res ="error";
            }
            
            return $res;
        }

    }


?>