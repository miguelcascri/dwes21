<?php

session_start();
session_destroy();
setcookie("color","black",time()-6000000000000000000);
// header("Location: "."index.php");
header("Location: "."index.php?msj=2");
// Destrucción de la cookie, para resetear el valor del color del texto

?>