<?php
  include("get_candidato.php");
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Votantes</title>
</head>
<body>
  <div>
    <h2>Formulario de votacion</h2>
  </div>
  <div>
    <form id="form" method="post" action="#">
      <div>
        <label>Nombre y apellido</label>
        <input type="text" name="nombre" required >
      </div>
      <div>
        <label>Alias</label>
        <input type="text"  name="alias" minlength="5">
      </div>
      <div>
        <label>RUT</label>
        <input type="text" name="rut">
      </div>
      <div>
        <label>Email</label>
        <input type="text" name="email">
      </div>
      <div>
          <label>Candidatos</label>
          <select name="selec_candidato" id="selec_candidato">
              <option value="">Seleccione candidato</option>                 
              <?php 
                  while($reg=mysql_fetch_array($candidato)){
                      echo "<option value=".$reg['ID'].">".$reg['nombre_candidato']."</option>";
                  }                           
              ?>  
      </select>
      </div>
      <div>
        <label>Como se entero...</label>
          <input type="checkbox" name="origen[]" value="web"> Web
          <input type="checkbox" name="origen[]" value="tv"> TV<br>
      </div>
      <input type="submit" value="Votar">
    </form>
    
  </div>

  <script src="jquery-3.4.0.min.js"></script>
  <script src="generic.js"></script>
</body>
</html>