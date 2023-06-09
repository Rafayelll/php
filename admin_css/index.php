

		<html>
<head>
<title>admin</title>

<link rel="stylesheet" href="style.css">  
</head>
<body>
<h1>css i adminkena</h1>
    <form method="POST" action="add.php">
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
    <input class="text_submit" type="submit" name="add">
    <br>
    
    </form>


    <?php
    include_once "connect.php";
    $sql= "SELECT * FROM `product2`";
    $product2 = mysqli_query($conn,$sql);


    ?> 


    <style>
table, th, td {
  border:1px solid black;
}
</style>
    <table style="width:100%">
  <tr>
    <td>id</td>
    <td>nkar</td>
    <td>vernagir</td>
    <td>text</td>
    <td>vernagir2</td>
    <td>text2</td>
    <td></td>
    <td></td>

    
   
  </tr>
  

<?php
if(mysqli_num_rows($product2)>0){
while($product = mysqli_fetch_assoc($product2))
{?>

<tr>
    <td><?php echo $product['id'];?></td>
    <td><?php echo $product['nkar'];?></td>
    <td><?php echo $product['vernagir'];?></td>
    <td><?php echo $product['text'];?></td>
    <td><?php echo $product['vernagir2'];?></td>
    <td><?php echo $product['text2'];?></td>
    
        <td><a href="update.php?id=<?php echo $product['id'];?>"> update</a></td>
        <td>
        <form action="delate.php/?id=<?php echo $product['id']; ?> "method="POST">
        <input type="submit" name="delate" value="DELETE">
        </form>
        </td>
        </tr>
        

<?php
}
?>

<?php
}

else {
  echo "0 results";
}
?>
</table>
<h1>admini linker@ nerqvumen</h1>
 <h2><a href="../admin/index.php">news</a></h2>
 <h2> <a href="../admin_html/index.php">html</a></h2>
 <h2> <a href="../gnumner_admin/index.php">gnumner</a></h2>
 <h2> <a href="../meknabanucyun/index.php">meknabanucyun</a></h2>

</body>
</html>
