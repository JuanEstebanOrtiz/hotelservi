<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuentas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    	$this->load->model('model_cuentas');
	}
	public function index_registro()
	{
		$this->load->view('view_menu');
		$this->load->view('view_registro');
		$this->load->view('view_footer');
	}

	public function index_ingreso()
	{
		$this->load->view('view_menu');
		$this->load->view('view_ingreso');
		$this->load->view('view_footer');
	}

	public function registro()
	{
		$fn = $this->input->post('firstname');
		$ln = $this->input->post('lastname');
		$email = $this->input->post('email');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$resultado = $this->model_cuentas->registroUsuario($fn,$ln,$email,$user,$pass);
	}

	public function home(){
		$data = array(
			'user' => $this->model_cuentas->consultarUsuario()
		);
		$this->load->view('view_menu_usuario');
		$this->load->view('view_admin_usuarios', $data);
		$this->load->view('view_footer');
	}

	public function ingreso()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');

		$resultado = $this->model_cuentas->ingresoUsuario($user,$pass);

		if(count($resultado) == 1){
			$session = array(
				'NOMBRE' => $resultado->user,
				'CONTRASEÑA' => $resultado->pass,
				'is_logged_in' => TRUE,
			);
			$this->session->set_userdata($session);
        	redirect("".base_url()."index.php/inicio/index_usuario");
		}else{
			echo "No existe dicha cuenta";
		}
	}
}
