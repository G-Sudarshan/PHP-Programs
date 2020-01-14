<!DOCTYPE html>
<html>
<head>
	<title>Power of n</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center><h2 class="text-primary">Power of n</h2>
            <form accept="#" method="POST">
			Enter no : <input type="number" name="n" class="form-control">
			<br/><br/>
			Enter power : <input type="number" name="p" class="form-control">
			<br/><br/>
			<input type="submit" name="submit" value="Calculate powerof n" class="btn btn-sm btn-primary">
		</center>
	</div>
<br/><br/><br/><br/>

</body>
</html>

<?php
if(isset($_POST['n']))
{
	$n = $_POST['n'];
	$p = $_POST['p'];
	function power($n,$p)
	{
		$r = $n**$p;
		echo "<center><h3><p class='text-primary'>$p Power of $n is $r</p></h3></center>";
	}
	power($n,$p);
	
}
?>
