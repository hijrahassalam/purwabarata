<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<form method="post" action="<?php echo site_url('kabim/findKabim'); 
// arahkan form submit ke kontroller 'kabim/findKabim ?>">
<input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
</form>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Daftar Manggala</h1>
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
		foreach ($kabim as $kabim_item): 

		?>
		<tr>
		  <td><?php echo $kabim_item['NIM_KABIM']?></td>
		  <td><?php echo $kabim_item['NAMA_KABIM']?></td>
		  <td><?php echo $kabim_item['PRODI_KABIM']?></td>
		<td><?php echo $kabim_item['FAKULTAS_KABIM']?></td>
		  <td>
			 <?php echo anchor('kabim/edit/'.$kabim_item['ID_KABIM'], 'Edit', 'Edit Manggala') ?> 
			| <?php echo anchor('kabim/delete/'.$kabim_item['ID_KABIM'], 'Del', 'Hapus Manggala'); ?></td>
		</tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
	Total Manggala : <?php echo $jumlahdata ?>
	<?php echo $this->pagination->create_links(); ?>
  </div>
</main>
