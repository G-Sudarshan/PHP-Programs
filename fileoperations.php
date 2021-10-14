<?php
//Program for file operations: read write operation


echo "Opening A File";
$fp=fopen("./Newfile.txt",'w');

	if ($fp== false) {
		echo "<br><br>Error in file opening...";
	}else{
		echo "<br><br>File Opened Successfully...";
	}

	$str="Writing to a File: This is the practical based on the File Handling.";
	if(fwrite($fp, $str))
	{
		echo"<br><br>File Written Successfully...<br>";
	}
	fclose($fp);

?>