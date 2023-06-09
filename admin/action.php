<?php  
if( isset($_POST['add']) ){
		echo "duq hajoxucyanb avelacreleq nor apranq het gnaceq noric adminka ev tarmacreq adminka ej@";

	$vernagir = $_POST['vernagir'];
	$nkar = $_POST['nkar'];
	$text = $_POST['text'];
	$ta = $_POST['ta'];
	// $text2 = $_POST['text2'];
	// $order = $_POST['order'];

	$con=mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `news`(`vernagir`, `nkar`, `text`,`ta`) VALUES ('$vernagir','$nkar','$text','$ta')";
	$res = mysqli_query($con,$sql);



}
if( isset($_POST["update"]) ){
	// echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";
	echo "duq hajoxucyanb tarmacreleq dzer ej@ het gnaceq adminka ev tamacreq ej@";

	$id = $_POST['id'];
	$vernagir = $_POST["vernagir"];
	$nkar = $_POST["nkar"];
	$text = $_POST["text"];	
	$ta = $_POST["ta"];
	// $text2 = $_POST["text2"];	

	$db = mysqli_connect("localhost", "root", "", "raff");


	$sql = "UPDATE `news` SET
	 `vernagir`='$vernagir', `nkar`='$nkar',`text`='$text',`ta`='$ta'  WHERE `id` = '$id'";

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
	$sql = "DELETE FROM `news` WHERE `id` = $id";
	$r = mysqli_query($db, $sql);
	echo "duq hajoxucyanb jnjeleq dzer ej@ het gnaceq adminka ev tamacreq ej@";

}



?>