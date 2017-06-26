<?php
	function exo5($tab){
		$i = 0;
		$result = "";

		for($i = 0; $i < count($tab); $i++)
			if(strlen($result) < strlen($tab[$i]))
				$result = $tab[$i];

	return $result;
	}
?>