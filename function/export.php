<?php
require_once('connect.php');?>
<?php 
$sql="select * from Pasien"; 

$response = array();
$posts = array();
$result=mysqli_query($conn,$sql);
while ($row =$result->fetch_assoc()) { 
  $no_rm=$row['no_rm']; 
  $nm_pasien=$row['nm_pasien']; 
  $tmpt_lahir=$row['tmpt_lahir']; 
  $tgl_lahir=$row['tgl_lahir']; 
  $jns_kelamin=$row['jns_kelamin']; 
  $nm_ayah=$row['nm_ayah']; 
  $nm_ibu=$row['nm_ibu']; 
  $gol_darah=$row['gol_darah']; 
  $agama=$row['agama']; 
  $pekerjaan=$row['pekerjaan']; 
  $alamat=$row['alamat']; 
  $telepon=$row['telepon']; 

  $posts[] = array('no_rm'=> $no_rm, 'nm_pasien'=> $nm_pasien, 'tmpt_lahir'=> $tmpt_lahir, 'tgl_lahir'=> $tgl_lahir,
  'jns_kelamin'=> $jns_kelamin, 'nm_ayah'=> $nm_ayah, 'nm_ibu'=> $nm_ibu, 'gol_darah'=> $gol_darah, 'agama'=> $agama,
  'pekerjaan'=> $pekerjaan, 'alamat'=> $alamat, 'telepon'=> $telepon);
} 

$response['posts'] = $posts;

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($response));
header("Location: /Pendaftaran/list.php?pesan=proses ekspor berhasil");
fclose($fp);


?> 