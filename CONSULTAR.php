<DOCTYPE HTML>
<HTML>
<h2> consutes </h2>
<form action="CONSULTAR.php"method="post">

<h3> consulto tots </h3> <br>
<input type="radio" name="cons" value="sii">consulta

<h3> CONSULTA PER NOM I COGNOMS  </h3>
NOM:<input type="text" name="name">
primer cognom:  <input type="text" name="1c">
segon cognom:  <input type="text" name="2c"><br>

<br><h3> CONSULTA PER TIPUS I NUMERO DE DOCUMENT  </h3>
DOCUMENT:
<input type="radio" name="doc"  value="dni">dni
<input type="radio" name="doc"  value="nie">nie
<input type="radio" name="doc"  value="pas">passaport<br>

<br>NUMERO DE DOCUMENT:<input type="number" name="ndoc"><br>


<br><h3> CONSULTA PER MALALTIES </h3>
 MALALTIES INFECTADES <input type="text" name="malin"> <br>
<br> MALALTIES NO INFECTADES <input type="text" name="mal"> <br>


<br> <h3>ALTRES </h3>

ESTUDIS: <input type="radio" name="estudis"
value="cap">cap
<input type="radio" name="es" value="primarya">primària
<input type="radio" name="es" value="eso">eso
<input type="radio" name="es" value="grau mig">grau mig
<input type="radio" name="es" value="grau superior">grau superior
<input type="radio" name="es" value="univeristat">universitat<br>
feina <input type="text" name="fe"> <br>
formacio <input type="text" name="fo"> <br>
idioma <input type="text" name="id"> <br>

data d'enterada <BR>
 DE:<input type="date" name="data_enter1"> &nbsp; &nbsp;&nbsp;&nbsp;   A:<input type="date" name="data_enter2"> <br>

data de neixament <BR>
 DE:<input type="date" name="data_neix1">  &nbsp;&nbsp;&nbsp;&nbsp;   A:<input type="date" name="data_neix2"><br>


HABITATGE: <input type="radio" name="vi"
value="casa ocupada">casa ocupada
<input type="radio"
name="vi" value="pis compartit">pis compartit
<input type="radio"
name="vi" value="pis ">pis
<input type="radio"
name="vi" value="center">center<br>






<br> <input type="submit">
</form>
</HTML>

<?php


function imprimir ($result , $conn){

	while ($row = $result->fetch_assoc() ) {
		echo "<br>"."****************************************************************************"."<br>" ;
		$ndoc = $row["ndoc"]  ;
		$doc = $row["doc"]  ;


		$sql = "select * from p_info where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = mysqli_query($conn,$sql) ;
		$row1=mysqli_fetch_assoc($r);
		echo "NOM : ".$row1["nom"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ." PRIMER COGNOM :  ".$row1["cog1"] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . " SEGON COGNOM :  ".$row1["cog2"] ."<br> ". "<br> "." TIPUS DE DOCUMENT :  ". $row1["doc"] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ."NUMERO DE DOCUMENT :  ". $row1["ndoc"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "." CADUSITAT DE DOCUMENT :  ". $row1["cad"]."<br>"."<BR>" ;
		echo "DATA DE NEIXAMENT : ". $row1["date_neix"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ". "ESTUDIS: ".$row1["estudis"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."FAMILIA ESTRUCTURADA : ".$row1["familia"] . "NACIONALITAT: ".$row1["nacionalitat"]."<br>" ."<BR>" ;
		echo "derivació a altres recusos: " .$row1["recu"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ."HABITATGE : " . $row1["vivenda"] ;

		$sql = "select * from viatge where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = mysqli_query($conn,$sql) ;
		$row1=mysqli_fetch_assoc($r);

		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."DATA D'ENTERADA : ".$row1["data_enterada"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ." DIFICULTAT DE VIATGE :  ".$row1["dificultat_enterada"] ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " . " MANERA DE ENTERAR :  ".$row1["manera_de_enterada"] ."<br> ". "<br>" ;
		$sql = "select formacio_act from estudi where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = $conn->query($sql) ;
		echo "FORMACIONS :  " ;
		while ($row1 = $r->fetch_assoc() ) ECHO $row1["formacio_act"] ."&nbsp;&nbsp;&nbsp" ;

		$sql = "select feina from feina where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = $conn->query($sql) ;
		echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ."FEINES :  " ;
		while ($row1 = $r->fetch_assoc() ) ECHO $row1["feina"] ."&nbsp;&nbsp;&nbsp" ;


			$sql = "select idioma from idiomes where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = $conn->query($sql) ;
		echo  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " ."IDIOMES :  " ;
		while ($row1 = $r->fetch_assoc() ) ECHO $row1["idioma"] ."&nbsp;&nbsp;&nbsp" ;




			$sql = "select MALALTIES_NO_INFECTUESES from mal_nor where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = $conn->query($sql) ;
		echo  "<br>". "<br>" ."MALALTIES NO INFECTADES :  " ;
		while ($row1 = $r->fetch_assoc() ) ECHO $row1["MALALTIES_NO_INFECTUESES"] ."&nbsp;&nbsp;&nbsp" ;



			$sql = "select MALALTIES_INFECTUESES from mal_inf where doc = '$doc' and ndoc = '$ndoc' " ;
		$r = $conn->query($sql) ;
		echo  "<br>". "<br>" ."MALALTIES NO INFECTADES :  " ;
		while ($row1 = $r->fetch_assoc() ) ECHO $row1["MALALTIES_INFECTUESES"] ."&nbsp;&nbsp;&nbsp" ;



	}
	}


$servername = "localhost" ;
$username= "root" ;
$password = "202555";
$DAT_NAME = "putxet" ;

	if (isset ($_POST["name"]))
	$nom = $_POST["name"] ;
else $nom = null ;


if (isset ($_POST["1c"]))
 $cog1 = $_POST["1c"] ;
else $cog1 = null ;


if (isset ($_POST["2c"]))
 $cog2 = $_POST["2c"] ;
else $cog2 = null ;







$es = null ;
if (isset ( $_POST["es"] )) $es = $_POST["es"] ;



$conn = new mysqli($servername, $username, $password ,$DAT_NAME );



if (isset ($_POST["cons"])) {

	 $sql = "delete from resultat " ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
	 }
	else {
	$sql = "insert into resultat (select ndoc ,doc from p_info ) " ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
	 }
	else {
	$sql = "select * from resultat" ;
		$result = $conn->query($sql) ;
		if (  $result->num_rows > 0 )
		imprimir ($result , $conn) ;
	else echo "per les combinacions de dades que has entera no hi ha ningu registrat " ;
	}
	}
}
else if ( isset ($_POST["doc"])) {
if ($_POST["ndoc"] != null or $_POST["doc"] != null )  {
 if ( $_POST["ndoc"] == null or  $_POST["doc"] == null  ) echo "has de entrar valors al tipus del document com el numero del document " ;
 else {
	$ndni = $_POST["ndoc"] ;
	$dni = $_POST["doc"] ;
	 $sql = "call dni ('$ndni' ,'$dni')" ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
}
else {
		$sql = "select * from resultat" ;
		$result = $conn->query($sql) ;
		if (  $result->num_rows > 0 )
		imprimir ($result , $conn) ;
	else echo "per les combinacions de dades que has entera no hi ha ningu registrat " ;
	}
}
}}
elseif ($nom  != null or $cog1 != null or $cog2 != null )  {


	 $sql = "call nom ('$nom','$cog1','$cog2')" ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
	}
	else {
		$sql = "select * from resultat" ;
		$result = $conn->query($sql) ;
		if (  $result->num_rows > 0 )
		imprimir ($result , $conn) ;
	else echo "per les combinacions de dades que has entera no hi ha ningu registrat " ;
	}
}
ELSE IF ($_POST["malin"] != null or $_POST["mal"] != null  ) {
$malin = $_POST["malin"] ;
	$mal = $_POST["mal"] ;
	 $sql = "call mall ('$malin','$mal')" ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
	}
else {
		$sql = "select * from resultat" ;
		$result = $conn->query($sql) ;
		if (  $result->num_rows > 0 )
		imprimir ($result , $conn) ;
	else echo "pels combinacions  de dades que has enterat no hi ha ningu registrat " ;
	}
}

ELSE if (  $es != null or $_POST["fe"] != null or $_POST["fo"] != null
or $_POST["id"] != null  or $_POST["data_neix1"] != null or $_POST["data_neix2"] != null or $_POST["data_enter1"] != null or $_POST["data_enter2"] != null or $_POST["vi"] != null )
{
$id =   $_POST["id"]  ;
$fo  = $_POST["fo"]  ;
$fe =  $_POST["fe"]  ;
$data_enter1 = $_POST["data_enter1"]  ;
$data_enter2 = $_POST["data_enter2"]  ;
$data_neix1 = $_POST["data_neix1"]  ;
$data_neix2 =  $_POST["data_neix2"] ;
$vi ='' ;
if (isset ($_POST["vi"] ) )
$vi =  $_POST["vi"]  ;


$sql = "call resta ('$es','$fe' ,'$fo','$id' , '$data_enter1' , '$data_enter2' , '$data_neix1' , '$data_neix2' , '$vi')" ;
	 if ($conn->query($sql) != TRUE) {
	echo $conn->error ;
	}
	else {
		$sql = "select * from resultat" ;
		$result = $conn->query($sql) ;
		if (  $result->num_rows > 0 )
		imprimir ($result , $conn) ;
	else echo "per les combinacions de dades que has entera no hi ha ningu registrat " ;
	}
}
?>
