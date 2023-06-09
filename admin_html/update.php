<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "raff");
$sql = "SELECT * FROM html WHERE id = $id";
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
				<label for="vernagir">vernagir</label><br>
				<input type="text" name="vernagir" id="vernagir" value="<?php echo $r['vernagir']; ?>"> <br><br>

				<label for="text">text</label><br>
				<textarea name="text" id="text" rows="6" cols="46" > <?php echo $r['text']; ?></textarea><br><br>
                <label for="vernagir2">vernagir2</label><br>
				<input type="text" name="vernagir2" id="vernagir2" value="<?php echo $r['vernagir2']; ?>"> <br><br>

				<label for="text2">text2</label><br>
				<textarea name="text2" id="text2" rows="6" cols="46" > <?php echo $r['text2']; ?></textarea><br><br>

				<label for="nkar">nkar</label><br>
				<textarea name="nkar" id="nkar" rows="6" cols="46" > <?php echo $r['nkar']; ?></textarea><br><br>

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>