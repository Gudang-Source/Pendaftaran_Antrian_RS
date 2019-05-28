<?php

include "connect.php";

$query = mysqli_query($conn,"select * from pasien");
$my_result = array();

if($query){
	while ($row = mysqli_fetch_assoc($query)) {
		$my_result[] = $row;
	}
}

echo json_encode($my_result);

?>