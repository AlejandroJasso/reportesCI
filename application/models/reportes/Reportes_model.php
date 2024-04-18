<?php

class Reportes_model extends CI_Model
{

    function uploadReporte($data,$archivo){
        $array=array(
            "nombre"=>$data['nombre'],
            "apellidoP"=>$data['apellidoP'],
            "apellidoM"=>$data['apellidoM'],
            "contacto"=>$data['contacto'],
            "fecha_reporte"=>$data['fecha_reporte'],
            "descripcion"=>$data['descripcion'],
            "archivo"=>$archivo,
        );
        $this->db->insert("reportes",$array);
    }

    public function getReportes($curso){
        $this->db->select("*");
        $this->db->from("reportes");
        $this->db->where("deleted",0);

        $query=$this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } else {
            return NULL;
        }
    }

    function deleteReporte($id){
        $array=array(
            "deleted"=>1
        );
        $this->db->where("id",$id);
        $this->db->update("reportes", $array);
    }   
}