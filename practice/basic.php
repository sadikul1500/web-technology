<?php 
	//echo 'hello, madam';
	$first_name = 'mi';
	$last_name = 'riyad';
	$age = 13;
	$radius = 5;
	define('PI', 3.1416);

	echo $first_name . ' ' . $last_name. "<br>";
	echo "My name is $first_name<br>";
	echo "He said, \"I'm fine\"<br> ";
	echo strlen($last_name). "<br>";
	echo strtoupper($first_name). "<br>"	;
	echo PI*$radius**2 . "<br>";


	$list = [2,4,6,34,6,7,8];
	$names = ['a','b', 'c', 'd'];

	for($i=0; $i<count($list); $i++)
	{
		echo $list[$i]. ' x ';
	}
	echo '<br>';

	foreach($names as $name)
	{
		echo $name . '<br>';
	}

	echo '<br>';

	$list[] = 344; //append a value
	array_push($list, 56);
	$newlist = array_merge($list, $names);

	print_r($list);
	echo "<br>";
	print_r($newlist);
	echo '<br>';

	$jursey = ['messi' => 10, 'mithun' => 8, 'ozil' => 8, 'iniesta' => 8, 'xavi' => 6, 'ronaldo' => 7];
	echo $jursey['mithun'].'<br>';

	$jursey['sakib'] = 75;
	print_r($jursey);
	echo '<br>';
	echo count($jursey).'<br>';


	$multi = [[1,2,3,4], ['a','b', 3, 4,6], [23,45,34]];
	print_r($multi);
	print_r($multi[1]);
	print_r($multi[1][2]);
	$multi[] = ['name' => 'bro', 'age' => 23];

	echo '<br>';
	print_r($multi);
	echo '<br>';
	//print_r(array_pop($multi));
	$poped = array_pop($multi);


	echo '<br>';
	//print_r($poped);

	foreach($multi as $single)
	{
		$i = 0;
		while($i < count($single))
		{
			echo $single[$i] . '   ';
			$i++;
		}
		echo '<br>';
	}


	echo '<br>';
	print_r($multi);

	for($i=0; $i<10; $i++)
	{
		echo $i;
	}

	echo '<br>';

	echo 50 > 12; //1
	echo 5 === '5'; //strict comparision prints nothing(null)
	echo 5 == '5'; // 1

	echo '<br>';
	echo true == 1;
	echo false == "";

	$test = 'corn salad';

	function myFunc($x, $y)
	{
		global $test;
		$test = 'chicago typewriter';
		echo '<br>function called '. $test.'<br>';
		echo $x+$y.'<br>';
	}

	myFunc(102,324);
	echo $test.'<br>';

	include('oppas.php');
	//require 'oppas.php';






 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>My first php file</title>
 </head>
 <body>
 	<h1> <?php echo 'hello, madam'; ?> </h1>
 	<div> <?php echo $first_name; ?></div>
 	<div> <?php echo $age; ?></div>
 	<div> <?php echo PI; ?></div>

 	<div>
 		<p> Names </p>
 		<ul>
 			<?php foreach($names as $name){ ?>		
 					<h3><?php echo $name.'<br>'; ?> </h3> 
 				<?php } ?>		 
 		</ul>
 	</div>

 	<div>
 		<<?php include 'oppas.php'; ?>
 	</div>

 
 </body>
 </html>