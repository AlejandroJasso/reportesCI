<?php

class Site_model extends CI_Model
{
	public function loginUser($data)
	{
		$this->db->select("*");
		$this->db->from("agentes");
		$this->db->where("username",$data["username"]);
		$this->db->where("password",md5($data["password"]));

		$query=$this->db->get();
		if($query->num_rows()>0) {
			return $query->result();
		}else{
			$this->db->select("*");
			$this->db->from("duenyos");
			$this->db->where("username",$data["username"]);
			$this->db->where("password",md5($data["password"]));
			$queryalumno=$this->db->get();
			if($queryalumno->num_rows()>0) {
				return $queryalumno->result();			
			}
			return NULL;
		}
	}

	//Función para insertar a Base de datos con codigo.
	public function insertAgente()
	{
		$array=array(
			"nombre"=>"David",
			"apellidos"=>"Navarro",
			"curso"=>3
		);

		$this->db->insert("agentes",$array);
	}
		//Fin de función para insertar datos

		public function getAgentes() //Función para obtener en un array los registros de la tabla agentes de la DB
		{
			$this->db->select("*");
			$this->db->from("agentes");
			//$this->db->where("id",1);
			//$this->db->where("id=1");

			$query=$this->db->get();

			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return NULL;
			}
		}

/*		public function registrar_agente(){

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
		}*/

		public function updateAgente() //Funcion para actualizar datos en la DB
		{
			$array=array(
				"nombre"=>"David",
				"apellidos"=>"Navarro López",
				"curso"=>1
			);

			$this->db->where("id",1);
			$this->db->update("agentes", $array);
		}

		public function getDuenyos($curso){
			$this->db->select("*");
			$this->db->from("duenyos");
			$this->db->where("curso",$curso);
			$this->db->where("deleted",0);

			$query=$this->db->get();
			//print_r($this->db->last_query());
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return NULL;
			}
		}

		public function getReportes($curso){
			$this->db->select("*");
			$this->db->from("reportes");
			$this->db->where("deleted",0);

			$query=$this->db->get();
			//print_r($this->db->last_query());
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return NULL;
			}
		}

		public function getAutos($curso){
			$this->db->select("*");
			$this->db->from("autos");

			$query=$this->db->get();
			//print_r($this->db->last_query());
			if ($query->num_rows()>0) {
				return $query->result();
			}else{
				return NULL;
			}
		}

		function deleteDuenyo($id){
			$array=array(
				"deleted"=>1
			);
			$this->db->where("id",$id);
			$this->db->update("duenyos", $array);
		}

		function deleteReporte($id){
			$array=array(
				"deleted"=>1
			);
			$this->db->where("id",$id);
			$this->db->update("reportes", $array);
		}		

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

		function uploadAuto($data,$archivo){
			$array=array(
				"marca"=>$data['marca'],
				"modelo"=>$data['modelo'],
				"placas"=>$data['placas'],
				"color"=>$data['color'],
				"fecha_compra"=>$data['fecha_compra'],
				"archivo"=>$archivo,
			);
			$this->db->insert("autos",$array);
		}
	}