<div class="container">
	
	<div class="card" style ="margin-top :50px; margin-bottom: 50px">
		<div class="card-header">
			Form Input Donasi
		</div>

    <div class="row">

			<?php foreach($detail as $dt) : ?>
				<form method="POST" action="<?php echo base_url('donatur/input_donasi/tambah_donasi_aksi') ?>" enctype="multipart/form-data">
                    <!-- <div class="col-lg-6 col-md-2 mb-4"> -->
                    <div class="col">
                      <div class="card h-100">	
                        <img class="card-img-top" src="<?php  echo base_url().'assets/upload/'.$dt->buktiEvent ?>" width="550 px" height="320px">
                          <div class="card-body">
                            <h4 class="card-title">
                                <a><h1><?php echo $dt->namaEvent ?></h1></a>
                            </h4>
                            <p><?php echo $dt->deskripsiEvent ?></p>
                            <p><b>Target Donasi</b> Rp.<?php echo $dt->targetDonasi ?></p>

                            <img src="<?php  echo base_url().'assets/img/fotoktp/'.$dt->foto_ktp ?>" width="50 px" height="50px"><?php echo $dt->nama_lengkap ?>
                            
                                <?php 
                                if($dt->status == "0"){
                                    echo "<span class='badge badge-danger'>Belum Terverifikasi</span>";
                                } else {
                                    echo "<span class='badge badge-primary'>Identitas Terverifikasi</span>";
                                }
                                ?>
                            <br></br>
                            <div class="card-footer">
                                    <div class="form-group">
						                <label>Input Donasi</label>
                                        <input type="hidden" name="id_event" value="<?php echo $dt->id_event ?>">
                                        <input type="hidden" name="id_pd" value="<?php echo $dt->id_pd ?>">
                                        <input type="hidden" name="namaEvent" value="<?php echo $dt->namaEvent ?>">
						                <input type="text" name="nominalDonasi" class="form-control">
					                </div>

                                    <button type="submit" class="btn btn-warning" style="float: center">Donasi Sekarang!</button>
                            </div>
                          </div>
                      </div>
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
