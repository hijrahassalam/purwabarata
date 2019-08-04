 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<form method="post" action="<?php echo site_url('user/finduser'); // arahkan form submit ke kontroller 'user/finduser ?>">
<input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
</form>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Daftar Panitia (Admin)</h1>
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
				// menampilkan data panitia
				foreach ($user as $user_item): 
				?>
				<tr>
					<td><?php echo $user_item['NIM_PANITIA']?></td>
					<td><?php echo $user_item['NAMA_PANITIA']?></td>
					<td><?php echo $user_item['PRODI_PANITIA']?></td>
					<td><?php echo $user_item['FAKULTAS_PANITIA']?></td>
					<td>
						 <?php echo anchor('user/edit/'.$user_item['ID_PANITIA'], 'Edit', 'Panitia (Admin)') ?> 
						| <?php echo anchor('user/delete/'.$user_item['ID_PANITIA'], 'Del', 'Hapus Panitia (Admin)'); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		Total Panitia (Admin): <?php echo $jumlahdata ?>
		<?php echo $this->pagination->create_links(); ?>
	 
	</div>
</main>
