<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_coment');
		$this->load->model('wecan_model');
	}

	public function viewhome_donatur()
	{
		$data['nama_aplikasi'] = "WeCan";
		$data['nama_menu'] = "HOME";
		$data['coment'] = $this->M_coment->getAllcoment();
		$this->load->view('navbar/view_header_donatur', $data);
		$this->load->view('template_donatur/header', $data);
		$this->load->view('view_home', $data);
		$this->load->view('template_donatur/footer', $data);
	}

	public function viewhome_pd()
	{
		$data['nama_aplikasi'] = "WeCan";
		$data['nama_menu'] = "HOME";
		$data['coment'] = $this->M_coment->getAllcoment();
		$this->load->view('navbar/view_header_pd', $data);
		$this->load->view('template_pd/header', $data);
		$this->load->view('view_home', $data);
		$this->load->view('template_pd/footer', $data);
	}
	
	public function viewhome_admin()
	{
		$data['event'] = $this->wecan_model->get_data('event')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/dataevent',$data);
		$this->load->view('template_admin/footer');
	}
	
	public function pilih_register()
	{
		$data['nama_aplikasi'] = "WeCan";
		$data['nama_menu'] = "Register";
		$this->load->view('navbar/view_headerr', $data);
		$this->load->view('template_landing/auth_header', $data);
		$this->load->view('pilih_register', $data);
		$this->load->view('template_landing/auth_footer', $data);
	}
	
	public function pilih_login()
	{
		$data['nama_aplikasi'] = "WeCan";
		$data['nama_menu'] = "Login";
		$this->load->view('navbar/view_headerr', $data);
		$this->load->view('template_landing/auth_header', $data);
		$this->load->view('pilih_login', $data);
		$this->load->view('template_landing/auth_footer', $data);
	}



	// ----------------------------------------------------------------

	public function AddComent()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"coment" => $this->input->post('coment', true),
		];
		$this->M_coment->addComent($data);
		redirect('coment');
	}

	// JSON AJAX
	public function ajaxBy($id)
	{
		$coment = $this->db->get_where('coment', ['id' => $id]);
		$coment = json_encode($id->row());
		echo $coment;
	}

	public function deleteComent($id)
	{
		$this->M_coment->deleteComent($id);
		redirect('coment');
	}

	public function updateComent($id)
	{
		$update = [
			"id" => $id,
			"name" => $this->input->post('name', true),
			"coment" => $this->input->post('coment', true),
		];
		$this->M_coment->updateComent($id, $update);
		redirect('coment');
	}

	// ----------------------------------------------------------------

	public function viewabout()
	{
		$data['nama_aplikasi'] = "WeCan";
		$data['nama_menu'] = "ABOUT";
		$this->load->view('navbar/view_headerr', $data);
		$this->load->view('view_about', $data);
		// $this->load->view('template_about/footer', $data);
	}

}
