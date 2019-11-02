<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	
	<p><a href="soal7.php">Beranda</a> / <a href="edit.php">Edit Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	
	include('koneksi.php');
	
	$id = $_GET['id'];
	$show = mysqli_query($konek,"SELECT * FROM tb_user WHERE id_user='$id'");
	if(mysqli_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_assoc($show);
	}
	?>
	
	<form action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table cellpadding="3" cellspacing="0">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td> <!-- value diambil dari hasil query -->
            </tr>
            <tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" size="30" value="<?php echo $data['email']; ?>" required></td> <!-- value diambil dari hasil query -->
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
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>