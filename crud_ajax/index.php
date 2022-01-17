<?php

// crear conection
$conn = mysqli_connect("localhost", "root", "", "world");

//preparamos sentencia
$consulta = 'SELECT Code,Name FROM country';

//seleccionamos base de datos
mysqli_select_db($conn, "world");

//ejecutamos consulta a bd
$data = mysqli_query($conn, $consulta);

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ejercicio World</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="ajax.js" defer></script>
</head>

<body onload>
    <div class="container" style="margin-top: 50px">
        <form action="result.php" method="post">
            <select name="country" id="country">
                <option id="<?php $value ?>">Seleccione un país:</option>

                <?php

                foreach ($data as $values) {
                ?> <option value="<?php echo $values["Code"]; ?>"><?php echo $values["Name"]; ?></option> <?php
                                                                                                        }
                                                                                                            ?>

            </select>
        </form>
        <br><br>
        <button onclick="show()">Mostrar ciudades</button>
        <button onclick="insert()">Insertar ciudad</button>
        <button onclick='copy(document.getElementById("country").value)'>Copiar ciudades</button>
        <br><br>

        <div id="write" hidden="true">
            <input type='text' id='newCity' style="margin-left: 3px">
            <button type='button' id="newCityBtn"
                onclick='save(document.getElementById("newCity").value,document.getElementById("country").value)'>
                Guardar cambios
            </button>
        </div>
        <br>
        <div id="results">

        </div>
    </div>
</body>

</html>


<script>
function insert() {
    $(document).ready(function() {
        $('#write').attr("hidden", false);
        console.log(document.getElementById("country").value);

        setTimeout(function() {
            $('#write').attr("hidden", true);
            $('#newCity').val("");
        }, 4000);
    });
}
</script>