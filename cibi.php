<html>

<h2>Un form che legge da un Arrey</h2>

<form method="get">

<input type="text" name="cibo" />	
<input type="submit" value="cerca"/>

</form>


</html>

<?php

include "database.php";

if (isset($_GET["cibo"])){

$cibo=$_GET["cibo"];



//echo $cibieingredienti[$cibo];

if (isset($cibieingredienti[$cibo]))
{
		echo "Ingredienti di ".$cibo.": ".$cibieingredienti[$cibo];
}		
else {
	
	echo $cibo . " non esistente";
	
	}
}

?>
