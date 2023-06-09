<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root","", "raff");
$sql = "SELECT * FROM `news` WHERE `id` = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
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
    <?php
     include_once "header.php";
    // for($i=0;$i<count($product);$i++){

   
    ?>
  <!-- <main>              
                <h2 style="text-align:center">նոր ապրանքներ</h2>

        <div class="card">
          <img class="shop_img" src="<?php echo $product[$i]['image_url'] ?>" alt="Denim Jeans" style="width:100%">
          <h1 class="patvirelu_anun"><?php echo $product[$i]['name'] ?></h1>
          <p class="price"><?php echo "$".$product[$i]['price'] ?></p>
          <p><?php echo $product[$i]['info'] ?></p>
         <p><button>Պատվիրեք առցանց</button></p> 
          <a href="index40.php?id=<?php echo $product[$i]["id"]?>">Պատվիրեք առցանց</a> 

          <a href="single.php?id=<?php echo $product[$i]["id"]?>">tesnel avelin</a>
        </div>
            <?php
          //  }
           ?>
           

 </main> -->



 <div class="news_div">

<h1 class="news_vernagir"><?php echo $r['vernagir'];?> </h1>
<img class="news_nkar" src="<?php echo $r['nkar'];?>" alt="">
<p  class="news_textt"><?php echo $r['text']?></p>

</div>


    </body>
</html>