<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pedidos extends CI_Controller {
    function __construct(){
        parent::__construct();
            $this->load->model('model_pedidos');
      }
    

    public function eliminaPedidos($id){
		$this->model_pedidos->ePedidos($id);
		redirect("".base_url()."index.php/pedidos/vistAdmiPedidos");
		//$this->home_admin();
	}

	public function agregaPedidos(){
		$nombre= $this->input->post('nombre');
        $descripcion= $this->input->post('descripcion');
        $habitacion= $this->input->post('habitacion');

		$iduser=$this->model_pedidos->aPedidos($nombre,$descripcion,$habitacion);
		redirect("".base_url()."index.php/pedidos/vistAdmiPedidos");
		//$this->home_admin();
	}

	public function vistAdmiPedidos()
	{
		$result['usuari']=$this->model_pedidos->consultaPedidos();
		$this->load->view('view_header_admi');
		$this->load->view('view_pedidos',$result);
    }
    public function modificaPedidos($id){
		$nombre= $this->input->post('nombre');
        $descripcion= $this->input->post('descripcion');
        $habitacion= $this->input->post('habitacion');


		$this->model_pedidos->mPedidos($nombre,$descripcion,$habitacion,$id);
		redirect("".base_url()."index.php/pedidos/vistAdmiPedidos");
		//$this->home_admin();
	}
	
	public function pPrincipal(){
		$this->load->view('view_menu');
		$this->load->view('view_index');
		$this->load->view('view_footer');
	}

	public function agregaPedidos_Cliente(){
		$nombre= $this->input->post('nombre');
        $descripcion= $this->input->post('descripcion');
        $habitacion= $this->input->post('habitacion');

		$iduser=$this->model_pedidos->aPedidos($nombre,$descripcion,$habitacion);
		redirect("".base_url()."index.php/principal/servicios");
		//$this->home_admin();
	}

	public function vistAdmiPedidos_empleado()
	{
		$result['usuari']=$this->model_pedidos->consultaPedidos();
		$this->load->view('view_header_empleado');
		$this->load->view('view_pedidos_empleado',$result);
    }



}
?>