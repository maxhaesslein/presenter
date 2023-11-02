<?php
include('helper.php');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>Presenter</title>

	<script type="text/javascript">
		var Presenter = {
			'baseurl': "<?= baseurl() ?>",
		};
	</script>

	<link rel="stylesheet" href="index.css" type="text/css" media="all">
	<script type="text/javascript" src="index.js"></script>

</head>
<body>

<p><button id="openPopup">Open PopUp</button></p>

<label><input type="radio" name="image" value="" checked> <span class="none">- none -</span></label>
<?php

$path = 'images/';

if( $handle = opendir($path) ){
	while( false !== ($entry = readdir($handle)) ){

		if( substr($entry, 0, 1) == '.' ) continue;

		echo '<label><input type="radio" name="image" value="'.$entry.'"> <img src="'.$path.$entry.'" width="300"></label>';
	}
	closedir($handle);
}

?>

</body>
</html>