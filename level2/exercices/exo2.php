<?php
	function exo2($str){
		$result = preg_split("/[\s,]+/", $str);
		return $result;
	}
?>