<?php

class Duenyos_model extends CI_Model
{

	public function getDuenyos($curso){
    	$this->db->select("*");
    	$this->db->from("duenyos");
    	$this->db->where("curso", $curso);
    	$this->db->where("deleted", 0);

    	$query = $this->db->get();
    	if ($query->num_rows() > 0) {
        	return $query->result();
    	} else {
        	return NULL;
    	}
	}

	function deleteDuenyo($id){
    	$array = array(
        	"deleted" => 1
    	);
    	$this->db->where("id", $id);
    	$this->db->update("duenyos", $array);
	}

}