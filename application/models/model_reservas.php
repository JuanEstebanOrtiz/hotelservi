<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_reservas extends CI_Model {

  function __construct(){
    parent::__construct();
  }



  public function consultaReservas(){
    $sql="SELECT * from reservas";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function eReservas($id){
    $this->db->delete('reservas',array('id'=>$id));

  }
  public function mReservas($nombre,$identificacion,$fechainicio,$fechafinal,$numeropersonas,$numerocamas,$habitacion,$id){
    $this->db->where('id',$id);
    $this->db->update('reservas',array('nombre'=>$nombre,'identificacion'=>$identificacion,'fechainicio'=>$fechainicio,'fechafinal'=>$fechafinal
                                            ,'numeropersonas'=>$numeropersonas,'numerocamas'=>$numerocamas,'habitacion'=>$habitacion));

  }

  public function aReservas($nombre,$identificacion,$fechainicio,$fechafinal,$numeropersonas,$numerocamas,$habitacion){
    $this->db->insert('reservas',array('nombre'=>$nombre,'identificacion'=>$identificacion,'fechainicio'=>$fechainicio,'fechafinal'=>$fechafinal
    ,'numeropersonas'=>$numeropersonas,'numerocamas'=>$numerocamas,'habitacion'=>$habitacion));
    return $this->db->insert_id();
  }


}