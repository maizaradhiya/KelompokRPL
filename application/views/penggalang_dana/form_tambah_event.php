<div class="main-content">
        <section class="section">
          <div class="section-header mt-5">
            <h1>Tambah Data Event</h1>
          </div>

          <div class="card">
          	<div class="card-body">

          		
                    <form method="POST" action="<?php echo base_url('penggalang_dana/dataevent/tambah_event_aksi')?>" enctype="multipart/form-data">

          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Nama Event</label>
          					<input type="text" name="namaEvent" class="form-control">
          					<?php echo form_error('namaEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Mulai Event</label>
          					<input type="date" name="mulaiEvent" id="mulaiEvent" min="<?php echo date('Y-m-d');?>" class="form-control">
          					<?php echo form_error('mulaiEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Akhir Event</label>
          					<input type="date" name="akhirEvent" id="akhirEvent" min="<?php echo date('Y-m-d');?>" class="form-control">
          					<?php echo form_error('akhirEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

          				<div class="form-group">
          					<label>Durasi Event <b>(Hari)</b></label>
          					<input type="text" name="durasiEvent" id="durasiEvent" class="form-control" readonly>
          				</div>
						

          			</div>
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Target Donasi</label>
          					<input type="text" name="targetDonasi" class="form-control">
          					<?php echo form_error('targetDonasi','<div class="text-small text-danger">','</div>')?>
          				</div>
						  
          				<div class="form-group">
          					<label>Deskripsi Event</label>
          					<input type="text" name="deskripsiEvent" class="form-control">
          					<?php echo form_error('deskripsiEvent','<div class="text-small text-danger">','</div>')?>
          				</div>

						<div class="form-group">
          					<label>Bukti Event</label>
          					<input type="file" name="buktiEvent" class="form-control">
          					<?php echo form_error('buktiEvent','<div class="text-small text-danger">','</div>')?>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">

	$('#mulaiEvent').on('change', function(){
		mulaiEvent = $(this).val();
		$('#akhirEvent').prop('min', function(){
			return mulaiEvent;
		});
	});
	
	$('#akhirEvent').on('change', function(){
		$('#durasiEvent').prop('value', function(){
			var pesan = new Date($("#mulaiEvent").val());
        	var kembali = new Date($("#akhirEvent").val());
			var diff = Math.abs(kembali.getTime() - pesan.getTime());
        	var hari = Math.ceil(diff / (1000 * 3600 * 24));
			return hari;
		});
	});

</script>