<!DOCTYPE html>
<html>
<head>
	<title>Operator-2</title>
	<style type="text/css">
		body{ font-family: verdana; }
	</style>
</head><body><center>
		<form action="#" method="POST">
		<label><br><b>CALCULATOR</b><br><br></label><label style="color: red;">NOTE : For Logical Operator Please use value in the form of 0 and 1.</label><br><br>
		<label for="no1">Enter No.1 : <br></label><input type="text" name="no1"><label for="no2"><br><br>Enter No.2 : <br> </label><input type="text" name="no2">
		<br><br>
		<label>Arithmatic Operators  : <br><br></label>
		<input type="submit" name="submit" value="+">
		<input type="submit" name="submit" value="-">
		<input type="submit" name="submit" value="*">
		<input type="submit" name="submit" value="/">
		<input type="submit" name="submit" value="%">
		<label><br><br>Logical Operators  : <br><br></label>
		<input type="submit" name="submit" value="&&">
		<input type="submit" name="submit" value="||">
		<input type="submit" name="submit" value="!">
		<input type="submit" name="submit" value="^">
		<br><br>
		</form>
			<?php  $a= $_POST['no1'];
			$b= $_POST['no2'];
			$c= $_POST['submit'];
			echo "Ans : ";($c=='+')?var_dump($a+$b): ($c=='-')?var_dump($a-$b): ($c=='*')?var_dump($a*$b): ($c=='/')?var_dump($a/$b): ($c=="%")?var_dump($a%$b): (""); 
			echo ($c=='&&')? ($a&&$b)? "Condition is True": "Condition is False":($c=='||')? ($a||$b) ? "Condition is True": "Condition is False":($c=='!')? !($a>$b) ? "Condition is True": "Condition is False": ($c=='^')?($a XOR $b)?"Condition is True": "Condition is False":"";
			?>
</center></body></html>