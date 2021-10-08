<!DOCTYPE html>
<html>
	<head>
		<title>Form Login untuk User</title>
	</head>
	<body>
		<?php
		if($this->session->flashdata('error'))
		{
			echo $this->session->flashdata('error');
		}?>
		<form method="post" action="<?= base_url('login/process'); ?>">
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
		</form>
	</body>
</html>
