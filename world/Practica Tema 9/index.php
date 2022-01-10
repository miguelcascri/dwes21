<?php
  // Con este post recojo el nombre del codigo del país seleccionado
  $selected_country = $_POST["country"];

  // crear conection
  $conn = mysqli_connect("localhost","root","","world");

  //preparamos sentencias
  $consulta1="SELECT Name FROM country WHERE Code='$selected_country'";
  $consulta2="SELECT Name FROM city WHERE CountryCode='$selected_country'";
  $consulta3="SELECT Language FROM countrylanguage WHERE CountryCode='$selected_country'";

  //seleccionamos base de datos
  mysqli_select_db($conn,"world");

  //ejecutamos consulta a bd
  $nombre= mysqli_query($conn,$consulta1); // consulta para nombre del pais
  $nombre2= mysqli_query($conn,$consulta2); // consulta para ciudades
  $language= mysqli_query($conn,$consulta3); // consulta para idiomas

  //Consulta 1 (pais)
  foreach($nombre as $value) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
    $country = $value; // Guardo el nombre en la variable $country, para incluirlo en el html
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio World</title>
</head>
<body>
  <!-- Muestro los datos que pide el ejercicio -->
<?php echo "<p>El país seleccionado ha sido: ".$country["Name"].", ".$_POST["country"].".<p>";?>
<?php echo "<p>Las ciudades existentes en ese país son: ".mysqli_num_rows($nombre2)."<p>";?>

<!-- select de las ciudades, recorro los datos de la base de datos y los muestro en el select-->
<select>
  <option>Las ciudades son:</option>

  <?php
  // Consulta 2 (ciudades)
    foreach($nombre2 as $value) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?> <option> <?php echo $value["Name"]; ?></option> <?php
    }
  ?>
 </select>

<?php echo "<p>Los lenguajes que se hablan en ese país son: ".mysqli_num_rows($language)."<p>";?>

<!-- select de los idiomas, recorro los datos de la base de datos y los muestro en el select-->
<select>
  <option id="<?php $value ?>">Los idiomas son:</option>

  <?php
  // Consulta 3 (idiomas)
    foreach($language as $value) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?> <option> <?php echo $value["Language"]; ?></option> <?php
    }
  ?>
</select>
</body>
</html>

