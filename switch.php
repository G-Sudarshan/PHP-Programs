<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
	<center>
		<h2>Welcome</h2>
		<form action="#" method="POST">
			<label for="no">Enter the No. : </label>
			<input type="" name="no"><br><br>
			<input type="submit" name="submit" value="Factorial">
			<input type="submit" name="submit" value="Even Odd">
			<input type="submit" name="submit" value="Prime Or Not">
			<input type="submit" name="submit" value="Positive Negative"><br>
		</form>
		<?php

			if(isset($_POST['no']))
			{
				$no = $_POST['no'];
				$a = $_POST['submit'];

				function fact($no)
				{
					$result=1;
					while ($no>0) 
					{
						$result = $result*$no--;
					}
					return $result;
				}

				echo "<br>.Ans : ";
				switch ($a) 
				{
					case 'Factorial':
						$r = fact($no);
						echo "Factorial of $no is $r";
						break;
					case 'Even Odd':
						if($no%2==0)
						{
							echo "$no is Even Number ";
						}
						else
						{
							echo "$no is Odd Number";
						}
						break;
					case 'Prime Or Not':
						$arr = [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,61,67,71,73,79,83,89,93,97];
						$flag = true;
						$i=0;
						for ($i=0; $i < 25 ; $i++) 
						{ 
							if($arr[$i]==$no)
							{
								echo "$no is Prime Number";
								$flag = false;
							}
						}
							if($flag)
							{
								echo "$no is not a Prime Number";
							}
						break;

						case 'Positive Negative':
							if($no > 0)
							{
								echo "$no is a Positive Number";
							}
							else if($no < 0)
							{
								echo "$no is a Negative Number";
							}
							else
							{
								echo "$no is 0";
							}
							break;

					default:
						echo "Please enter valid Choise";
						break;
				}
			}


		 ?>
	</center>
</body>
</html>