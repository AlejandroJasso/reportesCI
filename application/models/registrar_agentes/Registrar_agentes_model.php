<?php

class Registrar_agentes_model extends CI_Model
{
    public function registrar_agente(){

        $password=$this->input->post('password');
        $con_password=$this->input->post('con_password');

        if($password!=$con_password){
            $this->session->set_flashdata('wrong','La contraseña no coincide');
            redirect(base_url()."Dashboard","location");
        }else{
            $data=array(
                "nombre"=>$this->input->post('nombre'),
                "username"=>$this->input->post('username'),
                "password" => md5($password) // Encripta la contraseña con MD5 antes de almacenarla
            );
            $this->db->insert('agentes',$data);
            $this->session->set_flashdata('suc','Ya te encuentras registrado, inicia sesión');
            redirect(base_url()."Dashboard","location");
        }
    }
}