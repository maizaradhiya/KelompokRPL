<div class="container">
	
	<div class="card" style ="margin-top :100px; margin-bottom: 50px">
		<div class="card-header">
			Form Input Donasi
		</div>

		<div class="card-body">
			<?php foreach($detail as $dt) : ?>
				<form method="POST" action="<?php echo base_url('donatur/input_donasi/tambah_donasi_aksi') ?>" enctype="multipart/form-data">
					<div class="d-flex justify-content-center">
                        <img src="<?php  echo base_url().'assets/upload/'.$dt->buktiEvent ?>" width="550 px" height="320px">
					</div>
                    <div class="col d-flex justify-content-center">
                    <table class="table" width="500">
                    <tr align="center">
						<td><h1><?php echo $dt->namaEvent ?></h1></td>
					</tr>
                    <tr align="left">
						<td><h5>Target: <?php echo $dt->targetDonasi ?></h5></td>
					</tr>
                    <tr align="center">
						<td><?php echo $dt->deskripsiEvent ?></td>
					</tr>
                    <tr align="center">
                        <td><img src="<?php  echo base_url().'assets/img/fotoktp/'.$dt->foto_ktp ?>" width="50 px" height="50px"><?php echo $dt->nama_lengkap ?></td>
					</tr>
                    <?php 
         				if($dt->status == "0"){
                            echo "<span class='badge badge-danger'>Belum Terverifikasi</span>";
                        } else {
                            echo "<span class='badge badge-primary'>Identitas Terverifikasi</span>";
                        }
                    ?>
                    </table>
                    <div class="form-group">
						<label>Input Donasi</label>
                        <input type="hidden" name="id_event" value="<?php echo $dt->id_event ?>">
                        <input type="hidden" name="id_pd" value="<?php echo $dt->id_pd ?>">
                        <input type="hidden" name="namaEvent" value="<?php echo $dt->namaEvent ?>">
						<input type="text" name="nominalDonasi" class="form-control">
					</div>

                    <button type="submit" class="btn btn-warning">Donasi Sekarang!</button>
        </div>

			<?php endforeach;?>
		</div>
	</div>

    <!-- <div class="card" style ="margin-top :100px; margin-bottom: 50px">
     <div class="card-header">
	 		Masukan Nominal Donasi
	 </div>
     <div class="card-body">
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
             <label class="form-check-label" for="flexRadioDefault1">
                 Rp. 10.000
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Rp. 20.000
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Rp. 50.000
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <input type="text" name="other_reason" />
         </div>
     </div>
     <hr></hr>
     <div class="card-body">
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Ini nanti gopay
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Ini nanti OVO
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Ini nanti Link Aja!
             </label>
         </div>
         <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
             Ini nanti DANA
             </label>
         </div>
         <button type="submit" class="btn btn-warning">Submit</button>
	 			</form>
     </div>
     </div> -->
</div>