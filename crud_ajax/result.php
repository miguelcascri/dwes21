<?php
// Con este post recojo el nombre del codigo del país seleccionado
$selected_country = $_POST["country"];

// crear conection
$con = mysqli_connect("localhost", "root", "", "world");

//preparamos sentencias
$consulta = "SELECT Name FROM city WHERE CountryCode='$selected_country'";

//seleccionamos base de datos
mysqli_select_db($con, "world");

//ejecutamos consulta a bd
$nombre = mysqli_query($con, $consulta); // consulta para ciudades

?>


<html>
<title>Ejercicio World</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="ajax.js"></script>

<body>
    <div class=" container">

        <table class="list-group">
            <caption>Las ciudades son:</caption>

            <?php
            $count = 1;

            foreach ($nombre as $value) {

            ?><script> </script>
            <tr>
                <td>
                    <input type="text" id="<?php echo $count; ?>"
                        value="<?php echo $value["Name"]; ?>">
                <td>
                    <button type="button"
                        onclick="saveCity('<?php echo $value["Name"]; ?>',document.getElementById('<?php echo $count; ?>').value)">
                        Guardar cambios
                    </button>
                </td>
                <td>
                    <button type="button" onclick="deleteCity('<?php echo $value["Name"]; ?>')">
                        Borrar ciudad
                    </button>
                </td>

                <?php
                $count++;
            }
                ?>
            </tr>

        </table>

    </div>

</body>

</html>