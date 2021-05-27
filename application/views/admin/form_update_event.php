<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Event</h1>
          </div>
         </section>
         <?php foreach($event as $ev): ?>
          <form method="POST" action="<?php echo base_url('admin/dataevent/update_event_aksi') ?>">
               <input type="hidden" name="id_event" value="<?php echo $ev->id_event ?>">

               <div class="form-group">
               					<label>Verifikasi Event</label>

               					<select name="status" class="form-control">
               						<option <?php if($ev->status == "1"){echo "selected='selected'";}
                                             echo $ev->status; ?> value="1" >Verifikasi</option>
               						<option <?php if($ev->status == "0"){echo "selected='selected'";}
                                             echo $ev->status; ?> value="0" >Tidak Terverifikasi</option>
               					</select>
               					<?php echo form_error('status','<div class="text-small text-danger">','</div>')?>
               				</div>

         	<button type="submit" class="btn btn-sm btn-primary" >Submit</button>
         	<button type="reset" class="btn btn-sm btn-danger" >Reset</button>
         	
         </form>
         <?php endforeach; ?>
</div>