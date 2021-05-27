<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Penggalang Dana</h1>
          </div>
         </section>

         <?php echo $this->session->flashdata('pesan') ?>

         <table class="table table-hover table-striped table-borderd">
         <thead>
         	<tr>
         		<th>No</th>
         		<th>Username</th>
         		<th>Nama Lengkap</th>
         		<th>Nomor Ponsel</th>
         		<th>Email</th>
         		<th>Nomor KTP</th>
         		<th>Foto KTP</th>
         		<th>Verifikasi</th>
				<th></th>
	         	<th></th>
	         	<th></th>
         		
         	</tr>
         </thead>
         <tbody>
         	 <?php foreach ($penggalang_dana as $pd): ?>
         			<tr>
         				<td><?php echo $pd->id_pd ?></td>
         				<td><?php echo $pd->username ?></td>
         				<td><?php echo $pd->nama_lengkap ?></td>
         				<td><?php echo $pd->nomor_ponsel ?></td>
         				<td><?php echo $pd->email ?></td>
         				<td><?php echo $pd->nomor_ktp ?></td>
         				<td><img src="<?php  echo base_url().'assets/img/fotoktp/'.$pd->foto_ktp ?>" width="100 px" height="100px"></td>
         				<td><?php 
         									if($pd->is_active == "0"){
                                                 echo "<span class='badge badge-danger'>Belum Terverifikasi</span>";
                                            } else {
         										echo "<span class='badge badge-success'>Terverifikasi</span>";
         									}
         								  ?></td>
         				<td>
         					<!-- <a href="<?php echo base_url('admin/data_customer/delete_customer/').$pd->id_pd ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
         				</td>
                        <td>
	         				<a href="<?php echo base_url('admin/data_pd/detail_pd/').$pd->id_pd?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
	         					
	         			</td>
         				<td>
         					<a href="<?php echo base_url('admin/data_pd/update_pd/').$pd->id_pd ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
         				</td>
         			</tr>

         	<?php endforeach; ?> 
         </tbody>
         </table>