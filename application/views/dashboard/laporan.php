<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan</h1>
      </div>
      <?php
      // arahkan form submit ke kontroller 'book/insert' 
      echo form_open_multipart('book/insert'); 
      ?>

          <div class="form-group row" style="text-align:center;">
			  <label for="judul" class="col-sm-4 col-form-label">Agenda</label>
			  <label for="judul" class="col-sm-4 col-form-label">Fakultas</label>
			  <label for="judul" class="col-sm-4 col-form-label">Program Studi</label>
          </div>

          <div class="form-group row">
              <div class="col-sm-4">
				  <select class="form-control" name="idkategori">
				  </select>
			  </div>
			  <div class="col-sm-4">
				  <select class="form-control" name="idkategori"></select>
			  </div>
			  <div class="col-sm-4">
				  <select class="form-control" name="idkategori"></select>
			  </div>
		  </div>
		  
          <div class="form-group row">
              <div class="col-sm-4">
              </div>
              <div class="col-sm-4" style="text-align:center;">
                  <button type="submit" class="btn btn-primary mb-2">Cetak Laporan</button>      
			  </div>
			  <div class="col-sm-4">
              </div>
          </div>
      </form>

    </main>
  