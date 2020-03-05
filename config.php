
<?php

	$conn = mysqli_connect("localhost", "root", "", "ictd");
	
	if(!$conn)
	{
		die("Connection Loss to Database".mysql_error());
	}
?>