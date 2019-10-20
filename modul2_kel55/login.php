<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum SBD Modul 2 - Login</title>
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
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-12">
                <form method='POST' action='aksi_login.php' class='form-horizontal'>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <?php
                            if (isset($_GET['pesan'])){
                                $pesan = $_GET['pesan'];
                                if ($pesan == "belum_login"){
                                    echo "Silakan login terlebih dahulu";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Username</label>
                        <div class="col-sm-2">
                            <input type="text" name='username' required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Password</label>
                        <div class="col-sm-2">
                            <input type="password" name='password' required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <?php
							if (isset($_GET['pesan'])){
								$pesan = $_GET['pesan'];
                                if ($pesan == "gagal"){
                                    echo "Username atau password salah";
                                }
							}
							?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <button type='submit' name='submit' class='btn btn-primary'>Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
