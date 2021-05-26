<?php

/* membuat kelas dataevent dengan memanggil ke CI Controller*/
Class Dataevent extends CI_Controller{
	/* membuat fungsi construct */
	public function __construct()
    {
				/* memmbuat fungsi construct yang ada di parent */
        parent::__construct();
        /* memanggil wecan_model yang terdapat pada model */
        $this->load->model('wecan_model');
				/* memanggil validasi form yang terdapat pada library */
        $this->load->library('form_validation');
				/* memanggil helper form url */
        $this->load->helper(array('form', 'url'));
    }
	/* membuat fungsi public yang akan langsung berjalan pada saat controller dataevent dipanggil */
	public function index()
	{
		/* membuat var event yang di get melalui model database pada tabel event*/
		$data['event'] = $this->wecan_model->get_data('event')->result()
		/* menampilkan navbar dari view */
		$this->load->view('navbar/view_header_donatur');
		/* menampilkan header dari view */
		$this->load->view('template_donatur/header');
		/* menampilkan data donatur dari view */
		$this->load->view('donatur/dataevent',$data);
		/* menampilkan footer dari view */
		$this->load->view('template_donatur/footer');
	}
	/* membuat fungsi public detail event yang memiliki parameter id */
	public function detail_event($id)
	{
		/* membuat var detail yang melakukan pengambilan id menggunakan model wecan_model*/
		$data['detail'] = $this->wecan_model->ambil_id_event($id);
		/* menampilkan navbar dari view */
		$this->load->view('navbar/view_header_donatur');
		/* menampilkan header dari view */
		$this->load->view('template_donatur/header');
		/* menampilkan data donatur dari view */
		$this->load->view('donatur/detail_event',$data);
		/* menampilkan footer dari view */
		$this->load->view('template_donatur/footer');
	}

}

?>