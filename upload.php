<?php
	if(isset($_POST['submit'])){
		var_dump($_FILES);
		
		$fname = $_FILES['map']['name'];
		$fsize = $_FILES['map']['size'];
		$error = $_FILES['map']['error'];
		
		if($error !== 0) die("Upload error!");
		if(!preg_match('/(\.jpg|\.png|\.gif)$/i', $fname)) die("Only image files allowed.");
		if($fsize > 1 * 1024 * 1024) die("Max size 1MB");
		
		move_uploaded_file($_FILES['map']['tmp_name'], "uploads/$fname");
		
		echo '<img src="uploads/' . $fname . '" width="300">';
	}else{
		?>
		<form action="upload.php" enctype="multipart/form-data" method="post">
			Choose image to upload<br>
			<input type="file" name="map">
			
			<br><br>
			<input type="submit" name="submit" value="Upload">
		</form>
		<?php
	}