<!DOCTYPE html>
<html>
    <head>
        <title>My University</title>
         <link href="./style.css" type="text/css" rel="stylesheet">
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
        </br>
  
    <h3>Daftar Baru</h3>
       </br>
    
    <form action="add-process.php" method="post">
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
                <td><input type="submit" name="daftar" value="Daftar"></td>
            </tr>
        </table>
    </form>
</body>
</html>

