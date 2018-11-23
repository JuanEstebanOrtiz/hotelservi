<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_reserva extends CI_Model {
	public function registroHabitacion($room,$f_inicio,$f_final)
	{
		$sql="INSERT INTO rooms(room,fecha_inicio,fecha_final)
		VALUES ('$room','$f_inicio','$f_final')";
        $query = $this->db->query($sql);
        echo "Gracias por la reserva";
		if($query === 1){
			return $query->result();
		}
	}

	public function registroServicio($room,$desc)
	{
		$sql="INSERT INTO servicios(room,descripcion)
		VALUES ('$room','$desc')";
        $query = $this->db->query($sql);
        echo "Gracias por Reservar";
		if($query === 1){
			return $query->result();
		}
	}

	public function consultarHabitacion()
	{
		$sql="SELECT * FROM rooms";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function consultarServicio()
	{
		$sql="SELECT * FROM servicios";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eliminarRooms($id)
	{
		$this->db->delete('rooms',array('id' => $id));
	}

	public function eliminarServicios($id)
	{
		$this->db->delete('servicios',array('id' => $id));
	}

	public function actualizarRooms($id)
	{
		
	}
}