<?php
	function exo4($tab){
		$result = [];
		$size = round(count($tab) / 2);
		unset($tab[$size]);

		foreach ($tab as $value)
			array_push($result, $value);

		return $result;
	}
?>