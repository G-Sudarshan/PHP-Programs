<!DOCTYPE html>
<html>
<head>
	<title>First Practical</title>
</head>
<body>
	<center>
		<form method="POST" action="#">
		<br/><br/>
	Enter no: &nbsp;<input type="" name="n"><br/><br/>
	<input type="submit" name="submit" value="Factorial">
	<input type="submit" name="submit" value="Prime">
	<input type="submit" name="submit" value="Even Odd">
	<input type="submit" name="submit" value="Positive Negative">

	<br/><br/>
	
</form>


<?php
if(isset($_POST['n']))
{ 
	$n = $_POST['n'];
	$a = $_POST['submit'];
	function fact($n)
	{  $result=1;
		while($n>0)
		{
			$result = $result*$n--;
		}
		return $result;
	}
	switch ($a) {
		case 'Factrial': // Factorial Case
			$r = fact($n);
			echo "Factorial of $n is $r";
			break;
		case 'Prime':  //Prime no. case
// 			$arr = [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,61,67,71,73,79,83,89,93,97];
// 			$flag=true;
// 			$i =0;
// 			for($i=0;$i<25;$i++)
// 			{
// 				if($arr[$i]==$n)
// 				{
// 					echo "$n is a prime no.";
// 					$flag = false;
// 				}
// 			}
// 			if($flag)
// 			{
// 				echo "$n is not a prime no";
// 			}
// 			break;
			if($n==2||$n==3||$n==5||$n==7)
				{
					echo "<b>$n is A Prime Number.</b>";
				}
				elseif($n%2!=0){
					if($n%3!=0&&$n%5!=0&&$n%7!=0)				
				{
					echo "<b>$n is A Prime Number</b>";
				}
				else
				{
					echo "<b>$n is NOT a Prime Number</b>";
				}}
				else
				{
					echo "<b>$n is NOT a Prime Number</b>";
				}
			break;
		case 'Even Odd':	//Even-odd case
			if($n%2==0)
			{
				echo "$n is Even no.";
			}
			else
			{
				echo "$n is odd no.";
			}
			break;
		case 'Positive Negative':	//Positive negative case
			if($n>0)
			{
				echo "$n is Positive no.";
			}
			else if($n<0)
			{
				echo "$n is Negative no.";
			}
			else
			{
				echo "$n is 0";
			}
			break;
		
		default:
			echo "Please Enter valid choice";
			break;
	}
}
?>
</center>
</body>
</html>
