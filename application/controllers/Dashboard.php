<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
/*		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('home');
		$this->load->view('includes/footer');*/
		$this->loadViews("home");
	}

	public function login()
	{
		//print_r($_POST); //imprime en pantalla los elementos que enviamos con el metodo post

		if($_POST['username'] && $_POST["password"]){
			$login=$this->Site_model->loginUser($_POST);
			//print_r($login);
			if($login){
				$array=array(
					"id"=>$login[0]->id,	
					"nombre"=>$login[0]->nombre,
					"apellidos"=>$login[0]->apellidos,
					"username"=>$login[0]->username,
					"curso"=>$login[0]->curso,
					"password"=>$login[0]->password,
				);

			//Guardar tipo usuario (Agente / dueño)
				if (isset($login[0]->is_agente)) {
					$array['tipo']="agente";
				}elseif (isset($login[0]->is_duenyo)) {
					$array['tipo']="duenyo";
				}

				$this->session->set_userdata($array);
			//print_r($_SESSION);
			}
		}

		$this->loadViews('login');
	}

	public function logout()
	{
    	$this->session->sess_destroy(); // Destruye toda la información registrada de una sesión
    	redirect(base_url()."Dashboard","login");// Redirige al usuario a la vista de login
	}	


	public function registrar()
	{
		$this->load->view('registrar');
	}

	public function registrar_formAgente(){
		$this->Site_model->registrar_agente();
	}

	function eliminarDuenyo(){

		if ($_POST['idduenyo']) {
			$this->Site_model->deleteDuenyo($_POST['idduenyo']);
		}
	}

	function eliminarReporte(){

		if ($_POST['idreporte']) {
			$this->Site_model->deleteReporte($_POST['idreporte']);
		}
	}	

	function gestionDuenyos(){
		if($_SESSION['tipo']=="agente"){
			$data['duenyos']=$this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('gestionduenyos',$data);		
		}else{
			redirect(base_url()."Dashboard","location");
		}
		
	}

	function listadoDuenyos(){
		if($_SESSION['tipo']=="agente"){
			$data['duenyos']=$this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('listadoDuenyos',$data);		
		}else{
			redirect(base_url()."Dashboard","location");
		}
		
	}	

	function gestionarReportes(){
		if($_SESSION['tipo']=="agente"){
			$data['reportes']=$this->Site_model->getReportes($_SESSION['curso']);
			$this->loadViews('gestionarReportes',$data);		
		}else{
			redirect(base_url()."Dashboard","location");
		}
		
	}

	function catalogoAutos(){
		if($_SESSION['tipo']=="agente"){
			$data['autos']=$this->Site_model->getAutos($_SESSION['curso']);
			$this->loadViews('catalogoAutos',$data);		
		}else{
			redirect(base_url()."Dashboard","location");
		}
		
	}

	function crearReporte(){
		if ($_POST) {
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			//$config['max_size']             = 100;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;
			$config['file_name']=uniqid().$_FILES['archivo']['name'];

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('archivo'))
			{
				echo "error";
			}
			else
			{
				$this->Site_model->uploadReporte($_POST,$config['file_name']);
			}
		}

		$this->loadViews("crearReporte");
	}

	function duenyosAutos(){
		if($_SESSION['tipo']=="agente"){
			$data['duenyos']=$this->Site_model->getDuenyos($_SESSION['curso']);
			$this->loadViews('duenyosAutos',$data);		
		}else{
			redirect(base_url()."Dashboard","location");
		}
		
	}

	function agregarAuto(){
		if ($_POST) {
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			//$config['max_size']             = 100;
			//$config['max_width']            = 1024;
			//$config['max_height']           = 768;
			$config['file_name']=uniqid().$_FILES['archivo']['name'];

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('archivo'))
			{
				echo "error";
			}
			else
			{
				$this->Site_model->uploadAuto($_POST,$config['file_name']);
			}
		}

		$this->loadViews("agregarAuto");
	}	

	function loadViews($view,$data=null){
		//print_r($_SESSION);

        //Si tenemos sesion creada
		if($_SESSION['username']){

            //Si la vista es login se redirige a la home
			if($view=="login"){
				redirect(base_url()."Dashboard","location");
			}

            //Si es una vista cualquiera se carga
			$this->load->view('includes/header');
			$this->load->view('includes/sidebar');
			$this->load->view($view, $data);
			$this->load->view('includes/footer');
        //Si no tenemos iniciada sesion    
		}else{
            //Si la vista es login se carga 
			if($view=="login"){
				$this->load->view($view);
            //Si la vista es otra cualquiera se redirige al login    
			}else{
				redirect(base_url()."Dashboard/login","location");
			}
		}
	}
}