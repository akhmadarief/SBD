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
    </header><br><br>
    <!-- Membuat navbar di sebelah kirihalaman -->
    <div class="col-md-2" align="left">
        <ul class="nav" id="main-menu">
            <br>
            <li>
                <a href="mahasiswa.php"><i class="fa fa-user fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a href="dosen.php"><i class="fa fa-user fa-2x"></i>Dosen</a>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
		<div class="row">
            <div class="col-md-12">
                <table class="tabletable-striped table-bordered">
                    <thead>
                        <!-- Judul kolom -->
                        <tr>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Nama Dosen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  fungsi  select  padaphp taruh disini-->
                        <?php
                        include "koneksi.php";
                        $query = "SELECT m.nim, m.nama AS nama_mahasiswa, d.nama AS nama_dosen FROM mahasiswa m LEFT JOIN dosen d ON m.id_dosen = d.id_dosen";
                        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['nim']; ?></td>
                                <td><?php echo $row['nama_mahasiswa']; ?></td>
                                <td><?php echo $row['nama_dosen']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>