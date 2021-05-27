<div class="main-content mt-5 ml-5">
        <section class="section">
          <div class="section-header">
            <h1>Data Event</h1>
          </div>
         </section>

         <a href="<?php echo base_url('penggalang_dana/dataevent/tambah_event')?>" class="btn btn-primary mb-3">+ Tambah Event</a>
         <?php echo $this->session->flashdata('pesan') ?>

		<div class="row">
         
         		<?php foreach($event as $ev) if ($ev->id_pd == $this->session->userdata('id_pd')): ?>
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
	         				<?php 
	         					if ($ev->status=="0"){
	         						echo "<span class='badge badge-danger'> Belum Terverifikasi </span>";
	         					} else {
	         						echo "<span class='badge badge-primary'> Terverifikasi </span>";
	         					}
							    ?>
	         					<a href="<?php echo base_url('penggalang_dana/dataevent/delete_event/').$ev->id_event?>" class="btn btn-sm btn-danger ml-5" style="float: right"><i class="fas fa-trash"></i></a>
	         					<a href="<?php echo base_url('penggalang_dana/dataevent/detail_event/').$ev->id_event?>" class="btn btn-sm btn-info" style="float: right">Lihat Detail</a>

							    <?php if ($ev->status==0): ?>
	         					<a href="<?php echo base_url('penggalang_dana/dataevent/update_event/').$ev->id_event?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
							    <?php endif; ?>
							</div>
					  </div>
					</div>
				<?php endif; ?>
		</div>
</div>