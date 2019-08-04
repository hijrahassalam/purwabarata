<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mahasiswa Baru - ID <?php echo $maru['ID_PESERTA']; ?></h1>
      </div>

      <?php
      // arahkan form submit ke kontroller 'maru/insert' 
      echo form_open_multipart('maru/update'); 
      ?>
	<!-- GET THE ID FROM HIDDEN INPUT -->
		<input type="hidden" class="form-control" name="id_maru" placeholder="Masukkan ID Mahasiswa Baru" value="<?php echo $maru['ID_PESERTA'];?>">
	<!-- GET THE NIM FROM HIDDEN INPUT -->		  
        <input type="hidden" class="form-control" name="nim_maru" placeholder="Masukkan NIM Mahasiswa Baru" value="<?php echo $maru['NIM_PESERTA'];?>">

		  <div class="form-group row" style="text-align:center;">
		  <!-- <img src="<?php // echo base_url().'assets/images/'.$imgfile;?>"> -->
          </div>

          <div class="form-group row">
              <div class="col-sm-2">
			  </div>
			  <div class="col-sm-2">
				  <label for="penerbit" class="form-control form-group row">NIM</label>
				  <label for="penerbit" class="form-control form-group row">Nama</label>
				  <label for="penerbit" class="form-control form-group row">Prodi</label>
				  <label for="penerbit" class="form-control form-group row">Fakultas</label>
				  <label for="penerbit" class="form-control form-group row">Nama Group</label>
			  </div>
			  <div class="col-sm-8">
			  	<input type="text" class="form-control form-group row" name="nim_maru" value="<?php echo $maru['NIM_PESERTA'];?>" disabled>
				  <input type="text" class="form-control form-group row" name="nama_maru" value="<?php echo $maru['NAMA_PESERTA'];?>" disabled>
				  <input type="text" class="form-control form-group row" name="prodi_maru" value="<?php echo $maru['PRODI_PESERTA'];?>" disabled>
				  <input type="text" class="form-control form-group row" name="fakultas_maru" value="<?php echo $maru['FAKULTAS_PESERTA'];?>" disabled> 
				  <input type="text" class="form-control form-group row" name="group_maru" value="<?php echo $maru['ID_GROUP'];?>" disabled>
				</div>
          </div>

      </form>

    </main>
  