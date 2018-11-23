<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('model_admin');
        $this->load->model('model_reserva');
    }
    
	public function index()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_ingreso_admin');
		$this->load->view('view_footer');
    }

    public function index_tabla()
    {
        $this->load->view('view_menu_usuario');
		$this->load->view('view_admin');
		$this->load->view('view_footer');
    }

    public function index_rooms()
    {
        $this->load->view('view_menu_usuario');
		$this->load->view('view_admin_rooms');
		$this->load->view('view_footer');
    }

    public function index_servicios()
    {
        $this->load->view('view_menu_usuario');
		$this->load->view('view_admin_servicios');
		$this->load->view('view_footer');
    }

    public function home(){
		$data = array(
			'admin' => $this->model_admin->consultarAdmin()
		);
		$this->load->view('view_menu_usuario');
		$this->load->view('view_admin_rooms', $data);
		$this->load->view('view_footer');
	}

    public function validarAdmin()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');

        $resultado = $this->model_admin->validarAdmin($user,$pass);

        if(count($resultado) == 1){
            $session = array(
                'USUARIO' => $resultado->user,
                'CONTRASENA' => $resultado->pass,
            );
            $this->session->set_userdata($session);
        	redirect("".base_url()."index.php/admin/index_tabla");
        }else{
            echo "No tienes derechos de acceder";
        }
    }
}
