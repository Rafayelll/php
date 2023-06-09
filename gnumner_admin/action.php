<?php  
if( isset($_POST['add']) ){
	$nkar = $_POST['nkar'];
	$vernagir = $_POST['vernagir'];
    $gin = $_POST['gin'];
    $text = $_POST['text'];
	
	// $order = $_POST['order'];

    // կապ հաստատեք բազայի հետ և կատարեք բազայում վերոնշյալ $sql կոդը
    echo "<h1>duq hajoxucyanb avelacreleq nor apranq het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto khaytnvi nor product@</h1>";
    
	$link = mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `gnumner` (`nkar`,`vernagir`,`gin`,`text`) VALUES ('$nkar','$vernagir','$gin','$text')";

	$result = mysqli_query($link,$sql);
}
if( isset($_POST["update"]) ){
	// echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";

	$id = $_POST['id'];
	$nkar = $_POST['nkar'];
	$vernagir = $_POST['vernagir'];
    $gin = $_POST['gin'];
    $text = $_POST['text'];	

	$db = mysqli_connect("localhost", "root", "", "raff");

	// գրեք sql կոդը այստեղ(UPDATE)
	// classroom-ի 6-րդ դասի մեջ նայիր թե ինչպես է պետք գրել UPDATE հրամանը
	// ՈՒՇԱԴՐՈՒԹՅՈՒՆ կդարձնես չակերտներին
    $sql = "UPDATE `gnumner` SET
   `nkar`='$nkar',`vernagir`='$vernagir',`gin`='$gin',`text`='$text' WHERE `id`='$id'";

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
	$sql = "DELETE FROM gnumner WHERE id = $id";
	
	// քեզ մնում է իրականացնես $sql հրամանը
	echo "<h1>duq hajoxucyanb jnjeleq  apranq@, het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kanhetana jnjat product@</h1>";
    $r = mysqli_query($db, $sql);
}
?>

