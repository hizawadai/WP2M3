<!DOCTYPE html>
<html>
<head>
	<title>Create Read Update Delete Form buku-test</title>
</head>
<body>
	<center>
		<h1> CRUD Form</h1>
		<h3>Edit Buku</h3>
	</center>
	<?php foreach($buku_test as $u){ ?>
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Judul Buku</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="Judulbuku" value="<?php echo $u->Judulbuku ?>">
				</td>
			</tr>
			<tr>
				<td>Penulis Buku</td>
				<td><input type="text" name="Penulisbuku" value="<?php echo $u->Penulisbuku ?>"></td>
			</tr>
			<tr>
				<td>Halaman Buku</td>
				<td><input type="text" name="Halamanbuku" value="<?php echo $u->Halamanbuku ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>