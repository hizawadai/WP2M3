<!DOCTYPE html>
<html>
	<head>
		<title>Data Seluruh Users</title>
	</head>
	<body>
		<h2>Menampilkan Data User</h2>
		<a href="<?= base_url('user/add'); ?>">Tambah User</a>
        <a href="<?=base_url('logout');?>">Logout</a>
        
		<table border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Email</td>
				<td colspan="2"><center>Aksi</center></td>
			</tr>
			<?php
			foreach ($users->result() as $i => $user)
			{
				?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $user->nama; ?></td>
					<td><?= $user->email; ?></td>	
					<td><a href="<?= base_url('user/edit/'.$user->id); ?>">Ubah</a></td>
					<td><a href="<?= base_url('user/delete/'.$user->id); ?>">Hapus</a></td>
				</tr>
				<?php
			}?>
		</table>
	</body>
</html>
