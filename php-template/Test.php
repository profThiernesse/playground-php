<?php

	include("simple_html_dom.php");
	//$exp = "^h1--div--([.*ul--[li-id-(li-.*-){3,}].*])$";
	// var_dump($argv[1]);
	// var_dump($argv[2]);
	
	// var_dump(realpath($argv[1]));
	// var_dump(file_get_contents($argv[1]));
	
	check_DOM($argv[1],$argv[2]);
	
	function check_DOM($file,$exp) {
		// $html = file_get_html($file);
		$html = str_get_html(file_get_contents($file));
		$dom_string = go_DOM($html->root);
		
		$dom_string = str_replace("comment--","",$dom_string);
		
		// echo "DOM\n";
		// echo $dom_string . "\n";
		// echo "DOM\n";
		
		//var_dump($html);
		
		$exp = str_replace(array("[","]"),array("\[","\]"),$exp);
		
		if (preg_match("#$exp#",$dom_string)) {
			echo "TECHIO> success true\n";
		}
		else {
			echo "TECHIO> success false\n";
			echo "TECHIO> message --channel 'Error' 'DOM failed'\n";
		}
	}
	
	function go_DOM($html) {
		
		$retval ="";
		foreach($html->children as $children) {
			$retval .= $children->tag . element_attr($children) ;
			if (!empty($children->children)) $retval .= "[" . go_DOM($children) . "]";
		}
		return $retval;
	}
	
	function element_attr($tag) {
		$retval="-";
		$attrs = $tag->attr;
		ksort($attrs);
		foreach($attrs as $attr => $value)
			$retval.=$attr;
		$retval.="-";
		return $retval;
	}
	
	function require_tag($html,$tag) {
		$element = $html->find($tag);
		if (empty($element)) {
			echo "TECHIO> message --channel 'Error' '$tag tag not found.'\n";
		}
		return $element;
	}	
?>
