<?php  
if( isset($_POST['add']) ){
	$anun = $_POST['anun'];
    $azganun = $_POST['azganun'];
    $nkar = $_POST['nkar'];
	$meknabanucyun = $_POST['meknabanucyun'];
	
	// $order = $_POST['order'];

    // կապ հաստատեք բազայի հետ և կատարեք բազայում վերոնշյալ $sql կոդը
    echo "<h1>duq hajoxucyanb avelacreleq nor apranq het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto khaytnvi nor product@</h1>";
    
	$link = mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `meknab` (`anun`,`azganun`,`nkar`,`meknabanucyun`) VALUES ('$anun','$azganun','$nkar','$meknabanucyun')";

	$result = mysqli_query($link,$sql);
	header("Location:../web2/html3.php");
}
if( isset($_POST["update"]) ){
	// echo "ապրանքը թարմացնելու համար նախատեսված sql կոդը գրեք ինքներդ (UPDATE)";

	$id = $_POST['id'];
    $anun = $_POST['anun'];
    $azganun = $_POST['azganun'];
    $nkar = $_POST['nkar'];
	$meknabanucyun = $_POST['meknabanucyun'];

	$db = mysqli_connect("localhost", "root", "", "raff");

	// գրեք sql կոդը այստեղ(UPDATE)
	// classroom-ի 6-րդ դասի մեջ նայիր թե ինչպես է պետք գրել UPDATE հրամանը
	// ՈՒՇԱԴՐՈՒԹՅՈՒՆ կդարձնես չակերտներին
    $sql = "UPDATE `meknab` SET
   `anun`='$anun',`azganun`='$azganun',`nkar`='$nkar',`meknabanucyun`='$meknabanucyun' WHERE `id`='$id'";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "<h1>duq hajoxucyanb tarmacreleq nor apranq@ het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kpoxvi nor product@</h1>";
	// header("location../index.php");
	header("Location:../web2/html3.php");
	}
	else{
		echo "db error";
	}
}



// Սա ապրանքը բազայից ջնջելու համար նախատեսված կոդն է
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "raff");
	$sql = "DELETE FROM meknab WHERE id = $id";
	
	// քեզ մնում է իրականացնես $sql հրամանը
	// echo "<h1>duq hajoxucyanb jnjeleq  apranq@, het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kanhetana jnjat product@</h1>";
	$r = mysqli_query($db, $sql);
	header("location:../meknabanucyun/index.php");
	// header("Location:../web2/html3.php");
}
?>

