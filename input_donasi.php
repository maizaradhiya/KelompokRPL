<?php 

/*membuat kelas input doneasi dengan memanggil CI controller*/
Class Input_donasi extends CI_Controller{
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
	/* membuat fungsi public tambah donasi yang memiliki parameter id */
	public function tambah_donasi($id)
	{
		/* membuat var detail yang melakukan pengambilan id menggunakan model wecan_model*/
		$data['detail'] = $this->wecan_model->ambil_id_event($id);
		/* menampilkan navbar dari view */
		$this->load->view('navbar/view_header_donatur');
		/* menampilkan header dari view */
		$this->load->view('template_donatur/header');
		/* menampilkan data donatur dari view */
		$this->load->view('donatur/tambah_donasi',$data);
		/* menampilkan footer dari view */
		$this->load->view('template_donatur/footer');
	}
	/* membuat fungsi public untuk menambah aksi donasi */
	public function tambah_donasi_aksi()
	{
		/* masukkan data yang diinputkan ke dalam variabel */
		$id_donatur			=$this->session->userdata('id_donatur');
		$username			=$this->session->userdata('username');
		$id_event			=$this->input->post('id_event');
		$id_pd				=$this->input->post('id_pd');
		$namaEvent			=$this->input->post('namaEvent');
		$nominalDonasi		=$this->input->post('nominalDonasi');

		/*mengambil data untuk memasukan ke tabel database*/
		$data=array(
			'id_donatur'				=>$id_donatur,
			'username'					=>$username,
			'id_event'					=>$id_event,
			'id_pd'						=>$id_pd,
			'namaEvent'					=>$namaEvent,
			'nominalDonasi'				=>$nominalDonasi
		);

		/*masukan ke tabel database*/
		$this->wecan_model->insert_data($data,'donasi');

		/*menampilkan pesan notifikasi jika transaksi berhasil*/
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Transaksi Berhasil!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			/* kembali ke fungsi dataevent yang berada pada folder donatur */
			redirect('donatur/dataevent');
	}
}
?>