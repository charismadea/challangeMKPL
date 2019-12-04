<?php
REQUIRE_ONCE('koneksi.php');
$QUERY = MYSQLI_QUERY($conn,
"SELECT * FROM info"
);
$array = array();
while($ROW = MYSQLI_FETCH_ASSOC($QUERY)){
$info = new stdClass;
$info-> judul = $ROW['judul'];
$info-> isi = $ROW['isi'];
$info-> tgl = $ROW['tgl'];
$info-> jam = $ROW['jam'];
$info-> img = $ROW['img'];
$info-> kategori = $ROW['kategori'];
$info-> url_web = $ROW['url_web'];
array_push($array, $info);
}

header('Content-Type:application/json;charset=utf-8');
ECHO JSON_ENCODE($array);
MYSQLI_CLOSE($conn);
?>