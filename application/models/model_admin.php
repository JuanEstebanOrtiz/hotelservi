<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_admin extends CI_Model {
	public function validarAdmin($user,$pass)
	{
    $sql="SELECT * FROM adm WHERE usuario='admin' AND contrasena='admin'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function consultarAdmin()
	{
		$sql="SELECT * FROM adm";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
