<?php  
$db = mysqli_connect("localhost","root","", "raff");
$sql = "SELECT * FROM `texekucyun`";
$result = mysqli_query($db, $sql);				
?>

<table border="1">
	<tr>
		<td>id</td>
		<td>hertakan hamar</td>
		<td>qanak@</td>
		<td>heraxosi hamar</td>
		<td>hasce</td>
		<td>delete</td>
	</tr>

	<?php  
	while( $r = mysqli_fetch_assoc($result) ){
	?>
		<tr>
			<td><?php echo $r['id']; ?></td>
			<td><?php echo $r['hamar']; ?></td>
			<td><?php echo $r['qanak']; ?></td>
			<td><?php echo $r['heraxos']; ?></td>
			<td><?php echo $r['hasce']; ?></td>

			<!-- <td>
				 <a href="update.php?id=<?php echo $r['id']; ?>">
					update
				</a> 
			</td> -->
			


			<td>
				<a href="action.php?action=delete&id=<?php echo $r['id']; ?>">
					delete
				</a>
			</td>
		</tr>
	<?php
	}
	?>
</table>


