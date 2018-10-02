<?php 
	$komentar = $_POST["komentar"];

	if (empty($komentar) || strlen($komentar) < 5) {
		echo "harus lebih dari 5 karakter !";
	}else{
		echo $komentar."<br><br>";
		echo "Jumlah Karakter : " .strlen($komentar);
	}


 ?>