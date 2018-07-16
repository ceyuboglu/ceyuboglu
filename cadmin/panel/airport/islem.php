<?php 
ob_start();
session_start();
include 'baglan.php';

if (isset($_POST['admingiris'])){
$admin_id=$_POST['admin_id'];
$admin_pass=$_POST['admin_pass'];
$kullanicisor=$db->prepare("SELECT * FROM kisisel where admin_id=:id and admin_pass=:pass");
$kullanicisor->execute(array(  
'id' => $admin_id,
'pass' => $admin_pass,
));
$say=$kullanicisor->rowCount();
if ($say==1) {
	$_SESSION['admin_id']=$admin_id;
	header('Location:../center/index.php');

}else{
	header('Location:../login.php?durum=no');
}
}
if (isset($_POST['section1kaydet'])) {
	$ayarkaydet=$db->prepare("UPDATE kisisel SET 
		blog_section1=:blog_section1,
		blog_twitter=:blog_twitter,
		blog_facebook=:blog_facebook,
		blog_instagram=:blog_instagram, 
		blog_linkedin=:blog_linkedin,
		blog_github=:blog_github
		WHERE item_id=0");

	$update=$ayarkaydet->execute(array(
		'blog_section1' => $_POST['blog_section1'],
		'blog_twitter' => $_POST['blog_twitter'],
		'blog_facebook' => $_POST['blog_facebook'],
		'blog_instagram' => $_POST['blog_instagram'],
		'blog_linkedin' => $_POST['blog_linkedin'],
		'blog_github' => $_POST['blog_github']));

	if ($update){
		header("Location:../center/section1.php?durum=ok");
	} else{
		header("Location:../center/section1.php?durum=no");
	}
}

if (isset($_POST['section2kaydet'])) {
	$ayarkaydet=$db->prepare("UPDATE kisisel SET
		blog_section2=:blog_section2
		WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'blog_section2' => $_POST['blog_section2']));
	if ($update){
		header("Location:../center/section2.php?durum=ok");
	} else{
		header("Location:../center/section2.php?durum=no");
	}
}

if (isset($_POST['mailayarkaydet'])) {
	$ayarkaydet=$db->prepare("UPDATE kisisel SET
	    blog_smtphost=:blog_smtphost,
	    blog_smtpuser=:blog_smtpuser,
	    blog_smtppassword=:blog_smtppassword,
	    blog_smtpport=:blog_smtpport
	    WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'blog_smtphost' => $_POST['blog_smtphost'],
		'blog_smtpuser' => $_POST['blog_smtpuser'],
		'blog_smtppassword' => $_POST['blog_smtppassword'],
		'blog_smtpport' => $_POST['blog_smtpport']));
	if ($update) {
		header("Location:../center/mailayarlar.php?durum=ok");
	} else{
		header("Location:../center/mailayarlar.php?durum=no");
	}
	
}
//fotoğraf yükleme dahil
if (isset($_FILES['profile_photo'])) {
	$error = $_FILES['profile_photo']['error'];
	if($error != 0){
		header("Location:../center/leftbar.php?durum=no");
	}else{
		$size = $_FILES['profile_photo']['size'];
		if($size > (1024*1024*3)){
			header("Location:../center/leftbar.php?size=no");
		}else{
			$type = $_FILES['profile_photo']['type'];
			$photoname = $_FILES['profile_photo']['name'];
			$uzanti = explode('.', $photoname);
			$uzanti = $uzanti[count($uzanti)-1];
			if ($type == 'image/jpeg' and $uzanti == 'jpg' or $uzanti == 'jpeg' or $uzanti == 'JPEG' or $uzanti == 'png') {
				$photo = $_FILES['profile_photo']['tmp_name'];
				copy($photo,'../../../upload/'.$_FILES['profile_photo']['name']);
				header("Location:../center/leftbar.php?congrats=yes");
				
				
				
			}else{
				header("Location:../center/leftbar.php?copy=no");
			}

		}
	}
}

if (isset($_POST['leftbarphotokaydet'])) {
	$asd = $_FILES['profile_photo']['name'];
	$kaydet=$db->prepare("INSERT into kisisel_photos set
		photo_name=:a
		");
	$insert=$kaydet->execute(array(
		'a' => $asd));
	if ($insert) {
		header("Location:../center/myphotos.php?durum=adamsın");
	} else{
		header("Location:../center/myphotos.php?durum=aqo");
	}

}
/*
if (isset($_POST['leftbarphotokaydet'])) { 
	$asd = $_FILES['profile_photo']['name'];
	$ayarkaydet=$db->prepare("UPDATE kisisel_photos SET
	    leftbar_photoname=:leftbar_photoname
	    WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'leftbar_photoname' => $asd));
	if ($update) {
		header("Location:../center/myphotos.php?durum=ostk");
	} else{
		header("Location:../center/myphotos.php?durum=naqo");
	}
	
}*/
if (isset($_GET['selectedphoto'])) {
	$t = $_GET['selectedphoto'];
	$ayarkaydet=$db->prepare("UPDATE kisisel SET
		leftbar_photoname=:a
		WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'a' => $t));
	if ($update) {
		header("Location:../center/myphotos.php?durum=ok");
	} else{
		header("Location:../center/myphotos.php?durum=susaq");
	}
	
}
if (isset($_GET['deletedphoto'])) {
	$t = $_GET['deletedphoto'];

	$ayarkaydet=$db->prepare("DELETE from kisisel SET
		leftbar_photoname=:a
		WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'a' => $t));
	if ($update) {
		header("Location:../center/myphotos.php?durum=ok");
	} else{
		header("Location:../center/myphotos.php?durum=susaq");
	}
	
}



if (isset($_POST['leftbarayarkaydet'])) { 
	$ayarkaydet=$db->prepare("UPDATE kisisel SET
	    leftbar_fullname=:leftbar_fullname,
	    leftbar_schooldept=:leftbar_schooldept,
	    leftbar_subtext=:leftbar_subtext,
	    leftbar_footer=:leftbar_footer
	    WHERE item_id=0");
	$update=$ayarkaydet->execute(array(
		'leftbar_fullname' => $_POST['leftbar_fullname'],
		'leftbar_schooldept' => $_POST['leftbar_schooldept'],
		'leftbar_subtext' => $_POST['leftbar_subtext'],
		'leftbar_footer' => $_POST['leftbar_footer']));
	if ($update) {
		header("Location:../center/leftbar.php?durum=ok");
	} else{
		header("Location:../center/leftbar.php?durum=no");
	}
	
}


if (isset($_POST['sorbtn'])) {
	$kaydet = $db->prepare("INSERT into ask set
		ask_name =: abc");
	$insert = $kaydet->execute(array(
		'abc' => $_POST['your_name']));
	if ($insert) {
		header("Location:../../../asknew.php?sit=ok");
	} else{
		header("Location:../../../asknew.php?sit=no");
	}

}

