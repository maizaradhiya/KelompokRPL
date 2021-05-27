<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Customer</h1>
          </div>
         </section>
         <?php foreach($penggalang_dana as $pd): ?>
          <form method="POST" action="<?php echo base_url('admin/data_pd/update_pd_aksi') ?>">
               <input type="hidden" name="id_pd" value="<?php echo $pd->id_pd ?>">

               <div class="form-group">
               					<label>Verifikasi</label>

               					<select name="is_active" class="form-control">
               						<option <?php if($pd->is_active == "1"){echo "selected='selected'";}
                                             echo $pd->is_active; ?> value="1" >Verifikasi</option>
               						<option <?php if($pd->is_active == "0"){echo "selected='selected'";}
                                             echo $pd->is_active; ?> value="0" >Tidak Terverifikasi</option>
               					</select>
               					<?php echo form_error('is_active','<div class="text-small text-danger">','</div>')?>
               				</div>

         	<button type="submit" class="btn btn-sm btn-primary" >Submit</button>
         	<button type="reset" class="btn btn-sm btn-danger" >Reset</button>
         	
         </form>
         <?php endforeach; ?>
</div>