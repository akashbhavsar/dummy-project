<?php
	require_once("Myconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>CheckBox Select</title>
</head>
<body>
<?php

	$result=SelectQuery("select * from chkbox_ex");
?>
	<table border="1" align="center" width="800px">
	<tbody>
	<tr>
		<th>Name</th>
		<th>Sport</th>
		<th>Edit</th>
	</tr>
		<?php
			while($row=mysql_fetch_assoc($result))
			{
				?>
					<tr>
						<td><?php echo $row["name"] ?></td>
						<td><?php echo $row["sport"] ?></td>
						<td><a href="chkbox_ex1.php?id=<?php echo $row['id'] ?>">Edit</a></td>
					</tr>
				<?php
			}
		?>
	</tbody>
	</table>
</body>
</html>