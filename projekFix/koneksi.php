<?php
define('HOST','localhost');
define('USER','root'); //sesuaikan nama user
define('PASS',''); //sesuaiakan nama password
define('DB','news');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
if($conn == true){
	//echo "koneksi sukses\n";		
}
else{
	//echo "koneksi gagal";
}
date_default_timezone_set("Asia/Jakarta");
?>