<?php

if(isset($_POST['simpan'])){
	

	include('koneksi.php');
	
	$id=$_POST['id'];
	$nama	= $_POST['nama'];	
	$email	= $_POST['email'];
	$role	= $_POST['role'];		
	$update = mysqli_query($konek,"UPDATE tb_user SET  nama='$nama', email='$email',role='$role' WHERE id_user='$id'") or die(mysql_error());
	if($update){	
        echo 'Data berhasil di Update! ';		
        echo '<a href="tambah.php">Tambah Data</a>';	
        echo '<a href="lihat_user.php">lihat Data User</a>';		
	}else{	
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';		
	}
}else{	
 
	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';
 
}
?>