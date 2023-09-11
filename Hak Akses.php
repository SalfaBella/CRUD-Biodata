<?php
	session_start();
	
	if(empty($_SESSION['level'])){
		echo "no access";
	}else{
		echo "Hak Akses : ".$_SESSION['username'];
		
		echo "<hr>";
	
		echo "Nama : ".$_POST['nama'];
		echo "<br>";
		echo "Nim : ".$_POST['nim'];
		echo "<br>";
		echo "Jenis Kelamin : ".$_POST['jenkel'];
		echo "<br>";
		echo "Agama : ".$_POST['agama'];
		
	}
	
	
	
?>