<?php
	function exo7($tab, $occ){
		$count = 0;

		for($i = 0; $i < count($tab); $i++)
			$count = $count + substr_count($tab[$i], $occ);

		return "Il y a en tout ".$count." ".$occ." dans le tableau";
	}
?>