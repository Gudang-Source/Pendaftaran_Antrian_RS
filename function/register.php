<?php
require_once('connect.php');

$nama = $_POST["nmPasien"];
$tempat = $_POST["tpLahir"];
$kelamin = $_POST["rdKel"];
$tgl = $_POST["dtPasien"];
$ibu = $_POST["nmIbu"];
$darah = $_POST["gold"];
$agama = $_POST["agama"];
$kerja = $_POST["kerja"];
$alamat = $_POST["alamat"];
$nohp = $_POST["noHp"];



try{
    $stmt = $conn->prepare('INSERT INTO pasien(nm_pasien,tmpt_lahir,tgl_lahir,jns_kelamin,nm_ibu,gol_darah,agama,pekerjaan,alamat,telepon) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->bind_param("ssssssssss", $nama,$tempat,$tgl,$kelamin,$ibu,$darah,$agama,$kerja,$alamat,$nohp);
    $stmt->execute();
    header("Location:../index.php?pesan=proses registrasi berhasil");
    die();
}
catch(Exception $e){
    $error = $e->getMessage();
}
finally{
    $stmt->close();
    $conn->close();
}


?>