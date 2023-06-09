<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<title>logo</title>
</head>
<body>
	<div class="logo">
		<div class="div">
		<img src="images.jpeg" alt="Smiley face" height="57" width="700">
		<div class="div1">
			<h1>093 ** ** **</h1>
			<h2>077 ** ** **</h2>
		</div>
		<?php include_once "header.php";?>

		<form action="../meknabanucyun/action.php" method="post">
	<h1>meknabanucyunner@ toxeq aystex</h1>
		<!-- <input type="text" name="title" placeholder="Վերնագիր"> <br><br> -->
		<!-- <input type="number" name="order" placeholder="Հերթական համար"> <br><br> -->
		<!-- <textarea name="vernagir" placeholder="վերնագիր" rows="3" cols="60"></textarea> <br><br> -->
		<input type="text" name="anun" id="anun" placeholder="anun"> <br><br>
		<input type="text" name="azganun" id="azganun" placeholder="azganun"> <br><br>
		<textarea name="nkar" placeholder="nkar" rows="3" cols="60"></textarea> <br><br>
		<textarea name="meknabanucyun" placeholder="meknabanucyun" rows="5" cols="60"></textarea> <br><br>
        <!-- <textarea name="vernagir2" placeholder="վերնագիր2" rows="3" cols="60"></textarea> <br><br> -->
		

       
		<input type="submit" name="add">
	</form>
    <?php
    //  include "news_list.php";
     ?>
 <?php  
  $db = mysqli_connect("localhost", "root", "", "raff");
  $sql = "SELECT * FROM `meknab`";
  $result = mysqli_query($db, $sql);
//   $g="...";				
  ?>
	 <?php while ($r=mysqli_fetch_assoc($result)){ ?>
	   <div>
	   <h1><?php echo $r['anun'];?> 
	    <?php echo $r['azganun'];?><img src="<?php echo $r['nkar'];?>"
		 alt=""  width="40" height="40"></h1>

	<p><?php echo $r['meknabanucyun'];?></p> 
</div>
<?php } ?>
</body>
</html>