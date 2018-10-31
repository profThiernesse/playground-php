<div id='tmp'>dd</div>
<?php
	$html = str_replace(PHP_EOL,"",file_get_contents('Universe.php'));
	echo "<script>";
	echo "document.getelementbyid('tmp').innerhtml ='" . $html . "'";
	echo "console.log('$html')";
	echo "</script>";
	echo $html;
?>


