<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Mahasiswa Baru</h1>
      </div>

      <?php
      // arahkan form submit ke kontroller 'maru/insert' 
      echo form_open_multipart('maru/update'); 
      ?>
	<!-- GET THE ID FROM HIDDEN INPUT -->
          <div class="form-group row">
              <div class="col-sm-10">
                  <input type="hidden" class="form-control" name="id_maru" placeholder="Masukkan ID Mahasiswa Baru" value="<?php echo $maru['ID_PESERTA'];?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nim_maru" placeholder="Masukkan NIM Mahasiswa Baru" value="<?php echo $maru['NIM_PESERTA'];?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="penerbit" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_maru" placeholder="Masukkan nama Mahasiswa Baru" value="<?php echo $maru['NAMA_PESERTA'];?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Prodi</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="prodi_maru" placeholder="Masukkan Prodi Mahasiswa Baru" value="<?php echo $maru['PRODI_PESERTA'];?>">
              </div>
          </div>

		  <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Fakultas</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="fakultas_maru" placeholder="Masukkan fakultas Mahasiswa Baru" value="<?php echo $maru['FAKULTAS_PESERTA'];?>">
              </div>
          </div>

          <div class="form-group row">
              <label for="imgcover" class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                  <input type="file" class="form-control-file" name="imgcover">
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Mahasiswa Baru</button>      
              </div>
          </div>

      </form>

    </main>
  