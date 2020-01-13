<?php 
$rows = 3; $i; $j;
for($i=1;$i<=$rows;$i++){
	for($j=1;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
}

for($i=$rows-1;$i>0;$i--){
	for($j=1;$j<=$i;$j++)
	{
		echo "*";
	}
	echo "<br>";
}
?>