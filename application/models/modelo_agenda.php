<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelo_agenda extends CI_Controller {

	
 function modelo_agenda() {
 parent::__construct(); //llamada al constructor de Model.
 }
 
function tipo_evento(){
	$sql = "SELECT capacidad FROM salaUV";
	$query=$this->db->query($sql);
	return $query->result();
	}
}
?>