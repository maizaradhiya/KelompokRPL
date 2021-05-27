<div class="main-content mt-5 ml-5">
        <section class="section">
          <div class="section-header">
            <h1>Data Event</h1>
          </div>
         </section>

         <!-- <a href="<?php echo base_url('admin/dataevent/tambah_event')?>" class="btn btn-primary mb-3">Tambah Data</a> -->
         <?php echo $this->session->flashdata('pesan') ?>

		<div class="row">
         		<?php foreach($event as $ev) if ($ev->status == 1): ?>
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
         					<img class="card-img-top" src="<?php echo base_url().'assets/upload/'.$ev->buktiEvent ?>">
         					  <div class="card-body">
							    <h4 class="card-title">
	         				      <a><?php echo $ev->namaEvent ?></a>
							    </h4>
								<p><?php echo $ev->deskripsiEvent ?></p>
								<p><b>Target Donasi</b> Rp.<?php echo $ev->targetDonasi ?></p>
								<p><b>Durasi Event </b><?php echo $ev->durasiEvent ?> hari</p>
	         				  </div>
							<div class="card-footer"> 
							 <?php if ($ev->status=="0"){
	         						echo "<span class='badge badge-danger'> Belum Terverifikasi </span>";
	         					} else {
	         						echo "<span class='badge badge-primary'> Terverifikasi </span>";
	         					}
							 ?>
	         					<a href="<?php echo base_url('donatur/dataevent/detail_event/').$ev->id_event?>" class="btn btn-sm btn-info" style="float: right">Lihat Detail</a>	
							</div>
						</div>
					</div>
					<?php endif; ?>
		</div>
</div>


