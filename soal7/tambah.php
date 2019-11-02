<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	<p><a href="soal7.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Data User</h3>
	
	<form action="tambah_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" size="30" required></td>
			</tr>
			
			<tr>
				<td>Role</td>
				<td>:</td>
				<td>
					<select name="role" required>
						<option value="">Pilih Role</option>
						<option value="Editor">Editor</option>
						<option value="Admin">Admin</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>