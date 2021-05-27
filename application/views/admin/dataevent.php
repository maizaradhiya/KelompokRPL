<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Event</h1>
          </div>
         </section>

         <?php echo $this->session->flashdata('pesan') ?>

         <table class="table table-hover table-striped table-borderd">
         	<thead>
         		<tr>
	         		<th>Bukti Event</th>
	         		<th>Id</th>
	         		<th>Nama Event</th>
	         		<th>Durasi Event</th>
	         		<th>Target Donasi</th>
	         		<th>Deskripsi Event</th>
	         		<th>Status</th>
	         		<th></th>
	         		<th></th>
	         		<th></th>
         		</tr>
         	</thead>
         	<tbody>
         		<?php
         			foreach($event as $ev):  ?>
         				<tr>
         					<td>
         						<img width="60px" src="<?php echo base_url().'assets/upload/'.$ev->buktiEvent ?>">
         					</td> 
	         				<td><?php echo $ev->id_event ?></td>
	         				<td><?php echo $ev->namaEvent ?></td>
	         				<td><?php echo $ev->durasiEvent ?></td>
	         				<td><?php echo $ev->targetDonasi ?></td>
	         				<td><?php echo $ev->deskripsiEvent ?></td>
	         				<td><?php 
	         					if ($ev->status=="0"){
	         						echo "<span class='badge badge-danger'> Belum Terverifikasi </span>";
	         					} else {
	         						echo "<span class='badge badge-success'> Terverifikasi </span>";
	         					}

	         				 ?></td>
	         				<td>
	         					<a href="<?php echo base_url('admin/dataevent/detail_event/').$ev->id_event?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
	         				</td>
	         				<td>
	         					<a href="<?php echo base_url('admin/dataevent/delete_event/').$ev->id_event?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
	         				</td>
	         				<td>
	         					<a href="<?php echo base_url('admin/dataevent/update_event/').$ev->id_event?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
	         				</td>
         				</tr>
         		<?php endforeach; ?>
         	</tbody>
         	
         </table>
</div>