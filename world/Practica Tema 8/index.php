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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script>

      function XML(){
        // Instanciación de objeto XMLHttpRequest en una variable llamada req
        let req = new XMLHttpRequest();
        // Asigno en una variable llamada country el país seleccionado en el select
        var country = document.getElementById("country").value;

        // Método open del objeto XMLHttpRequest, necesita tres parámetros, 
        // primero el método por el que se pasa la información, 
        // segundo la ruta del archivo del que se quiere obtener la información,
        // tercero un booleano, el cual true significa asíncrono
        req.open("POST", "result.php", true);

        // El objeto antes creado, queda escuchando hasta que se reciba 
        // la respuesta del servidor, se le asigna en este caso una función flecha sin parámetros
        req.onreadystatechange = () => {
          // Si la respuesta obtenida posteriormente 
          // del servidor es igual a 4 (osea, la información es completa)
          if(req.readyState == 4){
            // Se introducirá en el elemento especificado 
            // (el cual tiene un id = results, que es un div)
            // los datos obtenido en la request
            document.getElementById("results").innerHTML = req.responseText;
          }
        }
        // Instanciación del objeto FormData en variable llamada data
        var data = new FormData();
        // Metodo append en el obejto data antes creado, al cual le introduzco dos parámentros
        // el primer parametro es el nombre del elemento, y el segundo es el valor del elemento
        // el cual esta almacenado en una variable que he creado antes
        data.append("country", country);

        // Se termina la petición o request con el método send, 
        // al cual se le pasa por parámentro un objeto con los datos que se
        // quieren pasar por la petición
        req.send(data);
      }

      function JQuery(){
        // Asigno en una variable llamada country el país seleccionado en el select
        var country = document.getElementById("country").value;
        // Función asíncrona de JQuery
        $.ajax({
          // Parámetros que necesita la petición, metodo, url 
          // y datos que se quieren pasar por la request
          type: "POST",
          url: "result.php",
          data: { "country" : country },
          
          // Si la función es exitosa, se ejecuta la función
          success: function (response){
              // La función sobrescribe el elemento con id = results, 
              // función de jquery para cambiar el html de un elemento con el id indicado 
              // (Es lo mismo que el getElementById("results).innerHTML)
              $("#results").html(response);
          }
        })
      }
</script>
</head>
<body>
  <div class="container" style="margin-top: 50px">
    <form action="result.php" method="post">
      <select name="country" id="country">
          <option id="<?php $value ?>">Seleccione un país:</option>
          <!-- select de los paises, recorro los datos de la base de datos y los muestro en el select-->
          <?php
            foreach($data as $values) {
              ?> <option value="<?php echo $values["Code"]; ?> "> <?php echo $values["Name"]; ?></option> <?php
            }
          ?>
      </select>
      <button type="submit" >Enviar</button>
    </form>
    <br><br>
    <button onclick="XML()" >Obtener con XMLHttpRequest</button>
    <button onclick="JQuery()">Obtener con jQuery</button>
    <br><br>
    <div id="results">

    </div>
    </div>
</body>
</html>

