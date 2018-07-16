<?php 

include 'cadmin/panel/airport/baglan.php';/*
if (isset($_POST['sorbtn'])) {
	$save=$db->prepare("INSERT into ask set 
		ask_name=:ask_name"
	);
	$insert=$save->execute(array(
		'ask_name' => $_POST['ask_name']));
	if($insert){
		header("Location:asknew.php?sit=ok");
	}else{
		header("Location:asknew.php?sit=no");
	}
}
*/
if (isset($_POST['sorbtn'])) {
	$kaydet = $db->prepare("INSERT into ask set
		ask_name =: abc");
	$insert = $kaydet->execute(array(
		'abc' => $_POST['your_name']));
	if ($insert) {
		header("Location:asknew.php?sit=ok");
	} else{
		header("Location:asknew.php?sit=no");
	}

}














 ?>