<?php
	function exo3($tab){
		$result = [];
		$size = count($tab);
		$i = $size - 2;

		while($i < $size){
				array_push($result, $tab[$i]);
				$i++;
			}
		
		return $result;
	}
?>