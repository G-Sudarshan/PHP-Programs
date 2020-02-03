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
	<center>
	<h5><label style="color: red;"><br><br>Practical No. 07</label></h5><br>
		<h5><label style="color: brown;">Q. Write a program to show the use of Multidimentional Array(Dynamic)</label></h5><br></center>
	<div style="display: flex;">
	<div style="flex:50%">
		<label>Array 1 :<br><br> </label>
		<label>Location [0][0] : </label>
		<input type="text" name="no1"><br><br>
		<label>Location [0][1] : </label>
		<input type="text" name="no2"><br><br>
		<label>Location [1][0] : </label>
		<input type="text" name="no3"><br><br>
		<label>Location [1][1] : </label>
		<input type="text" name="no4"><br><br>
	</div>
	<div style="flex:50%">
		<label>Array 2 :<br><br> </label>
		<label>Location [0][0] : </label>
		<input type="text" name="no1"><br><br>
		<label>Location [0][1] : </label>
		<input type="text" name="no2"><br><br>
		<label>Location [1][0] : </label>
		<input type="text" name="no3"><br><br>
		<label>Location [1][1] : </label>
		<input type="text" name="no4"><br><br>
	</div>
	
	
	<?php
		$a = $_POST['submit'];
		switch($a)
		{
			case '+': 
		}

	?>
	</div>
	<form action="#" method="POST">
		<input name="submit" type="submit" value="+" style="padding: 10px;">
		<input name="submit" type="submit" value="-" style="padding: 10px;">
		<input name="submit" type="submit" value="*" style="padding: 10px;">
	</form>
