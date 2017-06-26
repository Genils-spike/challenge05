<?php
function exo6($tab, $val){
	$result = [];

	for($i = 0; $i < count($tab); $i++)
		array_push($result, $val.substr($tab[$i],1));

	return $result;
}
?>