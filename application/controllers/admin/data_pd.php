<?php

Class Data_pd extends CI_Controller{
	
    public function __construct()
    {
        parent::__construct();
        // load Kamus
        $this->load->model('wecan_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
	{
		$data['penggalang_dana'] = $this->wecan_model->get_data('penggalang_dana')->result();
        $this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_pd',$data);
		$this->load->view('template_admin/footer');
	}

	public function update_pd($id){
		$where = array('id_pd' => $id);
		$data['penggalang_dana'] = $this->db->query("SELECT * FROM penggalang_dana WHERE id_pd ='$id'")->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_update_pd',$data);
		$this->load->view('template_admin/footer');

	}

	public function update_pd_aksi(){
		$this->_rules();
		if($this->form_validation->run()==FALSE){
			$data['penggalang_dana'] = $this->db->query("SELECT * FROM penggalang_dana WHERE id_pd ='$id'")->result();
		}else{
			$id 				= $this->input->post('id_pd');
			$is_active				= $this->input->post('is_active');

			$data = array (
				'is_active' => $is_active,
			);
			$where = array(
				'id_pd' => $id
			);

			$this->wecan_model->update_data('penggalang_dana',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Penggalang Dana berhasil Diupdate
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('admin/data_pd');
		}

	}

    public function detail_pd($id)
	{

		$data['detail'] = $this->wecan_model->ambil_id_pd($id);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/detail_pd',$data);
		$this->load->view('template_admin/footer');
	}

	public function _rules(){
		$this->form_validation->set_rules('is_active','Is_active','required');
	}
}

?>