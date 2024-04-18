<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_agentes extends CI_Controller {

    public function registrar()
    {
        $this->load->view('registrar');
    }

    public function registrar_formAgente()
    {
        $this->load->model('registrar_agentes/Registrar_agentes_model');
        $this->Registrar_agentes_model->registrar_agente();
    }
}