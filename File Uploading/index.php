<!DOCTYPE html>
<html>
<head>
	<title>File Uploading in php</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<center>
		<h2><label style="color: red;"><br><br>Practical</label></h2>
		<h3><label style="color: brown;">Q. File Uploading Program </label></h3><br>
	<form action="#" method="POST" enctype="Multipart/form-data">
		<input type="file" name="image" class="btn btn-success"><br><br>
		<input type="submit" class="btn btn-info">
	</form>
	<?php 

		if(isset($_FILES['image']))
		{
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];

			$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));	// File name will get converted to lowercase and remaining code will return file extension & also this will reduce code..		
			$extension = array("jpeg","jpg","png");
			$error = array();
			if(in_array($file_ext, $extension)=== false)
			{
				$error[] = "Extension not allowed please enter valid extension!!!";
			}
			if($file_size > 2097152)
			{
				$error[] = "file size must be up to 2 MB";
			}
			if(empty($error)== true)
			{
				if(move_uploaded_file($file_temp, "image/.".$file_name))	// Checked for file uploaded or not
				{
					echo "<h5 class='text-success'><br>File Successfully Uploaded</h5><br>";
					echo "<h5 class='text-primary'>File Name : $file_name</h5>";
					echo "<h5 class='text-primary'>File Extentension : $file_ext</h5>";
					echo "<h5 class='text-primary'>File Type : $file_type</h5>";
					echo "<h5 class='text-primary'>File Size : $file_size KB</h5>";
				}
				else{
					echo "<h5 class='text-danger'><br>Something went wrong..! File not uploaded..!!</h5><br>";
				}
			}
			else 
			{
				print_r($error);
			}
		}

	 ?>
	 </center>
</body>
</html>
