<?php 

/*membuat kelas model dengan memanggil CI model*/
class Wecan_model extends CI_model{ 
	/* membuat fungsi untuk mengambil data dari database dengan parameter $table yg datanya ingin diambil */
	public function get_data($table){ 
		/* mengembalikan hasil query */
		return $this->db->get($table);
	}
	/* membuat fungsi untuk memasukkan data dari database dengan parameter $table yang datanya ingin diambil, $data merupakan data array yang ingin diinput */
	public function insert_data($data,$table){
		/* memasukkan data ke databasee */
		$this->db->insert($table,$data);
	}
	/* membuat fungsi untuk mengubah data dari database dengan parameter $table yang datanya ingin diambil, $data merupakan data array yang ingin diinput, 
	$where merupakan data mana yang akan diupdate*/
	public function update_data($table,$data,$where){
		/* mengubah data ke database */
		$this->db->update($table,$data,$where);
	}

	/* membuat fungsi untuk menghapus data dari database dengan parameter $table yang datanya ingin diambil, $where merupakan data mana yang akan dihapus */
	public function delete_event($where,$table){
		/* mencari data sesuai kriteria */
		$this->db->where($where);
		/* menghapus data pada tabel*/
		$this->db->delete($table);
	}
	/* membuat fungsi untuk mengambil data event sesuai id dalam database*/
	public function ambil_id_event($id){
		/* menyimpan data event dengan id yang ditentukan */
		$hasil = $this->db->where('id_event', $id)->get('event');
		/* jika $hasil lebih dari 0, */
		if($hasil->num_rows() > 0){
			/*mengembalikan nilai result pada variabel $hasil */
			return $hasil->result();
		/* jika $hasil kurang dari 0, */
		} else {
			/* mengembalikan nilai false*/
			return false;
		}
	}
	/* membuat fungsi untuk mengambil data penggalang dana sesuai id dalam database*/
	public function ambil_id_pd($id){
		/* menyimpan data penggalang dana dengan id yang ditentukan */
		$hasil = $this->db->where('id_pd', $id)->get('penggalang_dana');
		/* jika $hasil lebih dari 0, */
		if($hasil->num_rows() > 0){
			/*mengembalikan nilai result pada variabel $hasil */
			return $hasil->result();
		/* jika $hasil kurang dari 0, */
		} else {
			/* mengembalikan nilai false*/
			return false;
		}
	}
}

 ?>
