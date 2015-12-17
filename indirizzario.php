

<html>
<head>

</head>
<body>
<form method="post">
	
	<h2>Nome</h2>
<input name="nome" type="text"/><br />
  <h2>Cognome</h2>
  <input name="cognome" type="text"/><br />
<h2>Indirizzo</h2>
  <input name="indirizzo" type="text"/><br />
  <h2>Telefono</h2>
  <input name="tel" type="text"/><br />
  <h2>Cellulare</h2>
  <input name="ncell" type="text"/><br />
  <br /><br />
  <input type="submit" value="Invia!"/><br />

</form>

</body>


</html>
<?php

include "libreria_classi.php";

if (isset($_POST["nome"]) &&
	isset($_POST["cognome"]) &&
	isset($_POST["indirizzo"]) &&
	isset($_POST["tel"]) &&
	isset($_POST["ncell"])){
	//il nome di una classe ha la maiuscola per convenzione
	//new crea un'istanza della classe e la mette nella nuova variabile
	$indirizzo = new IndirizzoEsteso();
	//vai a guardare campo nome dell'oggetto contenuto in indirizzo
	$indirizzo->nome=$_POST["nome"];
	$indirizzo->cognome=$_POST["cognome"];
	$indirizzo->indirizzo=$_POST["indirizzo"];
	$indirizzo->tel=$_POST["tel"];
	$indirizzo->ncell=$_POST["ncell"];
	//echo $indirizzo->nome." ";
	//echo $indirizzo->cognome." ";
	//vado richiamare il metodo creato
	//echo $indirizzo->nomeCompleto();
	//echo $indirizzo->indirizzo." ";
	//echo $indirizzo->tel." ";
	//ora richiamo tutto da unico metodo
	echo $indirizzo->visualizza();
}

	

?>



