<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reserva extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    	$this->load->model('model_reserva');
	}
	public function index()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_reserva');
		$this->load->view('view_footer');
	}

	public function index_registro()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_registro_reserva');
		$this->load->view('view_footer');
	}

	public function index_servicios()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_registro_servicio');
		$this->load->view('view_footer');
	}

	public function registroHabitacion()
	{
		$room = $this->input->post('room');
		$f_inicio = $this->input->post('date1');
		$f_final = $this->input->post('date2');

		$resultado = $this->model_reserva->registroHabitacion($room,$f_inicio,$f_final);
	}

	public function home(){
		$data = array(
			'rooms' => $this->model_reserva->consultarHabitacion()
		);
		$this->load->view('view_menu_usuario');
		$this->load->view('view_admin_rooms', $data);
		$this->load->view('view_footer');
	}

	public function home2(){
		$data = array(
			'servicio' => $this->model_reserva->consultarServicio()
		);
		$this->load->view('view_menu_usuario');
		$this->load->view('view_admin_servicios', $data);
		$this->load->view('view_footer');
	}

	public function eliminarRegistro()
	{
		$this->model_reserva->eliminarHabitacion($id = null);
      redirect("".base_url()."index.php/admin/index_rooms");
	}

	public function registroServicio()
	{
		$room = $this->input->post('room');
		$desc = $this->input->post('desc');

		$resultado = $this->model_reserva->registroServicio($room,$desc);
	}
}
