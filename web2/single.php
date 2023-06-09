













    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 300px;
          margin: 0px;
          text-align: center;
          font-family: arial;
          padding:0px;
        }
        
        .price {
          color: grey;
          font-size: 22px;
        }
        
        .card button {
          border: none;
          outline: 0;
          padding: 12px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
          
        }
        
        .card button:hover {
          opacity: 0.7;
        }
        .card{
          margin: 0px;
          padding: 0px;
          display: flex;
        }
        .patvirelu_anun{
          margin: 1px;
          padding: 20px;
        } 
        .product_img{
            width: 400px;
	height: 200px;
            
        } 
        </style>

</head>

<body>






</body>
</html>









<?php 
 include_once "../admin/db.php";
$sql="SELECT * FROM `product2`";
$result=mysqli_query($db,$sql);
$product2 = mysqli_fetch_all($result,MYSQLI_ASSOC);
include_once "../admin/db.php";

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
       
?>

<?php 

$id=$_GET['id'];

$sql="SELECT * FROM `products` WHERE id=$id";
$r=mysqli_query($db,$sql);
$product=mysqli_fetch_assoc($r);

?>

<div class="card">
 <p><?php echo $product['id'];?></p>
    <p><?php echo $product['name'];?></p>
    <p><?php echo $product['price'];?></p>
    
   
    <img class="product_img" src="<?php echo $product["image_url"]?>">

   
   
    <p><?php echo $product['info'];?></p>

</div>



<?php include 'footer.php';?>

<!-- </body>
</html> -->