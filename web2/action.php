<?php  
if( isset($_POST['add']) ){
	$hamar = $_POST['hamar'];
	$qanak = $_POST['qanak'];
	$heraxos = $_POST['heraxos'];
	$hasce = $_POST['hasce'];
	// $order = $_POST['order'];

	$con=mysqli_connect('localhost','root','','raff');

	$sql = "INSERT INTO `texekucyun`(`hamar`, `qanak`, `heraxos`,`hasce`) VALUES ('$hamar','$qanak','$heraxos','$hasce')";
	$res = mysqli_query($con,$sql);
echo "duq hajoxucyanb avelacreciq dzer apranq@,mer ashxatakic@ kkapnvi dzez het,shnorakalucyun gnumneri hamar";

}
// Սա ապրանքը բազայից ջնջելու համար նախատեսված կոդն է
if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "", "raff");
	$sql = "DELETE FROM texekucyun WHERE id = $id";
	
	// քեզ մնում է իրականացնես $sql հրամանը
	echo "<h1>duq hajoxucyanb jnjeleq  apranq@, het gnaceq noric adminka ev tarmacreq adminka ej@,ev verchum arden dzer kayq@ tarmacneluc heto kanhetana jnjat product@</h1>";
    $r = mysqli_query($db, $sql);
}
?>