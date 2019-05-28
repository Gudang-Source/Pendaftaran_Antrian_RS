<?php 
session_start();
include 'connect.php';
$username = $_POST['noRm'];
$password = $_POST['noHp'];
$data = mysqli_query($conn,"select * from pasien where no_rm='$username' and telepon='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    while ($row =$data->fetch_assoc()) {
        $nm_pasien=$row['nm_pasien']; 
        $no_rm=$row['no_rm']; 
	$_SESSION['no_rm'] = $no_rm;
	$_SESSION['nama'] = $nm_pasien;
	header("location:../poli.php");}
}else{
	header("location:../index.php?psn=<b>No RM</b> dan <b>No Hp</b> tidak cocok");
}
?>