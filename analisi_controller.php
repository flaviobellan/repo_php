<?php


$testo="";

if(isset($_POST["testo"]))
{
	$testo=$_POST["testo"];
	
}

echo $testo;
$conteggio = explode ( " ", $testo);
//$conteggio=array(); in questo modo inizializzo
echo " "."l'array contiene ".count($conteggio)." elementi" . "<br />";

//conto le parole più frequenti

$frequenzaparole=[];
foreach ($conteggio as $parola) {
	
	if(isset($frequenzaparole[$parola])) {
		
		$frequenzaparole[$parola]++;
		
	} else {
		
		$frequenzaparole[$parola]=1;
		}
	
	
	}
	arsort($frequenzaparole);
		
foreach($frequenzaparole as $i => $el){
	echo $i . "=" . $el . "<br />";
}

?>
