<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Event</h1>
          </div>

          <div class="card">
          	<div class="card-body">

          		
                    <form method="POST" action="<?php echo base_url('admin/dataevent/tambah_event_aksi')?>" enctype="multipart/form-data">

          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Nama Event</label>
          					<input type="text" name="namaEvent" class="form-control">
          					<?php echo form_error('namaEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Durasi Event</label>
          					<input type="text" name="durasiEvent" class="form-control">
          					<?php echo form_error('durasiEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Target Donasi</label>
          					<input type="text" name="targetDonasi" class="form-control">
          					<?php echo form_error('targetDonasi','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Gambar Event</label>
          					<input type="file" name="gambarEvent" class="form-control">
          				</div>

          			</div>
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Deskripsi Event</label>
          					<input type="text" name="deskripsiEvent" class="form-control">
          					<?php echo form_error('deskripsiEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Bukti Event</label>
          					<input type="text" name="buktiEvent" class="form-control">
          					<?php echo form_error('buktiEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Status</label>
          					<select name="status" class="form-control">
          						<option value="">--Pilih Status--</option>
          						<option value="1">Verifikasi</option>
          						<option value="0">Tidak Terverifikasi</option>
          					</select>
          					<?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<button type="submit" class="btn btn-primary mt-4">Simpan</button>
          				<button type="reset" class="btn btn-danger mt-4">Reset</button>
          			</div>	
          		</div>
          		</form>
          	</div>
          </div>

         </section>
</div>