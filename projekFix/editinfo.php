<?php
REQUIRE('koneksi.php');
 
if(isset($_GET["edit_info"])){
		$isi = $_GET['isi'];
		$judul1 = $_GET['judul'];
		//get the user id by username
		
		$query = "Select judul FROM info where judul= '$judul1'";
		$order = mysqli_query($conn, $query);
		$result = mysqli_fetch_array($order);
		$judul = $result['judul'];

		$query2 = "update info set isi = '$isi' where judul = '$judul'";
		$query2 = "update info set isi = '$isi' where judul = '$judul'";
				$hasil=mysqli_query($conn, $query2);
				if ($hasil) {
					header('location: index.php');
				}
		if (mysqli_query($conn, $sql)) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
}

MYSQLI_CLOSE($conn);
?>