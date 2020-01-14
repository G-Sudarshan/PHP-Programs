
<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center><h2 class="text-primary">Area and Perimeter of Rectangle</h2>
            <form accept="#" method="POST">
			Enter Length : <input type="number" name="l" class="form-control">
			<br/><br/>
			Enter Breadth : <input type="number" name="b" class="form-control">
			<br/><br/>
			<input type="submit" name="submit" value="Calculate Area and Perimeter of Rectangle" class="btn btn-sm btn-primary">
		</center>
	</div>
<br/><br/><br/><br/>
</body>
</html>

<?php
if(isset($_POST['l']))
{
	$l = $_POST['l'];
	$b = $_POST['b'];
	function calculate_area_and_perimeter_of_rect(&$l,&$b)
	{
		$a = $l*$b;
		$p = 2*$l+2*$b;
		echo "<center><h3><p class='text-primary'>Area of Rectangle is $a and Perimeter is $p</p></h3></center>";
	}
	calculate_area_and_perimeter_of_rect($l,$b);
	
}
?>
