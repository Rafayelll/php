<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "raff");
$sql = "SELECT * FROM meknab WHERE id = $id";
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
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="anun">anun</label><br>
				<input type="text" name="anun" id="anun" value="<?php echo $r['anun']; ?>"> <br><br>

				<label for="azganun">azganun</label><br>
				<!-- <textarea name="text" id="text" rows="6" cols="46" > <?php echo $r['text']; ?></textarea><br><br> -->
				<input type="text" name="azganun" id="azganun" value="<?php echo $r['azganun']; ?>"> <br><br>

                <label for="nkar">nkar</label><br>
				<textarea name="nkar" id="nkar" rows="6" cols="46" > <?php echo $r['nkar']; ?></textarea><br><br>

				<label for="meknabanucyun">meknabanucyun</label><br>
				<textarea name="meknabanucyun" id="meknabanucyun" rows="6" cols="46" > <?php echo $r['meknabanucyun']; ?></textarea><br><br>

				

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>