
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <form method="post" action="<?php echo site_url('maru/findmaru'); // arahkan form submit ke kontroller 'maru/findmaru ?>">
    <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
    </form>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Mahasiswa Baru</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>NIM</th>
              <th>Nama</th>
              <th>Prodi</th>
              <th>Fakultas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($maru as $maru_item): 

            ?>
            <tr>
              <td><?php echo $maru_item['NIM_PESERTA']?></td>
              <td><?php echo $maru_item['NAMA_PESERTA']?></td>
              <td><?php echo $maru_item['PRODI_PESERTA']?></td>
							<td><?php echo $maru_item['FAKULTAS_PESERTA']?></td>
              <td>
                <?php echo anchor('maru/view/'.$maru_item['ID_PESERTA'], 'View', 'View Maru')?> 
                | <?php echo anchor('maru/edit/'.$maru_item['ID_PESERTA'], 'Edit', 'Edit Maru') ?> 
                | <?php echo anchor('maru/delete/'.$maru_item['ID_PESERTA'], 'Del', 'Hapus Maru'); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        Total Mahasiswa : <?php echo $jumlahdata ?>
        <?php echo $this->pagination->create_links(); ?>
       
      </div>
    </main>
  