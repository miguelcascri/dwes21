<?php

  // crear conection
  $conn = mysqli_connect("localhost","root","","world");

  //consulta ejercicio1
  $consulta='SELECT Code,Name FROM country';

  //consultas ejercicio2
  $consulta1='SELECT Name FROM city ORDER BY Population DESC LIMIT 10';
  $consulta2='SELECT Name,Region FROM country ORDER BY SurfaceArea DESC LIMIT 10';
  $consulta3='SELECT Name FROM country WHERE LifeExpectancy IS NOT NULL ORDER BY LifeExpectancy ASC LIMIT 10';
  $consulta4='SELECT Continent,COUNT(*) FROM country GROUP BY Continent';
  $consulta5='SELECT B.Continent,COUNT(*) FROM city A INNER JOIN country B ON A.CountryCode = B.Code GROUP BY B.Continent';
  $consulta6='SELECT Name,Region,B.Language,B.Percentage,B.IsOfficial FROM country A INNER JOIN countrylanguage B ON A.Code = B.CountryCode WHERE A.Code IN(SELECT B.CountryCode FROM countrylanguage B WHERE (B.Language = "Spanish" AND B.IsOfficial = "T")) ORDER BY B.Percentage DESC LIMIT 10';

  //seleccionamos base de datos
  mysqli_select_db($conn,"world");

  //guardamos las consultas en variables
  $data= mysqli_query($conn,$consulta);
  
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ejercicio World</title>
    <!-- Esto es el link de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
      //Funcion de javascript que se usará para cambiar la URL al pulsar cada boton, con un switch
      function makeQuery(number){
        switch(number){
          case 1:
            location.href = "index.php?ejer=1";
            break;
          case 2:
            location.href = "index.php?ejer=2";
            break;
          case 3:
            location.href = "index.php?ejer=3";
            break;
          case 4:
            location.href = "index.php?ejer=4";
            break;
          case 5:
            location.href = "index.php?ejer=5";
            break;
          case 6:
            location.href = "index.php?ejer=6";
            break;
        }
      }
    </script>
</head>
<body>
  <div class="container">
  <!-- Esto es el ejercicio 1 -->
      <form action="main.php" method="post">
      <select name="country" class="btn-secondary" style="margin-left: 12rem;margin-top: 2rem;">
          <option id="<?php $value ?>">Seleccione un país:</option>
          <!-- select de los paises, recorro los datos de la base de datos y los muestro en el select-->
          <?php
            foreach($data as $values) {
              ?> <option value="<?php echo $values["Code"]; ?> "> <?php echo $values["Name"]; ?></option> <?php
            }
          ?>
      </select>
      <button type="submit" class="btn-dark">Enviar</button>
      <br>
      <br>
<!-- Botones del ejercicio 2 -->
      </form>
      <div class="btn-group mr-3" style="margin-bottom: 6px">
        <button class="btn-dark ml-3" id="1" onclick="makeQuery(1)">Las 10 ciudades con más población del mundo.</button><br>
        <button class="btn-dark mr-3" id="2" onclick="makeQuery(2)">Los 10 países con mayor tamaño del mundo.</button><br>
        <button class="btn-dark mr-3" id="3" onclick="makeQuery(3)">Los 10 países con menos esperanza de vida.</button><br>
        <button class="btn-dark mr-3" id="4" onclick="makeQuery(4)">Número de países por cada continente.</button><br>
        <button class="btn-dark mr-3" id="5" onclick="makeQuery(5)">Número de ciudades por cada continente.</button><br>
        <button class="btn-dark mr-3" id="6" onclick="makeQuery(6)">Los 10 países donde se habla más el español.</a></button><br>
      </div>
      <br>
<!-- Creo la table -->
    <table id="table" class="table table-primary" > 
      <?php
      //Esto es un if que comprobará la URL, y en función de ello, pintará una tabla distinta 
        if(isset($_GET["ejer"])){

          if($_GET["ejer"]=="1"){
            // Consulta 1
            $data1= mysqli_query($conn,$consulta1);
            echo "<caption style='text-align: center'>Lista de las 10 ciudades con más población del mundo.</caption>";
            foreach($data1 as $value){
              echo "<tr>";
              echo "<td style='text-align: center'>".$value["Name"]."</td>";
              echo "</tr>";
            };
          }

          if($_GET["ejer"]=="2"){
            // Consulta 2
            $data2= mysqli_query($conn,$consulta2);
            echo "<caption style='text-align: center'>Lista de los 10 países con mayor tamaño del mundo.</caption>";
            foreach($data2 as $value){;
              echo "<tr>";
              echo "<td style='text-align: center'>".$value["Name"]."</td>";
              echo "<td style='text-align: center'>".$value["Region"]."</td>";
              echo "</tr>";
            };
          }

          if($_GET["ejer"]=="3"){  
            // Consulta 3
            $data3= mysqli_query($conn,$consulta3);
            echo "<caption style='text-align: center'>Lista de los 10 países con menos esperanza de vida.</caption>";
            foreach($data3 as $value){;
              echo "<tr style='text-align: center'>";
              echo "<td style='text-align: center'>".$value["Name"]."</td>";
              echo "</tr>";
            };
          }

          if($_GET["ejer"]=="4"){  
            // Consulta 4
            $data4= mysqli_query($conn,$consulta4);
            echo "<caption style='text-align: center'>Número de países por cada continente.</caption>";
            foreach($data4 as $value){;
              echo "<tr>";
              echo "<td style='padding-left: 20%'>".$value["Continent"]."</td>";
              echo "<td >".$value["COUNT(*)"]."</td>";
              echo "</tr>";
            };
          }

          if($_GET["ejer"]=="5"){  
            // Consulta 5
            $data5= mysqli_query($conn,$consulta5);
            echo "<caption style='text-align: center'>Número de ciudades por cada continente.</caption>";
            foreach($data5 as $value){;
              echo "<tr>";
              echo "<td style='padding-left: 20%'>".$value["Continent"]."</td>";
              echo "<td >".$value["COUNT(*)"]."</td>";
              echo "</tr>";
            };
          }

          if($_GET["ejer"]=="6"){
            // Consulta 6
            $data6= mysqli_query($conn,$consulta6);
            echo "<caption style='text-align: center'>Lista de los 10 países donde el idioma español sea el que más se hable y sea idioma oficial.</caption>";
            foreach($data6 as $value){;
              echo "<tr>";
              echo "<td style='text-align: center'>".$value["Name"]."</td>";
              echo "<td style='text-align: center'>".$value["Region"]."</td>";
              // echo "<td >".$value["Language"]."</td>";
              // echo "<td >".$value["Percentage"]."</td>";
              // echo "<td >".$value["IsOfficial"]."</td>";
              echo "</tr>";
            };
          }
        }
    
    ?>
    </table>
      </div>
  </body>
</html>