<?php include_once('header.php'); ?>
	<div class = "container">
		<br></br>
		<h2>Tabel Karyawan</h2>
		<?php if ($msg = $this->session->flashdata('msg')): ?>
			echo $msg;
	<?php endif; ?>
		<?php echo anchor('welcome/create','Add Record' ,['class' => 'btn btn-primary']); ?>
		<br></br>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">ID Karyawan</th>
		      <th scope="col">Nama Karyawan</th>
		      <th scope="col">Golongan</th>
		      <th scope="col">Tanggal Lahir</th>
					<th scope="col">Alamat</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Status</th>
					<th scope="col">Jabatan</th>
					<th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php if(count($posts)):?>
				<?php foreach ($posts as $post): ?>
		    <tr>
		      <td><?php echo $post ->id_karyawan;?></td>
		      <td><?php echo $post ->nama_karyawan;?></td>
		      <td><?php echo $post ->golongan;?></td>
		      <td><?php echo $post ->tgl_lahir;?></td>
					<td><?php echo $post ->alamat;?></td>
					<td><?php echo $post ->jenis_kelamin;?></td>
					<td><?php echo $post ->status;?></td>
					<td><?php echo $post ->jabatan;?></td>
					<td>
						<?php echo anchor('welcome/view/','View' ,['class' => 'btn btn-info btn-sm']); ?>
						<?php echo anchor('welcome/update','Update' ,['class' => 'btn btn-success btn-sm']); ?>
						<?php echo anchor('welcome/delete','Delete' ,['class' => 'btn btn-danger btn-sm']); ?>
					</td>
		    </tr>
				<?php endforeach;?>
			<?php else: ?>
					<tr>
						<td>No Record Found!</td>
					</tr>
			<?php endif; ?>
		  </tbody>
		</table>
	</div>

<?php include_once('footer.php'); ?>
