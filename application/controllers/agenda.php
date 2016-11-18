<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Agenda extends CI_Controller {
 
 public function __construct() {
 	 parent::__construct();
 
		$this->load->model('modelo_agenda');
		$this->load->database();
		

 }
 

public function alta_solicitudinterna(){
	$this->load->view('solicitud_interna');

}

public function alta_solicitudexterna(){
	$this->load->view('solicitud_externa');

}

public function prueba_formulario(){
	$this->load->view('vista_altas');

}
 
}
 
?>