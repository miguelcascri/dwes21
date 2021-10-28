<?php

session_destroy();
header("Location: "."index.php?message=2");
// header("Location: "."index.php");

?>