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