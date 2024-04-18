<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->loadViews("home");
	}

	public function login()
	{
		if($_POST['username'] && $_POST["password"]){
			$login = $this->Site_model->loginUser($_POST);
			if($login){
				$array = array(
					"id" => $login[0]->id,
					"nombre" => $login[0]->nombre,
					"apellidos" => $login[0]->apellidos,
					"username" => $login[0]->username,
					"curso" => $login[0]->curso,
					"password" => $login[0]->password,
				);
				if (isset($login[0]->is_agente)) {
					$array['tipo'] = "agente";
				} elseif (isset($login[0]->is_duenyo)) {
					$array['tipo'] = "duenyo";
				}
				$this->session->set_userdata($array);
			}
		}
		$this->loadViews('login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url()."Dashboard", "login");
	}

	//Duenyos
	function eliminarDuenyo(){
		if ($_POST['idduenyo']) {
			$this->Site_model->deleteDuenyo($_POST['idduenyo']);
		}
	}

	function gestionDuenyos(){
		if($_SESSION['tipo'] == "agente"){
			$data['duenyos'] = $this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('gestionduenyos', $data);      
		} else {
			redirect(base_url()."Dashboard", "location");
		}
	}

	function listadoDuenyos(){
		if($_SESSION['tipo'] == "agente"){
			$data['duenyos'] = $this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('listadoDuenyos', $data);      
		} else {
			redirect(base_url()."Dashboard", "location");
		}
	}

	function duenyosAutos(){
		if($_SESSION['tipo'] == "agente"){
			$data['duenyos'] = $this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('duenyosAutos', $data);      
		} else {
			redirect(base_url()."Dashboard", "location");
		}
	}
	//Duenyos	

	//Reportes
	function crearReporte(){
		if ($_POST) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = uniqid() . $_FILES['archivo']['name'];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('archivo')) {
				echo "error";
			} else {
				$this->load->model('reportes/Reportes_model');
				$this->Reportes_model->uploadReporte($_POST, $config['file_name']);
			}
		}
		$this->loadViews("crearReporte");
	}

	function gestionarReportes(){
		if($_SESSION['tipo'] == "agente"){
			$this->load->model('reportes/Reportes_model');
			$data['reportes'] = $this->Reportes_model->getReportes($_SESSION['curso']);
			$this->loadViews('gestionarReportes', $data);      
		} else {
			redirect(base_url()."Dashboard", "location");
		}
	}

	function eliminarReporte(){
		if ($_POST['idreporte']) {
			$this->load->model('reportes/Reportes_model');
			$this->Reportes_model->deleteReporte($_POST['idreporte']);
		}
	}
	//Reportes

	//Autos
	function agregarAuto(){
		if ($_POST) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = uniqid() . $_FILES['archivo']['name'];

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('archivo')) {
				echo "error";
			} else {
				$this->Site_model->uploadAuto($_POST, $config['file_name']);
			}
		}
		$this->loadViews("agregarAuto");
	}

	function catalogoAutos(){
		if($_SESSION['tipo'] == "agente"){
			$data['autos'] = $this->Site_model->getAutos($_SESSION['curso']);
			$this->loadViews('catalogoAutos', $data);      
		} else {
			redirect(base_url()."Dashboard", "location");
		}
	}
	//Autos

	function loadViews($view, $data = null){
		if($_SESSION['username']){
			if($view == "login"){
				redirect(base_url()."Dashboard", "location");
			}
			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$this->load->view($view, $data);
			$this->load->view('includes/footer');
		} else {
			if($view == "login"){
				$this->load->view($view);
			} else {
				redirect(base_url()."Dashboard/login", "location");
			}
		}
	}
}