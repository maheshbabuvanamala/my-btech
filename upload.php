<?php // upload.php
if ($_FILES)
{
$name = $_FILES['filename']['name'];
echo $_FILES['filename']['tmp_name'].'~'.$name;
if(move_uploaded_file($_FILES['filename']['tmp_name'], $name))
 echo "Uploaded successfully completed <a href='..'>Click here</a> to go to home";
}
else
{
	echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='Upload.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10' />
<input type='submit' value='Upload' />
</form>
_END;
}
echo "</body></html>";
?>


