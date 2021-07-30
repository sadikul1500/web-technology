<?php  

	$conn = mysqli_connect('localhost', 'madam', '997746122', 'kdramas');

	//check connection
	if(!$conn)
	{
		echo 'failed to connect to database<br>';
		echo 'Connection error: ' . mysqli_connect_error(). '<br>';
	}

?>