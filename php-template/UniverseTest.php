<div id='tmp'></div>
<?php
	$html = str_replace("\n","",file_get_contents('fichier.txt'));
	$html = str_replace("\r","",$html);
	echo "<script>";
	echo "document.getElementById('tmp').innerhtml ='$html';";
	echo "console.log('$html');";
	echo "</script>";
	echo $html;
?>
