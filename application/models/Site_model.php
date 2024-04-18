<?php

class Site_model extends CI_Model
{
    public function loginUser($data)
    {
        $this->db->select("*");
        $this->db->from("agentes");
        $this->db->where("username", $data["username"]);
        $this->db->where("password", md5($data["password"]));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            $this->db->select("*");
            $this->db->from("duenyos");
            $this->db->where("username", $data["username"]);
            $this->db->where("password", md5($data["password"]));
            $queryalumno = $this->db->get();
            if ($queryalumno->num_rows() > 0) {
                return $queryalumno->result();            
            }
            return NULL;
        }
    }

    public function getAgentes()
    {
        $this->db->select("*");
        $this->db->from("agentes");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return NULL;
        }
    }
}