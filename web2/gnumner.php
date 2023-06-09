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

    <!-- <h2> հերթական համար </h2> -->

     <?php  
										$db = mysqli_connect("localhost", "root", "", "raff");
										$sql = "SELECT * FROM `gnumner`";
										$result = mysqli_query($db, $sql);				
										?>
										<?php while ($r=mysqli_fetch_assoc($result)){ ?>

<div class="cardd">
<!-- <h6> <?php echo $r['id']?> </h6> -->
  <img class="product_nkar" src="<?php echo $r['nkar']?>" alt="Denim Jeans" style="width:100%">
  <h4 class="hamarakalum">hertakan hamar <?php echo $r['id']?> </h4>

  <h1 class="product_vernagir"><?php echo $r['vernagir']?></h1>
  <p class="price">$<?php echo  $r ['gin']?></p>
  <p class="producti_p"><?php echo $r['text']?></p>
  
  <a href="gnumneri_ardyunq.php?id=<?php echo $r['id'] ?>"><p class ="buttonn"><button>ՊԱՏՎԻՐԵՔ ՀԻՄԱ</button></p></a>

 </div>




<?php } ?>










<!-- <div class="cardd">
  <img class="product_nkar" src="https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG" alt="Denim Jeans" style="width:100%">
  <h1 class="product_vernagir">Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p class="producti_p">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p class ="buttonn"><button>Add to Cart</button></p>
</div>
<div class="cardd">
  <img class="product_nkar" src="https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG" alt="Denim Jeans" style="width:100%">
  <h1 class="product_vernagir">Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p class="producti_p">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p class ="buttonn"><button>Add to Cart</button></p>
</div>
<div class="cardd">
  <img class="product_nkar" src="https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG" alt="Denim Jeans" style="width:100%">
  <h1 class="product_vernagir">Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p class="producti_p">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p class ="buttonn"><button>Add to Cart</button></p>
</div>
<div class="cardd">
  <img class="product_nkar" src="https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG" alt="Denim Jeans" style="width:100%">
  <h1 class="product_vernagir">Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p class="producti_p">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p class ="buttonn"><button>Add to Cart</button></p>
</div>


<div class="cardd">
  <img class="product_nkar" src="https://full.am/uploads/posting_image/user_30139/product_94503/c27c226ca63cbc2fe8e291eb21c9333a.JPG" alt="Denim Jeans" style="width:100%">
  <h1 class="product_vernagir">Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p class="producti_p">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p class ="buttonn"><button>Add to Cart</button></p>
</div> -->


<?php
		include_once "footer.php";
?>