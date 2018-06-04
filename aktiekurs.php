<?php
	$homepage = @file_get_contents("http://www.msn.com/da-dk/finans/aktieoplysninger/fi-172.1.VELO.CSE");
	preg_match('/<span.*\"currentvalue\">(\d{1,3},\d{1,2})<\/span>/i', $homepage, $matches); 
	$resultat =  ($matches!=null) ? floatval(str_replace(",", ".",$matches[1])):"Error";
	echo $resultat;
?>
