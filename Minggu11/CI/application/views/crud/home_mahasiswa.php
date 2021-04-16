<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 fint-weight-bold text-primary">Data Tables User</h6></div>
	<div class="card-body"><div class="table-responsive">
		<table class="table table-bordered" id="dataTabe" width="100%" cellspacing="0">
		<thead>
		<tr><th>No</th>
			<th>Username</th>
			<th>Grup</th>
			<th></th></tr>
		</thead>
		<tfoot>
		<tr><th>No</th>
			<th>Username</th>
			<th>Grup</th>
			<th></th></tr>
		</tfoot>
		<tbody>
		<?php $no = 1;
			  foreach($user as $baris){
				// <!--deklarasi $no dimulai dari 1 dan membuat perulangan $user dari controller diubah menjadi $baris,
				// agar dapat memanggil kumpulan data pada databse-->
		?>
		<tr><td><?php echo $no++ ?></td>
			<td><?php echo $baris -> username; ?></td>
			<!-- untuk menampilkan kumpulan  data username-->
			<td><?php echo $baris -> grup; ?></td>
			<!-- untuk menampilkan kumpulan data grup-->
			<td></td></tr>
		<?php } ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('index.php/Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
		<!-- berfungsi untuk mengarahkan tombol ke function tambah pada controller Mahasiswa-->
		<span class="text">Tambah Data</span>
		</a>
</div></div></div>
