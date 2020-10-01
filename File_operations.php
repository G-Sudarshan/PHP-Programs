<?php
//Program for file operations: read write operation

echo "Opening A File";
$fp=fopen("./Newfile.txt",'w'); //Opens file in write mode
	if ($fp== false) {
		echo "<br><br>Error in file opening...";
	}else{
		echo "<br><br>File Opened Successfully...";
	}
$str="Writing to a File: This is the practical based on the File Handling.";
	if(fwrite($fp, $str))   //Writing Data to file
	{
		echo"<br><br>File Written Successfully...<br>";
	}
	fclose($fp);  //File close from write mode
	$fp=fopen("./Newfile.txt",'r');     //File open in read mode
echo "<br><br>Reading a File...";
	$f_size=filesize("./Newfile.txt");    //Calculate file size
	$data=fread($fp,$f_size);         //Reading data from file
echo "<br><br>Size Of File:".$f_size;
echo "<br><br>Data Of File:<pre>".$data."<pre>";
	fclose($fp);
?>
