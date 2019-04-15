<?php
include("conexiondb.php");

$send_result = array();

 $con = mysql_connect($host, $user, $pw) or die ("problemas con el servidor");

 mysql_select_db($db, $con);

 $numeros = count($_POST['origen']);
if($numeros < 2){
      $send_result['mensaje'] = "Seleccione 2 opciones de origen ";
      $send_result['codigo'] = "02"; 
} else {
  $origen = implode(",", $_POST['origen']);
  $sql = "INSERT INTO votos (nombre, alias, rut, email, idregion, idcandidato, origen) VALUE ('$_POST[nombre]', '$_POST[alias]', '$_POST[rut]', '$_POST[email]', '$_POST[selec_region]', '$_POST[selec_candidato]', '$origen')";
  $result = mysql_query($sql, $con);
 
   if ($result) {
     $send_result['mensaje'] = "Gracias por votar";
     $send_result['codigo'] = "01";   
   }else {
     $send_result['mensaje'] = "Error al votar, usted ya voto: " . mysql_error();
     $send_result['codigo'] = "02";   
   }
}





  echo json_encode($send_result, JSON_UNESCAPED_UNICODE);
?>