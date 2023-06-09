<?php  
if( isset($_POST['add']) ){
	// echo "duq hajoxucyanb avelacreleq nor apranq het gnaceq noric adminka ev tarmacreq adminka ej@";
   echo "<h1>dzer patver@ hajoxucyanb grancvele mez mot, mer ashxatakic@ karj jamanakum kkapvi dzez het</h1>";
	$hamar = $_POST['hamar'];
	$qanak = $_POST['qanak'];
	$heraxos = $_POST['heraxos'];
	$hasce = $_POST['hasce'];
	// $text2 = $_POST['text2'];
	// $order = $_POST['order'];

	$con=mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `texekucyun`(`qanak`, `hamar`, `heraxos`,`hasce`) VALUES ('$qanak','$hamar','$heraxos','$hasce')";
	$res = mysqli_query($con,$sql);



}
if( isset($_POST["update"]) ){
	// echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";
	echo "duq hajoxucyanb tarmacreleq dzer ej@ het gnaceq adminka ev tamacreq ej@";

	$id = $_POST['id'];
	$hamar = $_POST['hamar'];
	$qanak = $_POST['qanak'];
	$heraxos = $_POST['heraxos'];
	$hasce = $_POST['hasce'];	

	$db = mysqli_connect("localhost", "root", "", "raff");


	$sql = "UPDATE `texekucyun` SET
	 `hamar`='$hamar', `qanak`='$qanak',`heraxos`='$heraxos',`hasce`='$hasce'  WHERE `id` = '$id'";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "նորուցյունները թարմացվելեն";
	}
	else{
		echo "db error";
	}
}



// Սա ապրանքը բազայից ջնջելու համար նախատեսված կոդն է
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "raff");
	$sql = "DELETE FROM `texekucyun` WHERE `id` = $id";
	$r = mysqli_query($db, $sql);
}



?>