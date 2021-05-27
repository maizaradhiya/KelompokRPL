<div class="container">
	<div class="card mx-auto" style="margin-top: 100px; width: 80%">
		<div class="card-header">
			Data Donasi Anda
		</div>
		<div class="card-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Nama Event</th>
					<th>Total Donasi</th>
					<!-- <th>Aksi</th> -->
				</tr>

				<?php $no=1; foreach($donasi as $dn) if ($dn->id_donatur == $this->session->userdata('id_donatur')): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $dn->namaEvent ?></td>
					<td>Rp. <?php echo $dn->nominalDonasi ?></td>
					<!-- <td>
						<?php if($tr->status_rental == "Selesai") { ?>
							<button class="btn bnt-sm btn-danger">Rental Selesai</button>
						<?php }else{?>
							<a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_pemesanan) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
						<?php } ?>
					</td> -->
				</tr>
				<?php endif; ?>
			</table>
		</div>
	</div>
</div>