echo $html;
<?php
	$html = str_replace("\n","",file_get_contents('Universe.php'));
	$html = str_replace("\r","",$html);
	echo "<script>";
	echo "var el = document.createElement( 'html' );";
	echo "el.innerHTML ='$html';";
	echo "console.log(el);";
	echo "console.log(el.getElementsByTagName('p'));";
	echo "TECHIO> message PROUT";
	echo "</script>";
	
?>
