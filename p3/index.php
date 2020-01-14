<!DOCTYPE html>
<html>
<head>
	<title>Array functions and String functions</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
	<h2 class="text-primary">Array Functions</h2>
	<p class="text-success"><?php
		$arr = array(2,453,567,78,2,3,45,67,8);
		$arr3 = [234,34,567,879,90,345,23423,4234];
		$arr2 = [
					'a'=>100,
					'b'=>200,
					'c'=>300,
					'd'=>400,
					'e'=>500
				];
		echo "Count of arr[] : ";
		echo count($arr);
		echo "<br/><br/>";
		echo "Changed case lower to upper : ";
		print_r(array_change_key_case($arr2, CASE_UPPER));
		//var_dump($arr2);
		echo "<br/><br/>";
		echo " array merge : ";
		print_r(array_merge($arr,$arr3));
		echo "<br/><br/>";
		echo "array search for 400 : ";
		echo array_search(400, $arr2);
		echo "<br/><br/>";
		echo "array replace : ";
		print_r(array_replace($arr, $arr3));
		echo "<br/><br/>";
		echo "range 1 to 100 : ";
		$arr4 = range(1, 100);
		print_r($arr4);
		echo "<br/><br/>";
		echo "sort : ";
		sort($arr);
		print_r($arr);
		echo "<br/><br/>";
		echo "r sort : ";
		rsort($arr);
		print_r($arr);
		echo "<br/><br/>";
		echo "reverse : ";
		print_r(array_reverse($arr));
	?></p>

	<br/><br/><br/><br/>

	<h2 class="text-primary">String Functions</h2>

	<p class="text-success">

		<?php
			$str = "A computer program does what you tell it to do, not what you want it to do.";
			echo "String length : ";
			echo strlen($str);
			echo "<br/><br/>";
			echo "word count : ";
			echo str_word_count($str);
			echo "<br/><br/>";
			echo "reverse string : ";
			echo strrev($str);
			echo "<br/><br/>";
			echo "String position : ";
			echo strpos($str,"tell");
			echo "<br/><br/>";
			echo "replace : ";
			echo str_replace("computer", "super computer", $str);
			echo "<br/><br/>";
			echo "explode : ";
			$s = "Logic will get you from A to B. Imagination will take you everywhere";
			print_r(explode(" ",$s));
			echo "<br/><br/>";
			$a = explode(" ",$s);
			echo "implode : ";
			echo implode(" ", $a);
			echo "<br/><br/>";
			echo bin2hex("hello world");
			echo "<br/><br/>";
			echo hex2bin("68656c6c6f20776f726c64");
		?>
		
	</p>


</div>

</body>
</html>
