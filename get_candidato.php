<?php

include("conexiondb.php");

 $con = mysql_connect($host, $user, $pw) or die ("problemas con el servidor");

 mysql_select_db($db, $con) or die ("problemas con la base de datos");

 $sql = "SELECT * FROM candidatos";
 $candidato = mysql_query($sql, $con);

 if (!$candidato) {
  echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
  exit;
}

if (mysql_num_rows($candidato) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
}

?>