<!DOCTYPE html>
<html>
<head>
	<title>Practical No.2</title>
	<style type="text/css">
		body
		{
			font-family: verdana;
		}
	</style>
</head>
<body>
	<form action="#" method="POST">
		<center><br><br>
			<label>WELCOME<br><br></label>
			<label><br><br>Enter No. : <br><br></label>
			<input type="text" name="no1"><br><br>
			<input type="submit" name="submit" value="Factorial">
			<input type="submit" name="submit" value="Even or Odd">
			<input type="submit" name="submit" value="Prime or Not">
		</center>
		<?php 
		$a=$_POST['no1'];
		$b=$_POST['submit'];

		echo "Ans : "; 

		?>
	</form>
</body>
</html>