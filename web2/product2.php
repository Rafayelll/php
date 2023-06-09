<?php include_once "../admin_css/connect.php";

$sql="SELECT * FROM `product2`";
$result=mysqli_query($conn,$sql);
$product2 = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>





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
		<?php include_once "header.php";
    for($i=0;$i<count($product2);$i++){

   
    ?>
		<div class="div10">
			
			</div>

		  </div>
		  		<div class="div12">
			<img src="<?php echo $product2[$i]['nkar'] ?>" class="img3">
			<h1><?php echo $product2[$i]['vernagir'] ?></h1>
			<p><?php echo $product2[$i]['text'] ?></p>
			<h1 class="h42"><?php echo $product2[$i]['vernagir2'] ?></h1>
			<p><?php echo $product2[$i]['text2'] ?></p>
			</div>
		</div>

	</div>
    <?php }?>

</body>
</html>

