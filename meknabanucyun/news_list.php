
<?php  
$db = mysqli_connect("localhost", "root", "", "raff");
$sql = "SELECT * FROM meknab";
$result = mysqli_query($db, $sql);				
?>

<table border="1">
	<tr>
		<td>id</td>
		<td>anun</td>
		<td>tarmacnel</td>
		<td>jnjel</td>
	</tr>

	<?php  
	while( $r = mysqli_fetch_assoc($result) ){
	?>
		<tr>
			<td><?php echo $r['id']; ?></td>
			<td><?php echo $r['anun']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $r['id']; ?>">
					tarmacnel
				</a>
			</td>
			<td>
				<a href="action.php?action=delete&id=<?php echo $r['id']; ?>">
					jnjel
				</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>