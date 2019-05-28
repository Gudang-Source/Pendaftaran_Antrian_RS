<?php
require_once('connect.php');

$norm = $_POST['norm'];
$nama = $_POST['nm'];
$dokter = $_POST['Radio1'];
$antri_1 = $_POST['dk1'];
$antri_2 = $_POST['dk2'];

if($dokter=='1'){
$test .= "INSERT INTO antrian(`no_rm`, `nm_pasien`, `id_dokter`, `no_antrian`) VALUES ('$norm','$nama','$dokter','$antri_1');";
$test .= "UPDATE list_dok_poli SET tot_antri=$antri_1 where id_dokter=$dokter";
mysqli_multi_query($conn, $test) or die();
header("Location: ../index.php?psan=proses pendaftaran berhasil");
}
else{
$test .= "INSERT INTO antrian(`no_rm`, `nm_pasien`, `id_dokter`, `no_antrian`) VALUES ('$norm','$nama','$dokter','$antri_2');";
$test .= "UPDATE list_dok_poli SET tot_antri=$antri_2 where id_dokter=$dokter";
mysqli_multi_query($conn, $test) or die();
header("Location: ../index.php?psan=proses pendaftaran berhasil");
}



?>