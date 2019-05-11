<DOCTYPE HTML >
<HTML>
<form action="modificar.php" method="post" >
<H3>DOCUMENT DEL PERSONA QUE VOLS MODIFICAR</H3>
NUMERO DE DOCUMENT:<input type="number" name="ndoc"><br>
DOCUMENT<br>
<input type="radio" name="doc" value="dni">dni
<input type="radio" name="doc" value="nie">nie
<input type="radio" name="doc" value="pas">pas


<h4>afegir feina </h4>

feina:<input type="text" name="feina1"><br>

<h4>afegir formacio </h4>

formacio:<input type="text" name="formacio1"><br>


<h4>afegir idiomes </h4>
idiome:<input type="text" name="idiome"><br>

<h4>afegir malaties infectades </h4>
malaties infectades:<input type="text" name="mal_inf"><br>

<h4>afegir malaties no infectades </h4>
malaties no infectades:<input type="text" name="mal_nor"><br>
<br>
<input type="submit">
</form>

<?php


$servername = "localhost" ;
$username= "root" ;
$password = "202555";
$DAT_NAME = "putxet" ;
$conn = new mysqli($servername, $username, $password ,$DAT_NAME );



    $doc = $_POST["doc"] ;
    $ndoc = $_POST["ndoc"] ;
	$feina = $_POST["feina1"] ;
	$formacio = $_POST["formacio1"] ;
	$idioma	= $_POST["idiome"] ;
	$mal_inf = $_POST["mal_inf"] ;
	$mal_nor= $_POST["mal_nor"] ;
    //echo "$doc" ;
	//echo "$ndoc" ;


	if ( $feina != null){

	  $sql = "insert into FEINA VALUES('$doc','$ndoc','$feina')" ;
        if ($conn->query($sql) != TRUE) {
		if ( $conn->sqlstate == 23000)  echo "el numero de document que has enterat i el tipus del document no estan ala base de dades o be que la feina que acabes de afegir ya estaba abans <br> ";
		ELSE echo $conn->error ;
   }
	}


		if ( $idioma != null){

	  $sql = "insert into IDIOMES VALUES('$doc','$ndoc','$idioma')" ;
        if ($conn->query($sql) != TRUE) {
		if ( $conn->sqlstate == 23000)  echo "el numero de document que has enterat i el tipus del document no estan ala base de dades o be que la idiome que acabes de afegir ya estaba abans <br> ";
		ELSE echo $conn->error ;
   }
	}


	if ( $mal_inf != null){

	  $sql = "insert into mal_inf VALUES('$doc','$ndoc','$mal_inf')" ;
        if ($conn->query($sql) != TRUE) {
		if ( $conn->sqlstate == 23000)  echo "el numero de document que has enterat i el tipus del document no estan ala base de dades o be que la malaltia que acabes de afegir ya estaba abans <br> ";
		ELSE echo $conn->error ;
   }
	}


	if ( $mal_nor != null){

	  $sql = "insert into mal_nor VALUES('$doc','$ndoc','$mal_nor')" ;
        if ($conn->query($sql) != TRUE) {
		if ( $conn->sqlstate == 23000)  echo "el numero de document que has enterat i el tipus del document no estan ala base de dades o be que la malaltia que acabes de afegir ya estaba abans <br> ";
		ELSE echo $conn->error ;
   }
	}


	if ( $formacio != null){

	  $sql = "insert into ESTUDI VALUES('$doc','$ndoc','$formacio')" ;
        if ($conn->query($sql) != TRUE) {
			if ( $conn->sqlstate == 23000)  echo "el numero de document que has enterat i el tipus del document no estan ala base de dades o be que la formacio que acabes de afegir ya estaba abans <br> ";
		ELSE echo $conn->error ;
   }
	}






?>

</HTML>
