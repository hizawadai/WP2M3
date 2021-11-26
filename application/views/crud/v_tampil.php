<!DOCTYPE html>
<html>
<head>
	<title>Create Read Update Delete Form buku-test</title>
</head>
<body>
	<center><h1>Create Read Update Delete Form buku-test</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>id</th>
			<th>Judul Buku</th>
			<th>Penulis Buku</th>
			<th>Halaman Buku</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($buku_test as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->Judulbuku ?></td>
			<td><?php echo $u->Penulisbuku ?></td>
			<td><?php echo $u->Halamanbuku ?></td>
			<td>
				<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>