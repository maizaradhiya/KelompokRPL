<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Penggalang Dana</h1>
          </div>
         </section>


         <?php foreach($detail as $dt):  ?>
         	<div class="car">
         		<div class="card-body">
         			<div class="row">
         				<div class="col-md-6">
         					<img src="<?php  echo base_url().'assets/img/fotoktp/'.$dt->foto_ktp ?>" width="550 px" height="550px">
         				</div>
         				<div class="col-md-5">
         					<table class="table">
         						<tr>
         							<td>Username</td>
         							<td><?php echo $dt->username ?></td>
         						</tr>

         						<tr>
         							<td>Nama Lengkap</td>
         							<td><?php echo $dt->nama_lengkap ?></td>
         						</tr>

         						<tr>
         							<td>Nomor Ponsel</td>
         							<td><?php echo $dt->nomor_ponsel ?></td>
         						</tr>

         						<tr>
         							<td>Email</td>
         							<td><?php echo $dt->email ?></td>
         						</tr>

         						<tr>
         							<td>Nomor KTP</td>
         							<td><?php echo $dt->nomor_ktp ?></td>
         						</tr>

         						<tr>
         							<td>Verifikasi</td>
         							<td>
         								<?php 
         									if($dt->is_active == "0"){
                                                 echo "<span class='badge badge-danger'>Belum Terverifikasi</span>";
                                            } else {
         										echo "<span class='badge badge-success'>Terverifikasi</span>";
         									}
         								  ?>
         							</td>
         						</tr>
         					</table>
         					<a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_pd') ?>">Kembali</a>
         					<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_pd/update_pd/'.$dt->id_pd) ?>">Update Penggalang Dana</a>

         				</div>
         			</div>
         		</div>
         	</div>

         <?php endforeach; ?>       
</div>