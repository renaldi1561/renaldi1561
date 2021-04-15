<?php
require("19753058_koneksi.php");

$hub = open_connection();
if ($hub) {
	echo "Koneksi SUKSES";
} 
else {
	echo "KONEKSI GAGAL";
}

mysqli_close($hub);
?>