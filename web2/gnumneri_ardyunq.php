<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root","", "raff");
$sql = "SELECT * FROM `gnumner` WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="stylee.css">
    <title>logo</title>
    <style>


</style>
</head>
<body>
	<div class="logo">
		<div class="div">
		<img src="images.jpeg" alt="Smiley face" height="57" width="700">
		<div class="div1">
			<h1>093 ** ** **</h1>
			<h2>077 ** ** **</h2>
		</div>
    <?php 
    include_once "header.php";
    ?>
	
<h1 class="hertakan_hamar">ՀԵՐԹԱԿԱՆ ՀԱՄԱՐ     <?php echo  $r['id'] ?></h1>

<!-- sdfsfsdfsdfsfdsdfsd d dsfsdfs sdfsdfsd fsf sf s -->


 <html>
<head>
	 <!-- <title>Admin page</title> -->
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	<form action="../texekucyun_admin../action.php" method="post">
			<input type="number" name="hamar" placeholder="Հերթական համար"> <br><br>
			<input type="number" name="qanak" placeholder="վորքանեք գնում ?"> <br><br>

		<input type="text" name="heraxos" placeholder="նշեք ձեր հերաղոսահամարը "> <br><br>
		<textarea name="hasce" placeholder="հասց է" rows="5" cols="60"></textarea> <br><br>
		<input type="submit" name="add">
	</form>
	
	<?php

	
	// include '../texekucyun_admin../news_list.php';
	
	?>
</body>
</html 












<?php
		include_once "footer.php";
?>