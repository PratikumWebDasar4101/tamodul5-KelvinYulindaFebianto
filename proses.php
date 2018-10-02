<?php 
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$inputulang = "<br><a href='form.html'></a>";

	if (strlen($nama) > 25) {
		echo "Inputan Nama Tidak boleh dari 25 Karakter!";
		echo $inputulang;
	}else{
		header("Location: komentar.html");
	}

	if (!is_numeric($nim) || strlen((string)$nim) > 10)  {
		echo "Inputan Nim harus berbentuk angka dan kurang dari 10 karakter!";
		echo $inputulang;
	}else{
		header("Location: komentar.html");
	}

	if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
		echo "Format Email Salah!";
		echo $inputulang;
	}else{
		header("Location: komentar.html");
	}

 ?>