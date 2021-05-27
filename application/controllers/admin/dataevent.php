<?php

Class Dataevent extends CI_Controller{
	
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
		$data['event'] = $this->wecan_model->get_data('event')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dataevent',$data);
		$this->load->view('template_admin/footer');
	}

	public function update_event($id)
	{
		$where = array('id_event' => $id);
		$data['event'] = $this->db->query("SELECT * FROM event ev WHERE ev.id_event = '$id'")->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/form_update_event',$data);
		$this->load->view('template_admin/footer');
	}

	public function update_event_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$data['event'] = $this->db->query("SELECT * FROM event ev WHERE ev.id_event = '$id'")->result();
		}else{
			$id 						= $this->input->post('id_event');
			$status						= $this->input->post('status');

			$data=array(
				'status'				=> $status
			);

			$where = array(
				'id_event' => $id
			);

			$this->wecan_model->update_data('event', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Event berhasil Diupdate
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('admin/dataevent'); 
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('status','Status','required');
	}

	public function detail_event($id)
	{

		$data['detail'] = $this->wecan_model->ambil_id_event($id);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/detail_event',$data);
		$this->load->view('template_admin/footer');
	}

	public function delete_event($id)
	{
		$where = array('id_event' => $id);
		$this->wecan_model->delete_event($where, 'event');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Event berhasil Dihapus
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('admin/dataevent'); 	}
}

?>