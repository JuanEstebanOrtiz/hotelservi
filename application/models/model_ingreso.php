<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_ingreso extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultaUser($user,$contra){
    $sql="SELECT u.usuario,u.contrasena, r.nombre_rol
    FROM usuario u, roles r
    WHERE u.rol= r.id
    AND u.usuario='$user'
    AND u.contrasena='$contra'";
    $query=$this->db->query($sql);

    return $query->row();
    //return $query->result();
  }

  public function consultaUsusarios(){
    $sql="SELECT * from usuario";
    $query=$this->db->query($sql);

    return $query->result();
  }

  public function eUsusario($id){
    $this->db->delete('usuario',array('id'=>$id));

  }
  public function mUsusario($user,$pass,$id){
    $this->db->where('id',$id);
    $this->db->update('usuario',array('usuario'=>$user,'contrasena'=>$pass));

  }

  public function aUsusario($user,$pass,$rol){
    $this->db->insert('usuario',array('usuario'=>$user,'contrasena'=>$pass,'rol'=>$rol));
    return $this->db->insert_id();
  }


}