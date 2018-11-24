<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pedidos extends CI_Model {

  function __construct(){
    parent::__construct();
  }



  public function consultaPedidos(){
    $sql="SELECT * from pedidos";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function ePedidos($id){
    $this->db->delete('pedidos',array('id'=>$id));

  }
  public function mPedidos($nombre,$descripcion,$habitacion){
    $this->db->where('id',$id);
    $this->db->update('pedidos',array('nombre'=>$nombre,'descripcion'=>$descripcion,'habitacion'=>$habitacion));

  }

  public function aPedidos($nombre,$descripcion,$habitacion){
    $this->db->insert('pedidos',array('nombre'=>$nombre,'descripcion'=>$descripcion,'habitacion'=>$habitacion));
    return $this->db->insert_id();
  }


}