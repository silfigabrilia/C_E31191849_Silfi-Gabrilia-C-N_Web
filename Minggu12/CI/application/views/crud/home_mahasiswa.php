<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
	<h6 class="m-0 fint-weight-bold text-primary">Welcome <?php echo $getUser?></h6>&nbsp;
	<h6 class="m-0 fint-weight-bold text-primary">Data Tables User</h6>
	</div>
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
		?>
		<tr><td><?php echo $no++ ?></td>
			<td><?php echo $baris -> username; ?></td>
			<td><?php echo $baris -> grup; ?></td>
			<td><?php 
				if ($getGrup==1) {
					echo '<a href="'.base_url('index.php/Mahasiswa/edit/'.$baris->id).'"class="fa fa-edit"></a>';
					echo " ";
					echo '<a href="'.base_url('index.php/Mahasiswa/hapus/'.$baris->id).'"class="fa fa-times">';
				
				}
				?>
			</td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
		<a href="<?php echo base_url('index.php/Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split">
		<span class="text">Tambah Data</span>
		</a>
</div></div></div>