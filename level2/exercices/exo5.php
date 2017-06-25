<?php
	function exo5($tab){
		$i = 0;
		$result = "";

		while($i < count($tab)){
			if(strlen($result) < strlen($tab[$i])){
				$result = $tab[$i];
			}
			$i++;
		}

	return $result;
	}
?>