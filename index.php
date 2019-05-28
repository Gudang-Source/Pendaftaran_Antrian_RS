<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proyek RS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md shadow-sm navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">RSU Dr.Baskoro</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="regist.php">Pendaftaran</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="cek.php" target="_blank">Cek Antrian</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="list.php" target="_blank">Info Pasien</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="login-clean">
        <form action="function/login.php" method="post">
        <?php 
          if(isset($_GET["pesan"]) && $_GET["pesan"]!=""){
              echo "<div class='alert alert-success' role='alert'>".$_GET["pesan"]."</div>";
          }
          ?>
        <?php 
          if(isset($_GET["psn"]) && $_GET["psn"]!=""){
              echo "<div class='alert alert-danger' role='alert'>".$_GET["psn"]."</div>";
          }
          ?>
        <?php 
          if(isset($_GET["psan"]) && $_GET["psan"]!=""){
              echo "<div class='alert alert-success' role='alert'>".$_GET["psan"]."</div>";
          }
          ?>
          
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="noRm" placeholder="No Rekam Medis">
            </div>
            <div class="form-group"><input class="form-control" type="text" name="noHp" placeholder="Nomor HP"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Lanjutkan</button></div>
            <div class="form-group"><a class="btn btn-success btn-block" role="button" href="regist.php">Registrasi
                    Pasien Baru</a></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>