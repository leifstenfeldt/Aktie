<?php
	$homepage = @file_get_contents("http://www.msn.com/da-dk/finans/aktieoplysninger/fi-172.1.VELO.CSE");

	preg_match('/<span.*\"currentvalue\">(\d{1,3},\d{1,4})<\/span>/i', $homepage, $matches); 

//Search for valuee in:	<span class="currentval" data-role="currentvalue">0,8980</span>


	$resultat =  ($matches!=null) ? floatval(str_replace(",", ".",$matches[1])):"Error";
	echo "VELO.CSE : " . $resultat;
?>
