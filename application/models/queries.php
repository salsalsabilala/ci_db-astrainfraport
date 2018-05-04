<?php
  class queries extends CI_Model{

    public function getPosts(){
      $query = $this -> db->get('karyawan');
      if($query->num_rows() > 0){
        return $query -> result();
      }
    }
    public function addPost($data){
      return $this->db->insert('karyawan', $data);
    }
  }
 ?>
