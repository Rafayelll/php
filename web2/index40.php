<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylee.css">
    <title>logo</title>
    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          max-width: 300px;
          margin: auto;
          text-align: center;
          font-family: arial;
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
	<?php include_once "header.php";?>

  <!-- <?php include_once "header.php"?>
  <?php 
  $id=$_GET['id'];
  $product=select('product',$id);
  
  ?> -->



  
        
        <h2 style="text-align:center">նոր ապրանքներ</h2>

<!-- <div class="card">
  <img src="Å•ß ≠†ß¢†≠®Ô.jpg" alt="Denim Jeans" style="width:100%">
  <h1 class="patvirelu_anun">Վերչին սերնդի համակարքիչ</h1>
  <p class="price">$15.5</p>
  <p>Մի փոքրիկ նկար մեր հիանալի ապրանքանիշից</p>
  <p><button>Պատվիրեք առցանց</button></p>
</div> -->



<div class="card">
          <img src="<?php echo $product[$i]['image_url'] ?>" alt="Denim Jeans" style="width:100%">
          <h1 class="patvirelu_anun"><?php echo $product[$i]['name'] ?></h1>
          <p class="price"><?php echo "$".$product[$i]['price'] ?></p>
          <p><?php echo $product[$i]['info'] ?></p>
          <!-- <p><button>Պատվիրեք առցանց</button></p> -->
          
        </div>
          




</body>
</html>