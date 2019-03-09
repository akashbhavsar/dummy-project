<?php
	require_once("Myconnection.php");	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Pdf</title>
	
</head>
<body>
<?php
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	
	$result=SelectQuery("select * from chkbox_ex where id='$id'");
	
	$row=mysql_fetch_assoc($result);
	
	$finalsport  = explode(',',$row['sport']);
	
	?>
	<form method="post" action="dbchkbox_ex.php">
		<fieldset>
			<legend>Check Box</legend>
				<label for="name">Name</label>
				<input name="name" type="text" value="<?php echo $row['name'] ?>" /> <br /> 
				<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
				
				<?php
					if(in_array("cricket",$finalsport))
					{
						echo '<input name="sport[]" type="checkbox" value="cricket" checked />cricket<br /> ';
					}
					else
					{
						echo '<input name="sport[]" type="checkbox" value="cricket" />cricket<br /> ';
					}
					if(in_array("football",$finalsport))
					{
						echo '<input name="sport[]" type="checkbox" value="football" checked />football<br /> ';
					}
					else
					{
						echo '<input name="sport[]" type="checkbox" value="football" />football<br /> ';
					}
					if(in_array("hockey",$finalsport))
					{
						echo '<input name="sport[]" type="checkbox" value="hockey" checked />hockey<br /> ';
					}
					else
					{
						echo '<input name="sport[]" type="checkbox" value="hockey" />hockey<br /> ';
					}
					if(in_array("swiming",$finalsport))
					{
						echo '<input name="sport[]" type="checkbox" value="swiming" checked />swiming<br /> ';
					}
					else
					{
						echo '<input name="sport[]" type="checkbox" value="swiming" />swiming<br /> ';
					}
				?>
				
				<input name="btnupdate" type="submit" value="Update" />
		
		</fieldset>
	</form>
	<?php
}
else
{
	header("location:chkbox_ex.php");
}
?>

	

	
	
	

</body>
</html>