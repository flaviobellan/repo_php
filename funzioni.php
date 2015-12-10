<?php
//Funzioni. Sintassi. function nome della funzione ($VAR) {
//	return risultato}
//
function aggiungi1($VAR) {
	$VAR++;
	return $VAR;}

function RibaltaStringa($nome) {
	$r="";	
for ($i=1; $i<=strlen($nome); $i++);{

$r=$r.$nome[$i];
}
return$r;
}

?>
