<?php

$rows = 5; $i=0; $j;
for($i=$rows;$i>0;$i--){
	for($j=$rows;$j>=$i;$j--)
	{
		echo $j;
	}
	echo "<br>";
}

?>
<?php 
$rows = 5; 
for($i=5;$i>0;$i--)
{
	for($j=5;$j>=$i;$j--)
	{
		echo $j;
	}
	echo "<br>";
}
?>