<?php 
include_once "connect.php";

$sql="SELECT * FROM `product2 `";
$result=mysqli_query($conn,$sql);

if(mysqli_num_row($result)>0){?>
<table border="1">
<tr>

<th>nkar</th>
<tr>vernagir</tr>
<tr>text</tr>
<tr>vernagir2</tr>
<tr>text2</tr>
<tr>Update</tr>
<tr>DELETE</tr>
</tr>
}
<?php while($product = mysqli_fetch_assoc($result)){ ?>
<td><?php echo $product['id'];?></td>
<td><?php echo $product['nkar'];?></td>
<td><?php echo $product['vernagir'];?></td>
<td><?php echo $product['text'];?></td>
<td><?php echo $product['vernagir2'];?></td>
<td><?php echo $product['text2'];?></td>

<a href="update.php?id=<?php echo $product2["id"];?>">update</a>
<form action="delate.php?id=<?php echo $product2['id'];?>">
<input type="submit" name="delete"value="delete">
</form>
</td>
</td>

<?php } ?>
</table>
<?php } ?>
<?php 
mysqli_close($conn);
?>
