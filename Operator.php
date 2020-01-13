<!DOCTYPE html>
<html>
<head>
	<title>Operator</title>
</head>
<body>

	<center>
		<?php 

			echo "<br><br>Menu<br>";
			echo "1.Arithmatic Operators<br>";
			echo "1.Addition<br>";
			echo "2.Substration<br>";
			echo "3.Multiplication<br>";
			echo "4.Division<br>";
			echo "5.Modulous<br>";

		?>
		<form action="#" method="POST">
			<label for="no1"><br>Enter No.1</label>
			<input type="text" name="no1"><br><br>
			<label for="no2">Enter No.2</label>
			<input type="text" name="no2"><br><br>
			<label for="ch1">Enter Operator Choice</label>
			<input type="text" name="ch1"><br><br>
			<label for="ch2">Enter Operation Choice</label>
			<input type="text" name="ch2"><br><br>
			<input type="submit" name="submit">
		</form>
		<?php 

			$a=(int) $_POST['no1'];
			$b=(int) $_POST['no2'];
			$c=(int) $_POST['ch1'];
			$d=(int) $_POST['ch2'];

			echo ($c==1)? (($d==1)?var_dump($a+$b): (($d==2)?var_dump($a-$b): (($d==3)?var_dump($a*$b): (($d==4)?var_dump($a/$b): ("Invalid Choice") ) ) ) ) :("Invalid Choice");

		?>
	</center>

</body>
</html>