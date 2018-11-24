<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_habitaciones extends CI_Model {

  function __construct(){
    parent::__construct();
  }



  public function consultaHabitaciones(){
    $sql="SELECT * from habitaciones";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function eHabitaciones($id){
    $this->db->delete('habitaciones',array('id'=>$id));

  }
  public function mHabitaciones($numerohabitacion,$descripcion,$id){
    $this->db->where('id',$id);
    $this->db->update('habitaciones',array('numerohabitacion'=>$numerohabitacion,'descripcion'=>$descripcion));

  }

  public function aHabitaciones($numerohabitacion,$descripcion){
    $this->db->insert('habitaciones',array('numerohabitacion'=>$numerohabitacion,'descripcion'=>$descripcion));
    return $this->db->insert_id();
  }


}