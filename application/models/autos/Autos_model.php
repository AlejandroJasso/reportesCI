<?php

class Autos_model extends CI_Model
{
	function uploadAuto($data, $archivo){
    	$array = array(
        	"marca" => $data['marca'],
        	"modelo" => $data['modelo'],
        	"placas" => $data['placas'],
        	"color" => $data['color'],
        	"fecha_compra" => $data['fecha_compra'],
        	"archivo" => $archivo,
    	);
    	$this->db->insert("autos", $array);
	}

	public function getAutos($curso){
    	$this->db->select("*");
   		$this->db->from("autos");

    	$query = $this->db->get();
    	if ($query->num_rows() > 0) {
        	return $query->result();
    	} else {
        	return NULL;
    	}
	}
}