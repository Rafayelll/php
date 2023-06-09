<?php
include_once "connect.php";

if(isset($_POST["delate"])){
    $id=$_GET["id"];

    $sql="DELETE FROM `product2` WHERE `id`='$id' ";
    //echo $id;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("Location:../index.php");
}
else{
     header("Location:../404.php");
}
 //mysqli_close($conn);

?>