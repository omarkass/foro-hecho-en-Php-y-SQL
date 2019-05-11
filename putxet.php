
<!DOCTYPE HTML>
<html>
<body>

<form action="putxetP.php"method="post">

NOM:  <input type="text" name="name">
primer cognom:  <input type="text" name="1c">
segon cognom:  <input type="text" name="2c">

<br>DOCUMENT:
<input type="radio" name="doc"  value="dni">dni
<input type="radio" name="doc"  value="nie">nie
<input type="radio" name="doc"  value="pas">passaport<br>

<br>NUMERO DE DOCUMENT:<input type="number" name="ndoc"><br>

<br>CADUSITAT: <input type="date" name=cad> <br>


<br>DATA DE NEIXAMENT:<input type="date" name="data_n"><br>

<br>NACIONALITAT:<input type="text" name="nacionalitat"><br>

<br>DATA D'ENTERADA: <input type="date" name=data_e> <br>

<br>HABITATGE: <input type="radio" name="vivenda"
value="casa ocupada">casa ocupada
<input type="radio"
name="vivenda" value="pis compartit">pis compartit
<input type="radio"
name="vivenda" value="pis ">pis
<input type="radio"
name="vivenda" value="center">center<br>

<br>ESTUDIS: <input type="radio" name="estudis"
value="cap">cap
<input type="radio" name="estudis" value="primarya">primària
<input type="radio" name="estudis" value="eso">eso
<input type="radio" name="estudis" value="grau mig">grau mig
<input type="radio" name="estudis" value="grau superior">grau superior
<input type="radio" name="estudis" value="univeristat">univerisitat<br>

<br>FEINES: <input type="text" name="FEINES"> <br>

<br>MANERA D'ENTERADA: <input type="text" name="n_enter"> <br>

<br>NIVELL DE DiFICULTAT DE VIATGE:
<input type="radio" name="dviatge" value="1">1
<input type="radio" name="dviatge" value="2">2
<input type="radio" name="dviatge" value="3">3
<input type="radio" name="dviatge" value="4">4
<input type="radio" name="dviatge" value="5">5
<input type="radio" name="dviatge" value="6">6
<input type="radio" name="dviatge" value="7">7
<input type="radio" name="dviatge" value="8">8
<input type="radio" name="dviatge" value="9">9
<input type="radio" name="dviatge" value="10">10 <br>


<br> MALALTIES INFECTADES <input type="text" name="malin"> <br>
<br> MALALTIES NO INFECTADES <input type="text" name="mal"> <br>


<br>FAMILIA ESTRUCTURADA:
<input type="radio" name="family" vaule="si">si
<input type="radio" name="family" value="no">no<br>

<br>FORMACIO: <input type="text" name="form_act"> <br>


<br> IDIOMES: <br>
 <input type="checkbox" name="idiomes" value="angles">angles
<input type="checkbox" name="idiomes1" value="catala">catala
<input type="checkbox" name="idiomes2" value="castella">castella
<input type="text" name="idiomes3">altres<br>


<br>derivacio a altres recusos:
<input type="text" name="recus"><br>

<br> acceptar putxet condiciones:
<input type="radio" name="cond" value="si">si <br>

<br> <input type="submit">
</form>
</body>
</html>
