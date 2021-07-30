<?php 
	include 'config/db_connect.php';

	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($conn, $_POST['id']);

		$sql = "delete from dramas where id = $id";

		if(mysqli_query($conn, $sql))
		{
			echo 'deleted<br>';
			header('Location:index.php');
		}
		else
		{
			echo 'query error: ' . mysqli_error($conn) . '<br>';
		}
	}

	if(isset($_GET['id']))
	{
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "select * from dramas where id = $id";

		$result = mysqli_query($conn, $sql);

		//fetch result
		$drama = mysqli_fetch_assoc($result);

		mysqli_free_result($result);

		//close connection
		mysqli_close($conn);
		print_r($drama);
	}
	



 ?>


 <!DOCTYPE html>
 <html>
 
 <?php include 'templates/header.php' ?>

 <h2>DETAILS</h2>

 <div>
 			<?php if($drama): ?>
 		
	 			<?php echo  '<br>'; ?>
	 			<?php echo 'drama name: ' .htmlspecialchars($drama['title']) . '<br>'; ?>
	 			<!--<?php echo htmlspecialchars($drama['casts']) . '<br>'; ?> -->
	 			<h4>casts: <br></h4>
	 			<ul>
	 				<?php foreach(explode(',', $drama['casts']) as $cast){ ?>
	 					<li><h5><?php echo htmlspecialchars($cast) .'<br>'; ?></h5></li>

	 				<?php } ?>
	 			</ul>
	 			<?php echo 'created at: ' .  htmlspecialchars($drama['created_at']) . '<br>'; ?>
	 			<?php echo 'created by: ' .  htmlspecialchars($drama['email']) . '<br>'; ?>
	 			
	 			<a href="index.php">Go Back</a>
	 			<?php echo  '<br>'; ?>

	 			<form action="details.php" method="POST">
	 				<input type="hidden" name="id" value="<?php echo $drama['id']; ?>">
	 				<input type="submit" name="delete" value="delete">
	 			</form>

	 		<?php else: ?>
	 			<h5> no such drama exists</h5>
	 		<?php endif; ?>
 		
 	</div>

 <?php include 'templates/footer.php' ?>


 </html>
