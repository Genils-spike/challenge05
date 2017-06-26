<?php
	function exo3($tab){
		$result = [];

		for($i = count($tab) - 2; $i < count($tab); $i++)
				array_push($result, $tab[$i]);
		
		return $result;
	}
?>