<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<form method="post" action="<?php echo site_url('group/findgroup'); // arahkan form submit ke kontroller 'group/findgroup ?>">
<input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
</form>

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Daftar Group</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>Nama Group</th>
					<th>Deskripsi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				// menampilkan data panitia
				foreach ($group as $group_item): 
				?>
				<tr>
					<td><?php echo $group_item['NAMA_GROUP']?></td>
					<td><?php echo $group_item['DESC_GROUP']?></td>
					<td>
					 <?php echo anchor('group/edit/'.$group_item['ID_GROUP'], 'Edit', 'Edit Group') ?> 
						| <?php echo anchor('group/delete/'.$group_item['ID_GROUP'], 'Del', 'Hapus Group'); ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		Total Group Mahasiswa : <?php echo $jumlahdata ?>
		<?php echo $this->pagination->create_links(); ?>
	 
	</div>
</main>
