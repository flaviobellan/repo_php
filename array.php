	<p>Segreti del codice: gli array</p>

<?php
//file by poliedronord
	$lista=array();
//ho creato un array vuoto
		array_push($lista,"ciao");
		array_push($lista,"42");
//questo aggiunge elementi all'array in testa
		array_unshift($lista,"hello");

//sposto l'ordine degli elementi, al contrario di push, che lo mette al fondo

//array multitipizzato

//accedo all'array tramite il corrispondente indice
		array_unshift($lista,"cavallo");
		echo $lista[1];
	?>
	<br />
<?php	
//chiedo di mostrarmi l'elemento in posizione 1
		echo $lista[0];
//chiedo di mostrarmi l'elemento in posizione 0

//echo array_pop($lista);

//echo array_shift($lista);
?>
<br />
<?php
//per scorrere tutto un array stampando l'indice e tutti gli elementi numerati secondo posizione

echo "l'array contiene".count($lista)."elementi";

foreach ($lista as $i => $el) {
	echo "Elemento ".$i."-".$el;
}

?>
<br />
<?php

if (isset($lista[$i])){
	echo $lista[$i];
}else{
	echo "l'elemento".$i."non esiste";
	
}
?>
<p>Scriviamo il primo ciclo for</p>
<?php
//come funziona il ciclo for: richiede 3 condizioni separate da punto e virgola.
//prima condizione: istanzia una VAR
//condizione di permanenza nel ciclo: fino a quando vale
//incremento della VAR: ++ vuol dire la viariabile stessa pipù il suo valore
for ($VAR_1=0; $VAR_1<10; $VAR_1++){
	echo $VAR_1;
	echo "<br>";
}
?>
<?php
//alle variabili stringa si può applicare la stessa sintassi di un array per indicizzare gli elementi
$nome="andrea";
$nome[3];
strlen($nome);
$nome[strlen($nome)-1];

//calcolare lunghezza della stringa e stamparla a rovescio
for ($i=1; $i<=strlen($nome); $i++){
	//echo $nome[$i -1];
	echo  $nome[strlen($nome) -$i];
}
//ricorda che tonde sono funzioni e quadre sono array!!
//sono andato a contare partendo da zero e uso nome della stringa per estrarre utlimo carattere: -1 o andrebbe fuori
?>
