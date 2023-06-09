



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
  $db = mysqli_connect("localhost", "root", "", "raff");
  $sql = "SELECT * FROM `news`";
  $result = mysqli_query($db, $sql);
//   $g="...";				
  ?>
  <?php while ($r=mysqli_fetch_assoc($result)){ ?>

      <div class="news_div">

      <h1 class="news_vernagir"><?php echo $r['vernagir'];?> </h1>
      <img class="news_nkar" src="<?php echo $r['nkar'];?>" alt="">
      <!-- <p class="news_text"><?php echo $r['text'];?><?php echo $g; ?> -->
<!-- <a href="news_link.php"> <?php echo $r['ta'];?><a href="news_link.php?id=><?php echo $r['id'];?>"></a></a></p> -->
      <p class="news_text"><?php echo substr($r['text'],0,1700) ;?>...<a href="news_link.php?id=<?php echo $r['id'];?>"><?php echo $r['ta'];?></a></p>



      </div>




  <?php
           }
           ?>


    </body>
</html>

<?php 
// for($d=0;$d<=250;$d++){
//   echo $d;
// }

?>