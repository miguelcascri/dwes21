<?php

// crear conection
$con = mysqli_connect("localhost", "root", "", "world");

//seleccionamos base de datos
mysqli_select_db($con, "world");

if (isset($_POST["query"])) {

    if ($_POST["query"] == "1") {
        $consulta = 'UPDATE city SET Name = "' . $_POST["newName"] . '" WHERE  Name= "' . $_POST["name"] . '"';
        $con->query($consulta);
    }
    if ($_POST["query"] == "2") {
        $consulta = 'DELETE FROM city WHERE Name= "' . $_POST["name"] . '";';
        $con->query($consulta);
    }
    if ($_POST["query"] == "3") {
        $consulta = 'INSERT INTO city (Name, CountryCode) values ("' . $_POST["name"] . '", "' . $_POST["cc"] . '") ;';
        $con->query($consulta);
    }
    if ($_POST["query"] == "4") {
        $conex = new mysqli("localhost", "root", "", "world");
        mysqli_report(MYSQLI_REPORT_ALL);
        $conex->query('CREATE TABLE ' . $_POST["country"].'_2'.' AS SELECT * FROM City WHERE CountryCode = "' . $_POST["country"] . '"; ');
    }
}