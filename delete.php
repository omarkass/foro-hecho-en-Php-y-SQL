<DOCTYPE html>
<html>

<form action="delete.php"method="post">
NUMERO DE DOCUMENT: <input type="number" name=ndoc > <br>

<br> DOCUMENT:
<input type="radio" name="doc" value="pas" >passaport
<input type="radio" name="doc" value="dni" >dni
<input type="radio" name="doc" value="nie" >nie <br>
<br> <input type="submit">
</form>

<?php 

$servername = "localhost" ;
$username= "root" ;
$password = "202555";
$DAT_NAME = "putxet" ;
      $doc = $_POST["doc"] ;
      $ndoc = $_POST["ndoc"] ;
     
 
  
      
        $S= new mysqli($servername,$username,$password,$DAT_NAME) ;
        
         $sql = "select* from mal_inf where  DNI= '$ndoc' and TIPUS_DOC= '$doc' " ;
               if( $S->QUERY($sql) == true ) {
        echo "nooo";
    }
    
    
        
      $sql = "delete from mal_inf where  NUMERO_DE_DOCUMENT= '$ndoc' and TIPUS_DE_DOCUMENT= '$doc'";
       $S->QUERY($sql) ;
    
    
      $sql = "delete from mal_nor where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'" ;
        $S->query($sql) ;
        
      $sql = "delete from VIATGE where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'";
        $S->QUERY($sql) ;
        
      $sql = "delete from IDIOMES where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'";
         $S->QUERY($sql) ;
        
      $sql = "delete from FEINA where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'";
         $S->QUERY($sql) ;
        
      $sql = "delete from ESTUDI where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'";
         $S->QUERY($sql) ;
     
    $sql = "delete from P_INFO where NUMERO_DE_DOCUMENT = '$ndoc' and TIPUS_DE_DOCUMENT = '$doc'" ;
     $S->QUERY($sql) ;
    
      ?>
</html>