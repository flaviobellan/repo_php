<p>Arrey associativi</p>

<?php

//inizializzo la funzione con la sintassi del for each
$dizionario=array("fish"=>"pesce","snail"=>"lumaca");
//metto a indice una stringa invece di un numero
$dizionario["cat"]="gatto";
$dizionario["dog"]="cane";
$dizionario["horse"]="cavallo";
$dizionario["pig"]="porco";
$dizionario["wolf"]="lupo";
// => sta a indicare corrisponde, quindi a chiave corrisponde elemento

//una serie di funzioni di php che agiscono sull'arrey

//asort($dizionario);
//ksort($dizionario);
//rsort($dizionario);
//arsort($dizionario);
krsort($dizionario);

foreach($dizionario as $eng => $ita)
{
	echo "A "."$eng"." corrisponde "."$ita";
	echo "<br>";
}
?>
