<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "audi_tes_koneksi";

$koneksi = mysqli_connect($host, $username, $password, $database);
// mysql_select_db($database, $koneksi);

//cek koneksi
// if ($koneksi) {
//     echo "Berhasil Terhubung";
// } else {
//     echo "Gagal Terhubung";
// }
if (mysqli_connect_errno()) {
    echo "Gagal Terhubung: " . mysqli_connect_error();
} else {
    echo "Berhasil Terhubung";
}
