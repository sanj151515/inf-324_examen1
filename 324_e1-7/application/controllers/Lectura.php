<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura extends CI_Controller {


	public function index()
	{
		
		$this->load->model("mydb_model");
		$filas = $this->mydb_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);
	}
	public function insertar_persona()
	{
		$this->load->view('view_insertar');
	}
	public function insertado_persona()
	{
		//$this->load->view('view_insertar');
		$this->load->model("mydb_model");
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['ci']=$this->input->post('cip');
			$data['nombre_completo']=$this->input->post('nomp');
			$data['fecha_de_nacimiento']=$this->input->post('fechap');
			$data['departamento']=$this->input->post('depp');
			$response=$this->mydb_model->insertar_Persona($data);
		
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
		$filas = $this->mydb_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);			
	}
	public function eliminar_persona()
	{
		$id=$this->input->post('id');
		$this->load->view('view_eliminar',$id);
	}
	public function eliminado_persona()
	{
		$this->load->model("mydb_model");
		//$id=$this->input->post('cip');
		$id=$_GET["cip"];
		$response=$this->mydb_model->eliminar_persona($id);
		if($response==true){
			echo "Data deleted successfully !";
		}
		else{
			echo "Error !";
		}
		$filas = $this->mydb_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);	
	}
	public function modificar_persona()
	{
		$mcip=$_GET["cip"];		
		$this->load->model("mydb_model");
		$fila = $this->mydb_model->persona_buscar($mcip);
		$datos["fila"]=$fila;
		$this->load->view('view_modificar',$datos);
	}
	public function modificar2_persona()
	{		
		$this->load->view('view_modificar2');
	}
	public function modificando_persona()
	{
		//$this->load->view('view_insertar');
		$this->load->model("mydb_model");
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $dataci=$this->input->post('cip');
			$data['nombre_completo']=$this->input->post('nomp');
			$data['fecha_de_nacimiento']=$this->input->post('fechap');
			$data['departamento']=$this->input->post('depp');
			$response=$this->mydb_model->modificar_persona($data,$dataci);
		
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}
		$this->index();
		
		//$filas = $this->mydb_model->personas();
		
		//$datos["filas"]=$filas;
		
		//$this->load->view('view_lectura', $datos);			
	}
	public function eliminando_persona()
	{
		//$this->load->view('view_insertar');
		$this->load->model("mydb_model");
		/*Check submit button */
		if($this->input->post('save'))
		{
		    //$data['ci']=$this->input->post('cip');
			$data['nombre_completo']=$this->input->post('nomp');
			$data['fecha_de_nacimiento']=$this->input->post('fechap');
			$data['departamento']=$this->input->post('depp');
			$response=$this->mydb_model->modificar_Persona($data);
		
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "save error !";
			}
		}
		$filas = $this->mydb_model->personas();
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);			
	}
	public function index2()
	{
		$datos["Nombre"]="Moises";
		$datos["Apellido"]="Silva";
		$this->load->model("Academico_model");
		$filas = $this->Academico_model->alumno('32');
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);
	}
}
