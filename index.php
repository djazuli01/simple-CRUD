<!DOCTYPE html>
<html>
    <head>
        <title>My University</title>
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
         <div class="wrapper">
            <header>
              <h1></h1>
                <nav>
                    <ul>
                        <li><a href="index.php">BERANDA</a></li>
                        <li><a href="add.php">DAFTAR</a></li>
                        <li><a href="">PENELITIAN</a></li>
                        <li><a href="">ALUMNI</a></li>
                        <li><a href="">TENTANG</a></li>
                    </ul>
                </nav>
            </header>
            <section class="courses">
                <article>
                    
<table style="margin-top:30px; margin-left:30px;" cellpadding="5" border="1" cellspacing="0">

    <thead>
        
         <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th> 
         </tr>

    </thead>
  <tbody>

    <?php
        //iclude file koneksi ke database
        include('koneksi.php');
$query = $koneksi->query("SELECT * FROM mahasiswa ORDER BY nama") or die(mysql_error());
        if(mysqli_num_rows($query) == 0){    
            
            //jika data kosong, maka akan menampilkan row kosong
            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            
        }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
            
            //jika data tidak kosong, maka akan melakukan perulangan while
            $no = 1;    //membuat variabel $no untuk membuat nomor urut
            while($data = mysqli_fetch_assoc($query)){   //perulangan while dg membuat variabel $data yang akan mengambil data di database
                
                //menampilkan row dengan data di database
                echo '<tr >';
                    echo '<td >'.$no.'</td>';   
                    echo '<td>'.$data['nama'].'</td>';    
                    echo '<td>'.$data['jurusan'].'</td>'; 
                     echo '<td>'.$data['alamat'].'</td>';    
                    echo '<td>'.$data['jenis_kelamin'].'</td>'; 
                    echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> | <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
                echo '</tr>';
                
                $no++;  //menambah jumlah nomor urut setiap row
                
            }
            
        }
        ?>
   
</tbody>
<tfoot>
    <tr>
   <th></th>
    <th></th>
    <th></th>
    <th></th>
     <th></th>
    <td> <a href="add.php">Tambah Data</a></td>
</tr>
</tfoot>
</table>
                    
               
            </section>
           
           
        </div><!-- .wrapper -->
    </body>
</html>