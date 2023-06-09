

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

		                                <?php  
										$db = mysqli_connect("localhost", "root", "", "raff");
										$sql = "SELECT * FROM `html`";
										$result = mysqli_query($db, $sql);				
										?>
										<?php while ($r=mysqli_fetch_assoc($result)){ ?>
		<div class="div8">
			<h1><?php echo $r['vernagir']?></h1>
			<p><?php echo $r['text']?></p>
			<h1><?php echo $r['vernagir2']?></h1>
			<p><?php echo $r ['text2']?></p>
			<div class="div9">
			<img class="html_nkar" src="<?php echo $r['nkar'];?>">
			<!-- <img class="html_nkar" src="asa.jpeg"> -->
			</div>
			</div>
		</div>

		  </div>
		</div>
	</div>
	<?php } ?>
</body>
</html>