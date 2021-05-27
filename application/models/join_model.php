<?php 
class Join_model extends CI_Model{
   public function data_donatur(){
      $this->db->select('*');
      $this->db->from('donatur');   
      $query = $this->db->get();
      return $query;
   }
   public function data_penggalang_dana(){
      $this->db->select('*');
      $this->db->from('penggalang_dana');
      $this->db->join('donatur','donatur.id_donatur = penggalang_dana.id_pd');      
      $query = $this->db->get();
      return $query;
   }
   function join2table(){
      $this->db->select('*');
      $this->db->from('penggalang_dana');
      $this->db->join('donatur','donatur.id_donatur = penggalang_dana.id_pd');      
      $query = $this->db->get();
      return $query;
   }
}