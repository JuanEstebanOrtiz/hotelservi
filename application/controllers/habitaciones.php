<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class habitaciones extends CI_Controller {
    function __construct(){
        parent::__construct();
            $this->load->model('model_habitaciones');
      }
    

    public function eliminaHabitacion($id){
		$this->model_habitaciones->eHabitaciones($id);
		redirect("".base_url()."index.php/habitaciones/vistAdmiHabitaciones");
		//$this->home_admin();
	}

	public function agregaHabitaciones(){
		$numerohabitacion= $this->input->post('numerohabitacion');
        $descripcion= $this->input->post('descripcion');

		$iduser=$this->model_habitaciones->aHabitaciones($numerohabitacion,$descripcion);
		redirect("".base_url()."index.php/habitaciones/vistAdmiHabitaciones");
		//$this->home_admin();
	}

	public function vistAdmiHabitaciones()
	{
		$result['usuari']=$this->model_habitaciones->consultaHabitaciones();
		$this->load->view('view_header_admi');
		$this->load->view('view_habitaciones',$result);
    }
    public function modificaUsuario($id){
		$numerohabitacion= $this->input->post('numerohabitacion');
		$descripcion= $this->input->post('descripcion');


		$this->model_habitaciones->mHabitacion($numerohabitacion,$descripcion,$id);
		redirect("".base_url()."index.php/habitaciones/vistAdmiHabitaciones");
		//$this->home_admin();
	}

	public function vistAdmiHabitaciones_empleado()
	{
		$result['usuari']=$this->model_habitaciones->consultaHabitaciones();
		$this->load->view('view_header_empleado');
		$this->load->view('view_habitaciones_empleado',$result);
    }
    



}
?>