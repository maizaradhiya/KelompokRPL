<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Event</h1>
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
         							<td><?php echo $dt->durasiEvent ?></td>
         						</tr>

         						<tr>
         							<td>Target Donasi</td>
         							<td><?php echo $dt->targetDonasi ?></td>
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
												 echo "<span class='badge badge-danger'>Belum Terverifikasi</span>";
											} else {
												echo "<span class='badge badge-success'>Terverifikasi</span>";
         									}
         								  ?>
         							</td>
         						</tr>
         					</table>
         					<a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/dataevent') ?>">Kembali</a>
         					<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataevent/update_event/'.$dt->id_event) ?>">Update Event</a>

         				</div>
         			</div>
         		</div>
         	</div>

         <?php endforeach; ?>       
</div>