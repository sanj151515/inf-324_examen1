<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mydb_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function personas()
	{
		$this->load->database();
		$query=$this->db->query("select ci, nombre_completo, (
			case departamento  
			when '01' then 'Chuquisaca'
			when '02' then 'La Paz'
        when '03' then 'Cochabamba'
        when '04' then 'Oruro'
        when '05' then 'Potosi'
        when '06' then 'Tarija'
        when '07' then 'Santa Cruz'
		when '08' then 'Beni'
		when '09' then 'Pando'
        else 'otro'
        end)as departamento, fecha_de_nacimiento from persona");
		return $query->result();
	}
	public function personas2()
	{
		$this->load->database();
		$query=$this->db->query("select * from persona");
		return $query->result();
	}
	public function insertar_Persona($data)
	{
		
		$this->load->database();
		$query=$this->db->insert('persona',$data);
		return true;
	}
	function eliminar_persona($id)
	{
		$this->load->database();
		$this->db->where("ci", $id);
		$this->db->delete("persona");
		return true;
	}
	function modificar_persona($data,$id)
	{
		$this->load->database();
		$this->db->where('ci', $id);
		$this->db->update('persona', $data);
	}
	public function persona_buscar($id)
	{
		
		$this->load->database();
		$query=$this->db->query("select * from persona where ci='$id'");
		return $query->result();
	}
	 

}