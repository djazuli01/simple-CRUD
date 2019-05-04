<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa Baru</title>
</head>
<body>

	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	
	
	$show = $koneksi->query("SELECT * FROM mahasiswa WHERE id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysqli_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysqli_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
		
			 <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
           
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" size="30" required></td>
            </tr>

             <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="30" required></td>
            </tr>

             <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
               <td>
                    <select name="jenis_kelamin" required>
            
                        <option>Laki - laki</option>
                        <option>Perempuan</option>
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