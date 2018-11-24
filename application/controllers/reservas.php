<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservas extends CI_Controller {
    function __construct(){
        parent::__construct();
            $this->load->model('model_reservas');
      }
    

    public function eliminaReservas($id){
		$this->model_reservas->eReservas($id);
		redirect("".base_url()."index.php/reservas/vistAdmiReservas");
		//$this->home_admin();
	}

	public function agregaReservas(){
		$nombre= $this->input->post('nombre');
        $identificacion= $this->input->post('identificacion');
        $fechainicio= $this->input->post('fechainicio');
        $fechafinal= $this->input->post('fechafinal');
        $numeropersonas= $this->input->post('numeropersonas');
        $numerocamas= $this->input->post('numerocamas');
        $habitacion= $this->input->post('habitacion');

		$iduser=$this->model_reservas->aReservas($nombre,$identificacion,$fechainicio,$fechafinal,$numeropersonas,$numerocamas,$habitacion);
		redirect("".base_url()."index.php/reservas/vistAdmiReservas");
		//$this->home_admin();
	}

	public function vistAdmiReservas()
	{
		$result['usuari']=$this->model_reservas->consultaReservas();
		$this->load->view('view_header_admi');
		$this->load->view('view_reservas',$result);
    }
    public function modificaReserva($id){
		$nombre= $this->input->post('nombre');
        $identificacion= $this->input->post('identificacion');
        $fechainicio= $this->input->post('fechainicio');
        $fechafinal= $this->input->post('fechafinal');
        $numeropersonas= $this->input->post('numeropersonas');
        $numerocamas= $this->input->post('numerocamas');
        $habitacion= $this->input->post('habitacion');

		$this->model_reservas->mReserva($nombre,$identificacion,$fechainicio,$fechafinal,$numeropersonas,$numerocamas,$habitacion,$id);
		redirect("".base_url()."index.php/reservas/vistAdmiReservas");
		//$this->home_admin();
	}
    



}
?>