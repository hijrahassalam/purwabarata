<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Agenda</h1>
      </div>

      <?php
      // arahkan form submit ke kontroller 'kabim/insert' 
      echo form_open_multipart('agenda/insert'); 
      ?>

          <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">ID Panitia</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="id_panitia" placeholder="Masukkan ID Panitia">
              </div>
          </div>

          <div class="form-group row">
              <label for="penerbit" class="col-sm-2 col-form-label">Judul Agenda</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="judul_agenda" placeholder="Masukkan Judul Agenda">
              </div>
          </div>

          <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="tanggal_agenda" placeholder="Masukkan Tanggal Agenda">
              </div>
          </div>

		  <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Subtitle</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="subtitle" placeholder="Masukkan Subtitle (notification)">
              </div>
          </div>

		  
		  <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan">
              </div>
          </div>

		  
		  <div class="form-group row">
              <label for="thnterbit" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="status_agenda" placeholder="Masukkan Fakultas Manggala">
              </div>
          </div>


          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Manggala</button>      
              </div>
          </div>

          
      </form>

    </main>
  