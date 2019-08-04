<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Group</h1>
      </div>

      <?php
	  // arahkan form submit ke kontroller 'group/update' 
      echo form_open_multipart('group/update'); 

      ?>
    <!-- GET THE ID WITH HIDDEN INPUT -->
          <div class="form-group row">
              <div class="col-sm-10">
                  <input type="hidden" class="form-control" name="id_group" value="<?php echo $group['ID_GROUP']?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Nama Group</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_group" placeholder="Masukkan Nama Group" 
                  value= "<?php echo $group['NAMA_GROUP'];?>"
                  >
              </div>
          </div>

          <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">Deskripsi Group</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="desc_group" placeholder="Masukkan Deskripsi Group"
                  value= "<?php echo $group['DESC_GROUP'];?>"
                  >
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Group</button>      
              </div>
          </div>          
      </form>

</main>
  