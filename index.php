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

$images = get_images( 'images/', true );

$last_path = '';

foreach( $images as $src ) {

	$src_path = explode('/', $src);
	$filename = array_pop($src_path);

	array_shift($src_path); // remove 'images/' from beginning

	if( count($src_path) ) {
		$src_path = implode('/', $src_path);
		if( $last_path != $src_path ) {
			echo '<h2>'.$src_path.'</h2>';
			$last_path = $src_path;
		}
	}

	echo '<label><input type="radio" name="image" value="'.$src.'"> <img src="'.$src.'" width="300"></label>';
}

?>

</body>
</html>