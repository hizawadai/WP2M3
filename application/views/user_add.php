<!DOCTYPE html>
<html>
	<head>
		<title>Membuat Form Tambah User</title>
	</head>
	<body>
		<center>
			<h2>Form Tambah Data User</h2>
			<form method="post" action="<?= base_url('user/save'); ?>">
				<table border="1">
					<tr>
						<td>Email</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="kirim" value="Masukkan Data"></td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
