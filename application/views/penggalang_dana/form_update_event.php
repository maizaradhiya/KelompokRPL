<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Data Event</h1>
          </div>

          <div class="card">
          	<div class="card-body">
                    <?php foreach($event as $ev) : ?>
               		<form method="POST" action="<?php echo base_url('penggalang_dana/dataevent/update_event_aksi')?>" enctype="multipart/form-data">

               		<div class="row">
               			<div class="col-md-6">
               				<div class="form-group">
               					<label>Nama Event</label>
                                        <input type="hidden" name="id_event" value="<?php echo $ev->id_event ?>">
               					<input type="text" name="namaEvent" class="form-control" value="<?php echo $ev->namaEvent ?>">
               					<?php echo form_error('nnamaEvent','<div class="text-small text-danger">','</div>')?>
               				</div>

               				<div class="form-group">
               					<label>Durasi Event</label>
               					<input type="text" name="durasiEvent" class="form-control" value="<?php echo $ev->durasiEvent ?>">
               					<?php echo form_error('durasiEvent','<div class="text-small text-danger">','</div>')?>
               				</div>

               				<div class="form-group">
               					<label>Target Donasi</label>
               					<input type="text" name="targetDonasi" class="form-control" value="<?php echo $ev->targetDonasi ?>">
               					<?php echo form_error('targetDonasi','<div class="text-small text-danger">','</div>')?>
               				</div>

               			</div>
               			<div class="col-md-6">
               				<div class="form-group">
               					<label>Deskripsi Event</label>
               					<input type="text" name="deskripsiEvent" class="form-control" value="<?php echo $ev->deskripsiEvent ?>" >
               					<?php echo form_error('deskripsiEvent','<div class="text-small text-danger">','</div>')?>
               				</div>

							<div class="form-group">
          						<label>Bukti Event</label>
          						<input type="file" name="buktiEvent" class="form-control">
          					</div>

               				<button type="submit" class="btn btn-primary mt-4">Simpan</button>
               				<button type="reset" class="btn btn-danger mt-4">Reset</button>
               			</div>	
               		</div>
               		</form>

                    <?php endforeach; ?>
          	</div>
          </div>

         </section>
</div>