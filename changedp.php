<?php
error_reporting(0);
include_once "classes/user.class.php";
$user = new user();
$user = $_GET['usr'];
?>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Bride | Change Profile Image</title>
    <link rel='stylesheet' href='css/foundation.css' />
</head>
<body>
	<form method="post" action='upload.php' enctype='multipart/form-data'>
		<label>Upload the new photograph here :</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	</form>
</body>
</html>