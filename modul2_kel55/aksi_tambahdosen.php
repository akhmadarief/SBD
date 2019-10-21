<?php

include("koneksi.php");

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$query = mysqli_query($connect, "INSERT INTO dosen SET nidn='$nidn', nama='$nama', alamat='$alamat', email='$email'")
or die(mysqli_error($connect));

if ($query){
	header('location: dosen.php');
}
else{
	echo mysqli_error($connect);
}

?>
