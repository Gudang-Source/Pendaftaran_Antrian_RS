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
        <form action="function/register.php" method="post">
            <h2 class="text-center mt-4"><a href="index.php"><i class="fa fa-arrow-circle-left"></i></a> | Registrasi
                Pasien</h2>
            <div class="form-group"><input class="form-control" type="text" name="nmPasien" placeholder="Nama Anda">
            </div>
            <div class="form-group"><input class="form-control" type="text" name="tpLahir" placeholder="Tempat Lahir">
            </div>
            <div class="form-group"><input class="form-control" type="date" name="dtPasien"></div>
            <div>
                <fieldset name="radi" class="mb-3">
                    <div class="custom-control custom-radio custom-control-inline ml-3"><input type="radio"
                            name="rdKel" checked="" id="customRadioInline1" value="p"
                            class="custom-control-input"><label class="custom-control-label"
                            for="customRadioInline1">Pria</label></div>
                    <div class="custom-control custom-radio custom-control-inline"><input type="radio"
                            name="rdKel" id="customRadioInline2" value="w" class="custom-control-input"><label
                            class="custom-control-label" for="customRadioInline2">Wanita</label></div>
                </fieldset>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="nmIbu" placeholder="Nama Ibu"></div>
            <div class="form-row mb-3">
                <div class="col-lg-5 offset-lg-0"><select class="form-control" name="gold">
                        <option value="-" selected disabled>Gol Darah</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="o">O</option>
                        <option value="z">Lainnya</option>
                    </select></div>
                <div class="col-lg-6 offset-lg-1"><select class="form-control" name="agama">
                        <option value="-" selected disabled>Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katholik">Katholik</option>
                        <option value="lainnya">Lainnya...</option>
                    </select></div>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="kerja" placeholder="Pekerjaan"
                    autocomplete="on"></div>
            <div class="form-group"><textarea class="form-control" name="alamat"
                    placeholder="Alamat Lengkap"></textarea></div>
            <div class="form-group"><input class="form-control" type="text" name="noHp" placeholder="Nomor HP"
                    autocomplete="on"></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">Lanjutkan</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>