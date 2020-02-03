<!DOCTYPE html>
<html>
<head>
	<title>Multidimenstion Array</title>
	<style type="text/css">
		body
		{
			font-family: verdana;
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<form action="#" method="POST">
		<label style="color: red;"><br><br>Practical No. 07</label><br><br>
		<label style="color: brown;">Q. Write a program to show the use of Multidimentional Array</label><br><br>
	</form>
	<?php
		$i=0;
		$j=0;
		$arr1 = array();
		$arr1[0][0] = 1;
		$arr1[0][1] = 2;
		$arr1[1][0] = 3;
		$arr1[1][1] = 4;
		function display($arr)
		{
			
			for ($i=0; $i<=1 ; $i++) 
			{ 
				echo "| ";
				for ($j=0; $j<=1 ; $j++)
				{
				echo $arr[$i][$j]."  ";
				}
				echo "| <br>";
			}
		}
		echo "Array 1 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
		$arr2 = array();
		$arr2[0][0] = 1;
		$arr2[0][1] = 2;
		$arr2[1][0] = 3;
		$arr2[1][1] = 4;
		display($arr1);
		echo "Array 2 : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
		display($arr2);

		$arr3 = array();
		for ($i=0; $i<=1; $i++) 
		{
			 for ($j=0; $j<=1; $j++)
			 {
			 	$arr3[$i][$j] = $arr1[$i][$j] + $arr2[$i][$j];
			 }
		}
		echo "Addition : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>";
		display($arr3);
	?>
</body>
</html>
