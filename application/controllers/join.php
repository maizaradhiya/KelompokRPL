<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Join extends CI_Controller{
   function __construct(){
   parent::__construct();      
   $this->load->model('join_model');
   }
public function data_donatur(){
   $data['donatur'] = $this->join_model->data_donatur()->result(); 
   $data['penggalang_dana'] = $this->join_model->data_penggalang_dana()->result(); 
   $data['join_donatur_penggalang_dana'] = $this->join_model->join2table()->result(); 
   $this->load->view('joinview',$data);
} 
}