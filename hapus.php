<?php
//memulai proses hapus data
 
//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id'];
	

	$cek = $koneksi->query("SELECT id FROM mahasiswa WHERE id='$id'") or die(mysql_error());
	
	if(mysqli_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = $koneksi -> query("DELETE FROM mahasiswa WHERE id='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data berhasil di hapus! ';		
			echo '<a href="index.php">Kembali</a>';
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="index.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>