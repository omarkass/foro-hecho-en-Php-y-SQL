<?php

$servername = "localhost" ;
$username= "root" ;
$password = "202555";
$DAT_NAME = "putxet" ;

// Create connection
//;
//echo "$doc";
if (isset ($_POST["ndoc"] )  == false ) echo "Has d'entrar un número de document" ;
elseif ( isset ($_POST["doc"] )  == false ) echo "Has de tria el tipus del document";
elseif ( isset ($_POST["vivenda"] )  == false ) echo "Has d'entrar el tipus de la habitatge";
elseif ( isset ($_POST["estudis"] )  == false ) echo "Has d'entrar els estudis";
elseif ( isset ($_POST["dviatge"] )  == false ) echo "Has d'entrar la dificultat del viatge";
elseif ( isset ($_POST["cond"] )  == false ) echo "Has d'acceptar les condicions de putxet ";

ELSE {
$conn = new mysqli($servername, $username, $password ,$DAT_NAME );
$doc = $_POST["doc"] ;
$ndoc = $_POST["ndoc"] ;
$name = $_POST ["name"] ;
$cog1=$_POST ["1c"] ;
$cog2=$_POST ["2c"] ;
$nacionalitat=$_POST ["nacionalitat"] ;
$cad=$_POST ["cad"] ;
$vivenda=$_POST ["vivenda"] ;
$data_n=$_POST ["data_n"] ;
$family=$_POST ["family"] ;
$data_enter = $_POST["data_e"] ;
$estudis = $_POST["estudis"]  ;

$manera_enter = $_POST["n_enter"]  ;
$dif_viatge = $_POST["dviatge"] ;







$recursos = $_POST["recus"] ;
$cond_putxet = $_POST["cond"] ;
echo "$data_enter" ;


$sql = "INSERT INTO P_INFO VALUES('$doc','$ndoc','$name','$cog1','$cog2','$nacionalitat','$cad','$vivenda','$data_n','$family','$estudis','$recursos','$cond_putxet')";
if ($conn->query($sql) != TRUE) {
echo $conn->error ;
}

if (isset ($_POST["form_act"] ) and $_POST["form_act"] != null ){
	$formacio_act = $_POST["form_act"]  ;
$sql = "INSERT INTO ESTUDI  VALUES('$doc','$ndoc','$formacio_act')";
if ($conn->query($sql) != TRUE){
echo $conn->error;
}}

if (isset ($_POST["FEINES"] ) and $_POST["FEINES"] != null ){
	$feina = $_POST["FEINES"]  ;
$sql = "INSERT INTO FEINA VALUES('$doc','$ndoc','$feina')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}


if ( isset ($_POST["idiomes"] ) ){
	$ang  = $_POST["idiomes"]  ;
$sql = "INSERT INTO IDIOMES VALUES('$doc','$ndoc','$ang')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}


if (isset ($_POST["idiomes2"] ) ){
	$cast = $_POST["idiomes2"]  ;
$sql = "INSERT INTO IDIOMES VALUES('$doc','$ndoc','$cast')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}



if (isset ($_POST["idiomes1"] ) ){
	$cat = $_POST["idiomes1"]  ;
$sql = "INSERT INTO IDIOMES VALUES('$doc','$ndoc','$cat')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}


if (isset ($_POST["idiomes3"] )   and $_POST["idiomes3"] != null){
	$altres = $_POST["idiomes3"]  ;
$sql = "INSERT INTO IDIOMES VALUES('$doc','$ndoc','$altres')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}



$sql = "INSERT INTO VIATGE VALUES('$doc','$ndoc','$manera_enter','$dif_viatge', '$data_enter')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}




if (isset ($_POST["malin"] )  and $_POST["malin"] != null){
	$malaties_inf = $_POST["malin"]  ;
$sql = "INSERT INTO mal_inf VALUES('$doc','$ndoc','$malaties_inf')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}


if (isset ($_POST["mal"] )and $_POST["mal"] != null ){
	$malalties_nor = $_POST["mal"]  ;
$sql = "INSERT INTO mal_nor VALUES('$doc','$ndoc','$malalties_nor')" ;
if ($conn->query($sql) != true) {
echo $conn->error ;
}
}
$conn->close();

}

?>
