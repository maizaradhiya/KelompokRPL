<?php 

class Riwayat_event extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        // load Kamus
        $this->load->model('wecan_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

	public function index(){
		$data['donasi'] = $this->wecan_model->get_data('donasi')->result();

		$this->load->view('navbar/view_header_pd');
		$this->load->view('template_pd/header');
		$this->load->view('penggalang_dana/riwayat_event',$data);
		$this->load->view('template_pd/footer');
	}
}

 ?>