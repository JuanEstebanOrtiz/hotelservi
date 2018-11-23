<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_cuentas extends CI_Model {
	public function registroUsuario($fn,$ln,$email,$user,$pass)
	{
		$sql="INSERT INTO usuarios(nombre,apellido,correo,usuario,contrasena)
		VALUES ('$fn','$ln','$email','$user','$pass')";
		$query = $this->db->query($sql);
		echo "Cuenta Creada";
		if($query === 1){
			return $query->result();
		}
	}

	public function ingresoUsuario($user,$pass)
	{
		$sql="SELECT * FROM usuarios WHERE usuario='$user' AND contrasena='$pass'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function consultarUsuario()
	{
		$sql="SELECT * FROM usuarios";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eliminarUsuarios($id)
	{
		$this->db->delete('usuarios',array('id' => $id));
	}
}
