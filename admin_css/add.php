<?php
include_once 'connect.php';
$nkar=$_POST['nkar'];
$vernagir=$_POST['vernagir'];
$text=$_POST['text'];
$vernagir2=$_POST['vernagir2'];
$text2=$_POST['text2'];
 

 $sql="INSERT INTO `product2` (`nkar`,`vernagir`,`text`,`vernagir2`,`text2`)
 VALUES ('$nkar','$vernagir','$text','$vernagir2','$text2')";
 mysqli_query($conn,$sql);
 mysqli_close($conn);
header("Location:index.php");
?>
