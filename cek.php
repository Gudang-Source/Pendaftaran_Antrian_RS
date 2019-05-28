<?php 
require_once("function/connect.php");
?>
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
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Pendaftaran</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Cek Antrian</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
<div class="container">
    <div class="row float-right">
    <?php 
          if(isset($_GET["pesan"]) && $_GET["pesan"]!=""){
              echo "<div class='alert alert-success' role='alert'>".$_GET["pesan"]."</div>";
          }
          ?>
        <div class="col-2 mt-3 mb-3"><a class="btn btn-success" role="button" href="function/getAntri.php">Ekspor JSON</a></div>
    </div>
    
<table class="table">

    <thead>
                <tr>
                    <th>No</th>
                    <th>No RM</th>
                    <th>Nama Pasien </th>
                    <th>ID Dokter</th>
                    <th>No Antrian</th>
    
                </tr>
            </thead>
    
                <tbody>
                    <?php
                                           
                        $no= 1;
                        $result = $conn->query("select * from antrian");
                        while ($row =$result->fetch_assoc()) {                   
                    ?>
                    <tr>
                    
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['no_rm'] ?></td>
                    <td><?php echo $row['nm_pasien'] ?></td>
                    <td><?php echo $row['id_dokter'] ?></td>
                    <td><?php echo $row['no_antrian'] ?></td>
                    
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>