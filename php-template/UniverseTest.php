<div id='tmp'></div>
<?php
	$html = str_replace("\n","",file_get_contents('Universe.php'));
	$html = str_replace("\r","",$html);
	echo "<script>";
	echo "document.getElementById('tmp').innerhtml ='$html';";
	echo "console.log('$html');";
	echo "</script>";
	echo $html;
?>
