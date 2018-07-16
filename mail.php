<?php 

$name=$_POST['first_name'];
$surname=$_POST['last_name'];
$email=$_POST['email'];
$message=$_POST['message'];
$content="Gönderen Adı ve Soyadı: $name &nbsp $surname <br> Gönderenin Mail Adresi: $email <br> Mesaj: <br> $message ";
$header="From: $email\r\n";
if (isset($_POST['gonderbtn'])){
	if (!empty(($_POST['first_name']) and ($_POST['last_name']) and ($_POST['last_name']) and ($_POST['last_name']))) {
		mail("ca.eyuboglu@gmail.com",$email,$content,$header);
		header("Location:index.php?mail=yes");
	}else{
		header("Location:index.php?mail=no");
	}


}











 ?>