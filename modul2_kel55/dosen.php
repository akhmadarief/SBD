<?php

include("koneksi.php");

session_start();
if($_SESSION['status']!="login"){
	header("location: login.php?pesan=belum_login");
}

include "koneksi.php";
if (isset($_GET['cari'])){
	$cari = $_GET['cari'];
	if($cari==""){
		header('location: dosen.php');
	}
	$query = "SELECT * FROM dosen WHERE nama LIKE '%".$cari."%'";
}else{
	$query = "SELECT * FROM dosen";
}
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum SBD Modul 2</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='javascript' src="assets/js/bootstrap.min.js"></script>
</head>

<body style="background-color : #fafafa;"> <br><br>
    <header class="main-header">
        <center>
            <h1 class="blog-title">CRUD Sederhana dengan PHP dan MYSQL</h1>
        </center>
        <center>
            <h4 class="blog-title">Praktikum Sistem Basis Data 2019</h4>
        </center>
        <center>
        		<p><a href='logout.php'><button type='button' class='btn btn-danger'><span class='glyphiconglyphicon-plus-sign'></span> Logout</button></a></p>
        </center>
    </header><br><br>
    <!-- Membuat navbar di sebelah kirihalaman -->
    <div class="col-md-2" align="left">
        <ul class="nav" id="main-menu">
            <br>
            <li>
                <a href="mahasiswa.php"><i class="fa fa-user fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a class="active-menu" href="dosen.php"><i class="fa	fa-user	fa-2x"></i>Dosen</a>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
        <p><a href='tambah_dosen.php'><button type='button' class='btn	btn-primary'><span class='glyphiconglyphicon-plus-sign'></span> Add Dosen</button></a></p>
				<form action="dosen.php" method="GET">
				<div class="container col-md-2" style="padding:0;">
        <input type="text" class="form-control" style="border-radius: 4px 0px 0px 4px;" name="cari" placeholder="Cari nama di sini ..." value="<?php if (isset($_GET['cari'])){echo $_GET['cari'];}?>">
				<?php if(!isset($_GET['cari'])){echo "<p></p>";}?>
				</div>
        <button type='submit' class='btn btn-primary' style="border-radius: 0px 4px 4px 0px; height: 34px;"></span>Cari</button>
				</form>
				<div class="row">
            <div class="col-md-12">
                <table class="tabletable-striped table-bordered">
                    <thead>
                        <!-- Judul kolom -->
                        <?php
                        if($result->num_rows == 0){
                          echo "<p>Tidak ditemukan hasil pencarian untuk <b>$cari</b></p>";
                        }else{
													if(isset($_GET['cari'])){
														$cari=$_GET['cari'];
														echo "<p>Hasil pencarian untuk <b>$cari</b></p>";
													}
                          ?>
	                        <tr>
	                            <th>NIDN</th>
	                            <th>Nama</th>
	                            <th>Alamat</th>
	                            <th>Email</th>
	                            <th>Opsi</th>
	                        </tr>
                        <?php
                        }
                      ?>
                    </thead>
                    <tbody>
                        <!--  fungsi  select  padaphp taruh disini-->
                        <?php
                        if($result->num_rows > 0){
	                        while ($row = mysqli_fetch_array($result)) {
	                        	?>
	                          <tr>
	                              <td><?php echo $row['nidn']; ?></td>
	                              <td><?php echo $row['nama']; ?></td>
	                              <td><?php echo $row['alamat']; ?></td>
	                              <td><?php echo $row['email']; ?></td>
	                              <td><a href='edit_dosen.php?id=<?php echo $row['id_dosen']; ?>' class='btn btn-success'>
	                                      <span class='glyphicon glyphicon-edit'></span>Edit</button></a>
	                                  <a href='hapus_dosen.php?id=<?php echo $row['id_dosen']; ?>' class='btn btn-danger'>
	                                      <span class='glyphicon glyphicon-remove-sign'>Delete</button></a></td>
	                          </tr>
                        	<?php
													}
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
