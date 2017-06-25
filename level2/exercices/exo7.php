<?php
	function exo7($tab, $occ){
		$i = 0;
		$count = 0;

		while($i < count($tab)){
			$count = $count + substr_count($tab[$i], $occ);
			$i++;
		}

		return "Il y a en tout ".$count." ".$occ." dans le tableau";
	}
?>