<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {
    function __construct(){
        parent::__construct();
            $this->load->model('model_ingreso');
      }
    
	public function index()
	{
		$this->load->view('view_menu');
		$this->load->view('view_index');
		$this->load->view('view_footer');
    }
    
    public function ingreso()
    {
        $this->load->view('view_menu');
        $this->load->view('view_ingreso');
        $this->load->view('view_footer');

    }
    public function validaAcceso(){

		$user= $this->input->post('user');
		$pass= $this->input->post('pass');

		$result=$this->model_ingreso->consultaUser($user,$pass);

		if(count($result)==1){

			$session=array(
				'USUARIO'=> $result->usuario,
				'CONTRASENA'=> $result->contrasena,
				'ROL'=> $result->nombre_rol,
				'is_logged_in'=>TRUE ,
			);
			$this->session->set_userdata($session);

			echo $result->nombre_rol;
			if ($result->nombre_rol=='Admin') {

				redirect("".base_url()."index.php/principal/home_admin");
			}
			if ($result->nombre_rol=='cliente') {
				redirect("".base_url()."index.php/principal/home_cliente");
			}
			if ($result->nombre_rol=='camarero') {
				redirect("".base_url()."index.php/principal/home_camarero");
            }
            if ($result->nombre_rol=='boton') {
				redirect("".base_url()."index.php/principal/home_camarero");
			}
		}else{
		echo "no está registrado";
		}
    }
    
    public function home_admin(){

		
		$this->load->view('view_header_admi');
	}
	public function home_cliente(){
		$this->load->view('view_menu_usuario');
		$this->load->view('view_usuario');
	}

	public function home_camarero(){
		$this->load->view('view_header_empleado');
    }
    
    public function home_botones(){
		$this->load->view('view_header_empleado');
		
    }

    public function eliminaUsuario($id){
		$this->model_ingreso->eUsusario($id);
		redirect("".base_url()."index.php/principal/vistAdmiUsuario");
		//$this->home_admin();
	}
	public function modificaUsuario($id){
		$user= $this->input->post('user');
		$pass= $this->input->post('pass');
		$rol= $this->input->post('rol');

		$this->model_ingreso->mUsusario($user,$pass,$rol,$id);
		redirect("".base_url()."index.php/principal/vistAdmiUsuario");
		//$this->home_admin();
	}

	public function agregaUsuario(){
		$user= $this->input->post('user');
        $pass= $this->input->post('pass');
        $rol=$this->input->post('rol');

		$iduser=$this->model_ingreso->aUsusario($user,$pass,$rol);
		redirect("".base_url()."index.php/principal/vistAdmiUsuario");
		//$this->home_admin();
	}

	public function vistAdmiUsuario()
	{
		$result['usuari']=$this->model_ingreso->consultaUsusarios();
		$this->load->view('view_header_admi');
		$this->load->view('view_admi_usuarios',$result);
	}

	public function contacto(){
		$this->load->view('view_menu');
		$this->load->view('view_contacto');
	}

	public function contacto1(){
		$this->load->view('view_menu_usuario');
		$this->load->view('view_contacto');
	}

	public function servicios(){
		$this->load->view('view_menu_usuario');
		$this->load->view('view_servicios');
	}

	public function servicios_uno(){
		$this->load->view('view_menu');
		$this->load->view('view_servicios_unoo');
	}

	public function cliente_pedido(){
		$this->load->view('view_menu');
		$this->load->view('view_cliente_pedido');
	}
    



}
?>