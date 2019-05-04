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
                margin-top: 30px;
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
                color: #000000;}
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

