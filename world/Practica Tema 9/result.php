<?php
  error_reporting(0);
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

    <title>Ejercicio World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <div class="container">

  <!-- Muestro los datos que pide el ejercicio -->
<?php // echo "<p>El país seleccionado ha sido: ".$country["Name"].", ".$_POST["country"].".<p>";?>
  <!-- Con mysqli_num_rows($nombre2) se muestran el numero de filas que se han devuelto de la consulta -->
<?php // echo "<p>Las ciudades existentes en ese país son: ".mysqli_num_rows($nombre2)."<p>";?>

<!-- select de las ciudades, recorro los datos de la base de datos y los muestro en el select-->
<table class="list-group" style="margin-righ: 20%">
  <caption>Las ciudades son:</caption>

  <?php
  // Consulta 2 (ciudades)
    foreach($nombre2 as $value) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?> <tr><td class="list-group-item list-group-item-primary"><?php echo $value["Name"]; 
    }
  ?>
 </table>

<!-- Con mysqli_num_rows($language) se muestran el numero de filas que se han devuelto de la consulta, como antes -->
<?php // echo "<p>Los lenguajes que se hablan en ese país son: ".mysqli_num_rows($language)."<p>";?>

<!-- select de los idiomas, recorro los datos de la base de datos y los muestro en el select-->
<ul class="list-group">
  <!-- <p>Los idiomas son:</p> -->

  <?php
  // Consulta 3 (idiomas)
    // foreach($language as $value) {
    // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?> <!-- <li class="list-group-item list-group-item-primary"> --> <?php // echo $value["Language"]; ?> <!-- </li> --> <?php
    // }
  ?>
</ul>
</div>

