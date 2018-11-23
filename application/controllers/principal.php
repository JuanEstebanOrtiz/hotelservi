<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {
	public function index()
	{
		$this->load->view('view_menu');
		$this->load->view('view_index');
		$this->load->view('view_footer');
    }
    
    public function ingreso()
    {
        $this->load->view('view_menu');
        $this->load->view('view_usuario');
        $this->load->view('view_footer');

    }



}
?>
