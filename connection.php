<?php
//server = localhost, username = root, password = 123456, database = mercu_buana
$connection = new mysqli("localhost", "root", "123456", "mercu_buana");
if ($connection->connect_errno) {
    echo "Gagal melakukan koneksi ke database: " . $connection->connect_error;
}
?>