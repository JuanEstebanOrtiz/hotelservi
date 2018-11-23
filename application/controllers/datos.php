<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datos extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('model_reserva');
        $this->load->model('model_cuentas');
	}
    
    public function eliminarRoom($id = null)
    {
        $this->model_reserva->eliminarRooms($id);
        redirect("".base_url()."index.php/reserva/home");
    }

    public function eliminarServicio($id = null)
    {
        $this->model_reserva->eliminarServicios($id);
        redirect("".base_url()."index.php/reserva/home2");
    }

    public function eliminarUsuario($id = null)
    {
        $this->model_cuentas->eliminarUsuarios($id);
        redirect("".base_url()."index.php/cuentas/home");
    }

    public function actualizarRoom($id = null)
    {
        $this->model_reserva->actualizarRooms($id);
        redirect("".base_url()."index.php/admin/index_rooms");
    }
}
