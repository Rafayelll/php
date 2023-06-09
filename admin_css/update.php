<?php 
include_once "connect.php";

if (isset($_POST["update"])){
    $id=$_GET["id"];
    $nkar=$_POST["nkar"];
    $vernagir=$_POST["vernagir"];
    $text=$_POST["text"];
    $vernagir2=$_POST["vernagir2"];
    $text2=$_POST["text2"];

    $upd="UPDATE `product2` SET
    `nkar`='$nkar',
    `vernagir`='$vernagir',
    `text`='$text',
    `vernagir2`='$vernagir2',
    `text2`='$text2',
    `text2`='$vernagir2' WHERE id='$id' ";

    $connect = mysqli_query($conn,$upd);
    if($connect){
header("location: index.php");
    }else {
        header("location: 404.php");
    }
}
mysqli_close($conn);


    ?>

    <body>
    <form method="POST" >
    <input type="text" name="nkar" placeholder="nkar" required>
    <br>
    <input type="text" name="vernagir" placeholder="vernagir" required>
    <br>
    <input type="text" name="text" placeholder="text" required>
    <br>
    <textarea class="text" name ="vernagir2" placeholder="vernagir2"></textarea>
    <br>
    <input type="text" name="text2" placeholder="text2" required>
    <br>
    <input class="text_submit" type="submit" name="update">
    <br>
    </form>
