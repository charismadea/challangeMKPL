<?php
REQUIRE_ONCE('koneksi.php');

$judul=$_POST['judul'];
$isi=$_POST['isi'];
$tgl=$_POST['tgl'];
$jam=$_POST['jam'];
$img=$_POST['img'];
$kategori=$_POST['kategori'];
$url_web=$_POST['url_web'];

$QUERY = MYSQLI_QUERY($conn,"INSERT INTO info VALUES('$judul','$isi','$tgl','$jam','$img','$kategori','$url_web')");

MYSQLI_CLOSE($conn);
?>