<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="soal7.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data User</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>id_user</th>
			<th>Nama </th>
			<th>email</th>
			<th>role/th>
			<th>Opsi</th>
		</tr>
		
		<?php
		include('koneksi.php');
		
		$query = mysqli_query($konek,"SELECT * FROM tb_user ORDER BY id_user") or die(mysql_error());
		if(mysqli_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{
			
		
			$no = 1;
			while($data = mysqli_fetch_assoc($query)){	
				echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['id_user'].'</td>';	
					echo '<td>'.$data['nama'].'</td>';	
					echo '<td>'.$data['email'].'</td>';	
					echo '<td>'.$data['role'].'</td>';	
                    echo '<td><a href="edit.php?id='.$data['id_user'].'">Edit</a> / <a href="hapus.php?id='.$data['id_user'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                    echo '</tr>';
				
				$no++;	
				
			}
			
		}
		?>
	</table>
</body>
</html>