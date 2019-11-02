<?php

if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysqli_query($konek,"SELECT id_user FROM tb_user WHERE id_user='$id'") or die(mysql_error());
	
	if(mysqli_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	} else {
		$del = mysqli_query($konek,"DELETE FROM tb_user WHERE id_user='$id'");
		
		if($del){
			
            echo 'Data berhasil di hapus! ';		
            echo '<a href="lihat_user.php">lihat Data User</a>';
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="soal7.php">Kembali</a>';	
		
		}
		
	}
	
}else{

	echo '<script>window.history.back()</script>';
	
}
?>