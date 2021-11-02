<?php

session_destroy();
header("Location: "."index.php?msj=2");
// Destrucción de la cookie, para resetear el valor del color del texto
setcookie("color","black",time()-60);
// header("Location: "."index.php");

?>