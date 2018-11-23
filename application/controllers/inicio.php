<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {
	public function index()
	{
		$this->load->view('view_menu');
		$this->load->view('view_index');
		$this->load->view('view_footer');
	}

	public function index_usuario()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_index');
		$this->load->view('view_footer');
	}

	public function usu_servicios()
	{
		$this->load->view('view_menu');
		$this->load->view('view_servicios');
		$this->load->view('view_footer');
	}

	public function index_servicios()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_servicios');
		$this->load->view('view_footer');
	}

	public function usu_contacto()
	{
		$this->load->view('view_menu');
		$this->load->view('view_contacto');
		$this->load->view('view_footer');
	}

	public function index_contacto()
	{
		$this->load->view('view_menu_usuario');
		$this->load->view('view_contacto');
		$this->load->view('view_footer');
	}

}
