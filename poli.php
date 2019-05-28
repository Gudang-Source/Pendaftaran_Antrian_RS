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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php include 'function/cekLogin.php'; ?>
    <div>
        <nav class="navbar navbar-light navbar-expand-md shadow-sm navigation-clean">
            <div class="container"><a class="navbar-brand" href="#">RSU Dr.Baskoro</a><button class="navbar-toggler"
                    data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Pendaftaran</a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Cek Antrian</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
    <div class="contact-clean">
        <form action="function/antrian.php" method="post" name="antrian">
            <h2 class="text-center mt-4"><a href="function/back.php"><i class="fa fa-arrow-circle-left"></i></a> | Pilih Dokter</h2>
            <?php echo "<div class='mb-3'><input type='hidden' name='nm' value='".$_SESSION['nama']."'> Nama Pasien : ".$_SESSION['nama']."</div>"; ?>
            <?php echo "<div class='mb-3'><input type='hidden' name='norm' value='".$_SESSION['no_rm']."'> Nomor RM : ".$_SESSION['no_rm']."</div>"; ?>
            <div>
            <a><b>Pilih Dokter :</b></a><br>
            <label class="radio-inline mr-3 ml-3 mt-3">
                <input type="radio" name="Radio1" id="Radio1" class="Radio1" value="1"> Dr. Baskoro
                </label>
            <label class="radio-inline">
                <input type="radio" name="Radio1" id="Radio1" class="Radio1" value="2"> Dr. Adi Wicaksono
                </label>
            </div>
            <div class="form-row mb-2 mt-3">
                <div class="col-lg-12 offset-lg-0">
                <a><b>Antrian Anda :</b></a>
                <?php
                        $result = $conn->query("select id_dokter as dk, tot_antri as tot from list_dok_poli");
                        while ($row =$result->fetch_assoc()) { 
                            $values[]=$row;  }
                            mysqli_free_result($result);
                                { 
                                    $antrian1=$values[0]['tot']+1;                           
                                    $antrian2=$values[1]['tot']+1;                           
                   ?>
                <span class="ml-3" div id="list1" name='1' style='display:none'><?php echo $antrian1 ?><input type="hidden" name="dk1" value="<?php echo $antrian1 ?>"></span>
                <span class="ml-3" div id="list2" name='2' style='display:none'><?php echo $antrian2 ?><input type="hidden" name="dk2" value="<?php echo $antrian2 ?>"></span>
                <?php } ?>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Lanjutkan</button></div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/function.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>