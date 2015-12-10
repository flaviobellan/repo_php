
	<p>Segreti del codice</p>

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
//per scorrere tutto un array stamando l'indice e tutti gli elementi numerati secondo posizione

echo "l'array contiene".count($lista)."elementi";

foreach ($lista as $i => $el) {
	echo "Elemento ".$i."-".$el;
	echo"<br>";
}

?>
<?php

if (isset($lista[$i])){
	echo $lista[$i];
}else{
	echo "l'elemento".$i."non esiste";
}
?>
