<?php
	$html = file_get_contents('Universe.php');
	echo "<script>";
	echo "document.getelementbyid('tmp').innerhtml ='" . $html . "'";
	echo "</script>";
	echo $html;
?>

<div id='tmp'></div>
