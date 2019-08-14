<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>upload</title>

</head>

<body>
<?php
if (!empty($_FILES)){
	$ext = pathinfo($_FILES['file_upload']['name'],PATHINFO_EXTENSION);
	// if (!in_array($ext,['gif','png','jpg','jpeg'])) {
	// 	die('not support');
	if ($ext) {
		echo "good! ";
	}
	$new_name = __dir__.'/uploadfiles/'.$_FILES['file_upload']['name'];
	if (!move_uploaded_file($_FILES['file_upload']['tmp_name'], $new_name)) {
		die('error uploading file - check destination');
	}
	die('uploaded success:'.$new_name);
}
?>
<form method="post" enctype="multipart/form-data">
	File:<input type="file" name="file_upload">
	<input type="submit">
</form>
</body>
</html>

