<?php
$target_dir = "namain/";
$target_file = $target_dir . basename($_FILES["tes"]["name"]);
if (move_uploaded_file($_FILES["tes"]["tmp_name"], $target_file))
	{
		echo "The File" . basename($_FILES["tes"]["name"])."has been uploaded.";
		$file_name = basename($_FILES["tes"]["name"]);
	}
	else{
		echo "Sorry, there was on error uploading your file.";
	}
?>
<img src="<?php echo $target_dir.$file_name;?>">
