<?php

include("koneksi.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$doswal = $_POST['doswal'];

$query = mysqli_query($connect, "INSERT INTO dosen SET nim='$nim', nama='$nama', alamat='$alamat', jeniskelamin='$jk', id_dosen='$doswal'")
or die(mysqli_error($connect));

if ($query){
	header('location: dosen.php');
}
else{
	echo mysqli_error($connect);
}

?>