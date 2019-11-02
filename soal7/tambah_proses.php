

<?php

if(isset($_POST['tambah'])){
	include('koneksi.php');
	
	$nama		= $_POST['nama'];
	$email		= $_POST['email'];	
	$role		= $_POST['role'];	
	
	
	$qr="INSERT INTO tb_user (nama,email,role) VALUES('$nama', '$email', '$role')";
	$input = mysqli_query($konek,$qr);

	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
        echo '<a href="tambah.php">Tambah Data</a>';	
        echo '<a href="lihat_user.php">lihat Data User</a>';	
        
		
	}else{
		
		echo 'Gagal menambahkan data! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}
 
}else{	
 
	echo '<script>window.history.back()</script>';
 
}
?>