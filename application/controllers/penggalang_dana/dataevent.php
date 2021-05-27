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
		$data['penggalang_dana'] = $this->session->userdata('id_pd');
		$this->load->view('navbar/view_header_pd');
		$this->load->view('template_pd/header');
		$this->load->view('penggalang_dana/dataevent',$data);
		$this->load->view('template_pd/footer');
	}

	public function tambah_event()
	{
		$data['event'] = $this->wecan_model->get_data('event')->result();
		$this->load->view('navbar/view_header_pd');
		$this->load->view('template_pd/header');
		$this->load->view('penggalang_dana/form_tambah_event',$data);
		$this->load->view('template_pd/footer');
	}


	public function tambah_event_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_event();
		}else{
			$id_pd 					=$this->session->userdata('id_pd');
			$nama_lengkap 			=$this->session->userdata('nama_lengkap');
			$foto_ktp 				=$this->session->userdata('foto_ktp');
			$namaEvent				= $this->input->Post('namaEvent');
			$durasiEvent			= $this->input->Post('durasiEvent');
			$targetDonasi			= $this->input->Post('targetDonasi');
			$deskripsiEvent			= $this->input->Post('deskripsiEvent');

			$buktiEvent						= $_FILES['buktiEvent']['name'];
			if($buktiEvent=''){}else{
				$config ['upload_path']		= './assets/upload/';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('buktiEvent')){
					echo "gambar gagal di upload";
				}else{
					$buktiEvent=$this->upload->data('file_name');
				}
			}

			$data=array(
				'id_pd'				=> $id_pd,
				'nama_lengkap'		=> $nama_lengkap,
				'foto_ktp'			=> $foto_ktp,
				'namaEvent'			=> $namaEvent,
				'durasiEvent'		=> $durasiEvent,
				'targetDonasi'		=> $targetDonasi,
				'deskripsiEvent'	=> $deskripsiEvent,
				'buktiEvent'		=> $buktiEvent,
				'status'			=> '0'
			);

			$this->wecan_model->insert_data($data, 'event');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Event berhasil Ditambahkan
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('penggalang_dana/dataevent'); 
		}
	}

	public function update_event($id)
	{
		$where = array('id_event' => $id);
		$data['event'] = $this->db->query("SELECT * FROM event ev WHERE ev.id_event = '$id'")->result();
		$data['event'] = $this->wecan_model->get_data('event')->result();

		$this->load->view('navbar/view_header_pd');
		$this->load->view('template_pd/header');
		$this->load->view('penggalang_dana/form_update_event',$data);
		$this->load->view('template_pd/footer');
	}

	public function update_event_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE)
		{
			$data['event'] = $this->wecan_model->get_data('event')->result();
		}else{
			$id 						= $this->input->post('id_event');
			$namaEvent				= $this->input->Post('namaEvent');
			$durasiEvent					= $this->input->Post('durasiEvent');
			$targetDonasi						= $this->input->Post('targetDonasi');
			$deskripsiEvent						= $this->input->Post('deskripsiEvent');

			$buktiEvent						= $_FILES['buktiEvent']['name'];
			if($buktiEvent){
				$config ['upload_path']		= './assets/upload/';
				$config ['allowed_types']	= 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
			 if($this->upload->do_upload('buktiEvent')){
					$buktiEvent=$this->upload->data('file_name');
					$this->db->set('buktiEvent', $buktiEvent);
				} else {
					echo $this->upload->display_error();
				}
			
			}

			$data=array(
				'namaEvent'		=> $namaEvent,
				'durasiEvent'			=> $durasiEvent,
				'targetDonasi'					=> $targetDonasi,
				'deskripsiEvent'					=> $deskripsiEvent
			);

			$where = array(
				'id_event' => $id
			);

			$this->wecan_model->update_data('event', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Event berhasil Diupdate
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('penggalang_dana/dataevent'); 
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('namaEvent','Nama Event','required');
		$this->form_validation->set_rules('targetDonasi','Target Donasi','required');
		$this->form_validation->set_rules('deskripsiEvent','Deskripsi Event','required');
	}

	public function detail_event($id)
	{

		$data['detail'] = $this->wecan_model->ambil_id_event($id);
		$this->load->view('navbar/view_header_pd');
		$this->load->view('template_pd/header');
		$this->load->view('penggalang_dana/detail_event',$data);
		$this->load->view('template_pd/footer');
	}

	public function delete_event($id)
	{
		$where = array('id_event' => $id);
		$this->wecan_model->delete_event($where, 'event');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Data Event berhasil Dihapus
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('penggalang_dana/dataevent'); 	}
}

?>