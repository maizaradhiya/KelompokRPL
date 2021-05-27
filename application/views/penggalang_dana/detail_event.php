<div class="main-content mt-5 ml-5">
        <section class="section">
          <div class="section-header">
		  	<h1 class="display-4 ml-3">Detail Event</h1>
          </div>
         </section>


         <?php foreach($detail as $dt):  ?>
         	<div class="car">
         		<div class="card-body">
         			<div class="row">
         				<div class="col-md-6">
         					<img src="<?php  echo base_url().'assets/upload/'.$dt->buktiEvent ?>" width="550 px" height="320px">
         				</div>
         				<div class="col-md-5">
         					<table class="table">
         						<tr>
         							<td>Nama Event</td>
         							<td><?php echo $dt->namaEvent ?></td>
         						</tr>

         						<tr>
         							<td>Durasi Event</td>
         							<td><?php echo $dt->durasiEvent ?> hari</td>
         						</tr>

         						<tr>
         							<td>Target Donasi</td>
         							<td>Rp. <?php echo $dt->targetDonasi ?></td>
         						</tr>

         						<tr>
         							<td>Deskripsi Event</td>
         							<td><?php echo $dt->deskripsiEvent ?></td>
         						</tr>

         						<tr>
         							<td>Status</td>
         							<td>
         								<?php 
         									if($dt->status == "0"){
         										echo "<span class='badge badge-danger'> Belum Terverifikasi </span>";
         									} else {
         										echo "<span class='badge badge-primary'> Terverifikasi </span>";
         									}
         								  ?>
         							</td>
         						</tr>
         					</table>
         					<a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('penggalang_dana/dataevent') ?>">Kembali</a>
							<?php if ($dt->status==0): ?>
         						<a class="btn btn-sm btn-primary" href="<?php echo base_url('penggalang_dana/dataevent/update_event/'.$dt->id_event) ?>">Update Event</a>
							<?php endif; ?>
         				</div>
         			</div>
         		</div>
         	</div>

         <?php endforeach; ?>       
</div>