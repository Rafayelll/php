<?php  
if( isset($_POST['add']) ){
	$vernagir = $_POST['vernagir'];
    $text = $_POST['text'];
    $vernagir2 = $_POST['vernagir2'];
	$text2 = $_POST['text2'];
	$nkar = $_POST['nkar'];
	// $order = $_POST['order'];

    // կապ հաստատեք բազայի հետ և կատարեք բազայում վերոնշյալ $sql կոդը
    echo "<h1>duq hajoxucyanb avelacreleq nor apranq het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto khaytnvi nor product@</h1>";
    
	$link = mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `html` (`vernagir`,`text`,`vernagir2`,`text2`,`nkar`) VALUES ('$vernagir','$text','$vernagir2','$text2','$nkar')";

	$result = mysqli_query($link,$sql);
}
if( isset($_POST["update"]) ){
	// echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";

	$id = $_POST['id'];
    $vernagir = $_POST['vernagir'];
    $text = $_POST['text'];
    $vernagir2 = $_POST['vernagir2'];
	$text2 = $_POST['text2'];
	$nkar = $_POST['nkar'];	

	$db = mysqli_connect("localhost", "root", "", "raff");

	// գրեք sql կոդը այստեղ(UPDATE)
	// classroom-ի 6-րդ դասի մեջ նայիր թե ինչպես է պետք գրել UPDATE հրամանը
	// ՈՒՇԱԴՐՈՒԹՅՈՒՆ կդարձնես չակերտներին
    $sql = "UPDATE `html` SET
   `vernagir`='$vernagir',`text`='$text',`vernagir2`='$vernagir2',`text2`='$text2',`nkar`='$nkar'WHERE `id`='$id'";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "<h1>duq hajoxucyanb tarmacreleq nor apranq@ het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kpoxvi nor product@</h1>";
	}
	else{
		echo "db error";
	}
}



// Սա ապրանքը բազայից ջնջելու համար նախատեսված կոդն է
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "raff");
	$sql = "DELETE FROM html WHERE id = $id";
	
	// քեզ մնում է իրականացնես $sql հրամանը
	echo "<h1>duq hajoxucyanb jnjeleq  apranq@, het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kanhetana jnjat product@</h1>";
    $r = mysqli_query($db, $sql);
}
?>

