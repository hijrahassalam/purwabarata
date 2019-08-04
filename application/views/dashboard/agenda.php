<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

<form method="post" action="<?php echo site_url('agenda/findAgenda'); // arahkan form submit ke kontroller 'agenda/findagenda' ?>">
<input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
</form>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Daftar Agenda</h1>
  </div>

  <div class="table-responsive">
	<table class="table table-striped table-sm">
	  <thead>
		<tr>
		  <th>JUDUL AGENDA</th>
		  <th>TANGGAL</th>
		  <th>SUBTITLE</th>
		  <th>KETERANGAN</th>
		  <th>STATUS</th>
		  <th>ACTION</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		// menampilkan data buku
		foreach ($agenda as $agenda_item): 

		?>
		<tr>
		  <td><?php echo $agenda_item['JUDUL_AGENDA']?></td>
		  <td><?php echo $agenda_item['TANGGAL_AGENDA']?></td>
		  <td><?php echo $agenda_item['SUBTITLE']?></td>
		  <td><?php echo $agenda_item['KETERANGAN']?></td>
		  <td><?php echo $agenda_item['STATUS_AGENDA']?></td>
		  <td>
		   <?php echo anchor('agenda/edit/'.$agenda_item['ID_AGENDA'], 'Edit', 'Edit Agenda') ?> 
			| <?php echo anchor('agenda/delete/'.$agenda_item['ID_AGENDA'], 'Del', 'Hapus Agenda'); ?></td>
		</tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
	Total Agenda : <?php echo $jumlahdata ?>
	<?php echo $this->pagination->create_links(); ?>
   
  </div>
</main>
