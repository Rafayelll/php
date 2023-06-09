
<?php  

$id = $_GET['id'];
$db = mysqli_connect("localhost", "root","", "raff");
$sql = "SELECT * FROM `news` WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="header">
			<!-- ADMINISTRATION -->
		</div>		
		<div class="container">	 
			
			 <h1>tarmacman hamar <?php echo $_GET['id']; ?></h1>
			 	
		   <form action="action.php" method="post" enctype="multipart/form-data">
		   <label for="vernagir">vernagir</label><br>

			   <textarea name="vernagir" id="vernagir" rows="3" cols="60"><?php echo $r['vernagir'];?> </textarea> <br><br>
			   <label for="nkar">nkar</label><br>
				   <textarea name="nkar" id="nkar" rows="5" cols="60"><?php echo $r['nkar'];?> </textarea> <br><br>
				   <label for="text">text</label><br>
				   <textarea name="text" id="text" rows="5" cols="60"><?php echo $r['text'];?></textarea> <br><br>
				   <label for="tesnel avelin">tesnel avelin</label><br>
				   <textarea name="ta" id="ta" rows="5" cols="60"><?php echo $r['ta'];?></textarea> <br><br>
				   <!-- <label for="text2">text2</label><br>
				   <textarea name="text2" id="text2" rows="5" cols="60"><?php echo $r['text2'];?></textarea> <br><br> -->
					<!-- <input type="number" name="order" placeholder="Հերթական համար"> <br><br>  -->
				   
				   <input type="hidden" name="id" value= "<?php echo $_GET['id']; ?>">
				   <input type="submit" name="update">
			   </form>
		</div>
	</div>
</body>
</html>