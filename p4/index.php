<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center><h2 class="text-primary">Factorial</h2>
            <form accept="#" method="POST">
			Enter no : <input type="number" name="n" class="form-control">
			<br/><br/>
			<input type="submit" name="submit" value="Calculate Factorial" class="btn btn-sm btn-primary">
		</center>
	</div>
<br/><br/><br/><br/>
</body>
</html>

<?php
if(isset($_POST['n']))
{
	$n = $_POST['n'];
	function fact($n)
	{
		if($n==0)
		{
			return 1;
		}
		else
		{
			return $n*fact($n-1);
		}
	}
	$r = fact($n);
	echo "<center><p class='text-success'>Factorial of $n is $r</p></center>";
}
?>
