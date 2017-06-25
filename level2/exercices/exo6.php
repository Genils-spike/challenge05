<?php
function exo6($tab, $val){
	$i = 0;
	$result = [];

	while($i < count($tab)){
		array_push($result, $val.substr($tab[$i],1));
		$i++;
	}
	return $result;
}
?>