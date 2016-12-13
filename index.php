<?php

function getDynamicGeneratedNums ($a, $b) {

	if (empty($a) & empty($b)){
		echo "Упс... ";
	}
	else {
		if ($a != $b) {
			return $a.' '.$b;
		}
		
		if ($a == $b) {
			return $a;
		}
	}
}

echo getDynamicGeneratedNums(1,2);

?>
