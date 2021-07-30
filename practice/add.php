<?php 
	include 'config/db_connect.php';

	$email = $title = $casts = '';
	$errors = array('email' => '', 'casts' => '', 'title' => '');
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['email']))
		{
			$errors['email'] =  ' email is required <br>';
		}
		else
		{
			$email = $_POST['email'];
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$errors['email'] = 'valid email is required<br>';
			}
			else{
				echo htmlspecialchars($_POST['email']).'<br>';
			}
			
		}

		if(empty($_POST['title']))
		{
			$errors['title'] = ' title is required<br>';
		}
		else
		{
			$title = $_POST['title'];
			echo htmlspecialchars($_POST['title']).'<br>';
		}

		if(empty($_POST['casts']))
		{
			$errors['casts'] = ' casts is required<br>';
		}
		else
		{
			$casts = $_POST['casts'];
			if(!preg_match('/^([A-Za-z\s]+)(,\s*[a-zA-Z\s]*)*$/', $casts))
			{
				$errors['casts'] = 'comma seperated values with letters and spaces only<br>';
			}
			else{
				echo htmlspecialchars($_POST['casts']).'<br>';
			}
			
		}

		if(array_filter($errors))
		{
			echo 'form is invalid<br>';
		}
		else
		{
			$email = mysqli_real_escape_string($conn, $email);
			$title = mysqli_real_escape_string($conn, $title);
			$casts = mysqli_real_escape_string($conn, $casts);

			$sql = "insert into dramas(title, email, casts) values('$title', '$email', '$casts')";
			//echo 'form is valid<br>';

			if(mysqli_query($conn, $sql))
			{
				header('Location: index.php'); //redirect to another page
			}
			else
			{
				echo 'query error: ' . mysqli_error($conn);
			}


			
		}
		
		//echo htmlspecialchars($_POST['title']).'<br>';
		//echo htmlspecialchars($_POST['casts']).'<br>';
	}


 ?>



<!DOCTYPE html>
<html>

	<?php include 'templates/header.php'; ?>

	<section>
		<h2 style="text-align: center">Add a drama</h2>
		<form action="add.php" method="POST">
			<label>Your Email: </label>
			<input type="text" name="email" value="<?php echo $email; ?>">
			<br>
			<div ><p style="color: red"><?php echo $errors['email']; ?></p></div>
			<label>drama Title: </label>
			<input type="text" name="title" value="<?php echo $title; ?>">
			<br>
			<div > <p style="color: red"><?php echo $errors['title']; ?></p></div>
			<label>Star Casts: </label>
			<input type="text" name="casts" value="<?php echo $casts; ?>">
			<br>
			<div> <p style="color: red"><?php echo $errors['casts']; ?></p></div>

			<div >
				<input type="submit" name="submit" value="submit">
			</div>
		</form>
	</section>

 	<?php include 'templates/footer.php'; ?>
</html>
