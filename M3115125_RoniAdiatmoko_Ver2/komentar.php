<?php
	include "koneksi.php";

    $email = $_POST['email'];
  	$komentar = $_POST['komentar'];

  	$insert_komen = mysqli_query($connect, "INSERT INTO komentar(id_komentar,email,komentar) VALUES('','$email','$komentar')");

  	if($insert_komen){
  		echo "<script>alert('Komentar ditambahkan')</script>";
		echo "<meta http-equiv='refresh' content='1 url=forum.php'>";
  	}else{
  		echo "<script>alert('Gagal menambahkan komentar')</script>";
		echo "<meta http-equiv='refresh' content='0 url=specification.html'>";

  	}
?>