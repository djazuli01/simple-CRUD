<!DOCTYPE html>
<html>
    <head>
        <title>My University</title>
        <style type="text/css">
            header, section, footer, aside, nav, article, figure, figcaption{
                display: block;}
            body {
                color: #666666;
                background-color: #000000;
                background-image: url("images/white_bg.png");
                background-position: center;
                font-family: Georgia, Times, serif;
                line-height: 1.4em;
                margin: 0px;}
            .wrapper {
                width: 1400px;
                margin: 0px auto 0px auto;
                border: 0px solid #000000;
                background-color: #ffffff;}
            header {
                height: 160px;
                background-image: url(images/header.png);}
        
            h1 {
                text-indent: -9999px;
                width: 940px;
                height: 100px;
                margin: 0px;}
            nav, footer {
                background-image: url(images/header2.png);
                clear: both;
                color: #ffffff;
                background-color: #aeaca8;
                margin-top: 0px;
                height: 30px;}
            nav ul {
                margin: 0px;
                padding: 5px 0px 10px 30px;}
            nav li {
                display: inline;
                margin-right: 40px;}
            nav li a {
                color: #ffffff;}
            nav li a:hover, nav li a.current {
                color: #000000;}
            section.courses {
                float: left;
                width: 659px;
                border-right: 1px solid #eeeeee;}
            article {
                clear: both;
                overflow: auto;
                width: 100%;}
            hgroup {
                margin-top: 40px;}
            figure {
                float: left;
                width: 290px;
                height: 220px;
                padding: 5px;
                margin: 20px;
                border: 1px solid #eeeeee;}
            figcaption {
                font-size: 90%;
                text-align: left;}
            aside {
                width: 230px;
                float: left;
                padding: 0px 0px 0px 20px;}
            aside section a {
                display: block;
                padding: 10px;
                border-bottom: 1px solid #eeeeee;}
            aside section a:hover {
                color: #985d6a;
                background-color: #efefef;}
            a {
                color: #de6581;
                text-decoration: none;}
            h1, h2, h3 {
                font-weight: normal;}
            h2 {
                margin: 10px 0px 5px 0px;
                padding: 0px;}
            h3 {
                margin: 0px 0px 10px 0px;
                color: #de6581;}
            aside h2 {
                padding: 30px 0px 10px 0px;
                color: #de6581;}
            footer {
                font-size: 80%;
                 margin: 0px auto 0px auto;
                padding: 7px 0px 10px 0px;}
        </style>
    </head>
    <body>
        <div class="wrapper">
            <header>
                
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