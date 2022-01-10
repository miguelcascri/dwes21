<?php

  // crear conection
  $conn = mysqli_connect("localhost","root","","world");

  //preparamos sentencia
  $consulta='SELECT Code,Name FROM country';

  //seleccionamos base de datos
  mysqli_select_db($conn,"world");

  //ejecutamos consulta a bd
  $data= mysqli_query($conn,$consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ejercicio World</title>
</head>
<body>
    <form action="index.php" method="post">
      <select name="country">
          <option id="<?php $value ?>">Seleccione un país:</option>
          <!-- select de los paises, recorro los datos de la base de datos y los muestro en el select-->
          <?php
            foreach($data as $values) {
              ?> <option value="<?php echo $values["Code"]; ?> "> <?php echo $values["Name"]; ?></option> <?php
            }
          ?>
      </select>
      <button type="submit" placeholder="">Enviar</button>
    </form>
</body>
</html>