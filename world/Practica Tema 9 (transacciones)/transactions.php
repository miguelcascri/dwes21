<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio World Transactions</title>
</head>

<body>
    <?php

  function transaction1()
  {
    $conex = new mysqli("localhost", "root", "", "world");

    $conex->autocommit(false);
    $conex->begin_transaction();

    try {
      $conex->begin_transaction();
      $conex->query("INSERT INTO `country`(`Code`, `Name`) VALUES ('MED', 'MEDAC');");
      $conex->query("INSERT INTO `city`(`Name`, `CountryCode`) VALUES ('ARENA','MED'), ('MÁLAGA','MED');");
      $conex->query("INSERT INTO `countrylanguage`(`CountryCode`, `Language`) VALUES ('MED','PHP'), ('MED','JAVA');");

      if ($conex->error) {
        throw new mysqli_sql_exception($conex->error);
      } else {
        $conex->commit();
        echo "Succesful transaction.";
      }
    } catch (mysqli_sql_exception $e) {
      $conex->rollback();
      echo "Something fails: ", $e->getMessage(), "\n";
    }
  }

  function transaction2()
  {
    $conex = new mysqli("localhost", "root", "", "world");

    $conex->autocommit(false);
    $conex->begin_transaction();

    try {

      $conex->query("DELETE FROM `city` WHERE Name = 'MÁLAGA';");
      $conex->query("INSERT INTO `city`(`Name`, `CountryCode`) VALUES ('CÓRDOBA27','MED'), ('CÓRDOBA69','MED');");
      $conex->query("UPDATE `country` SET `Code`='IES' WHERE Code = 'MED';");

      if ($conex->error) {
        throw new mysqli_sql_exception($conex->error);
      } else {
        $conex->commit();
        echo "Succesful transaction.";
      }
    } catch (mysqli_sql_exception $e) {
      $conex->rollback();
      echo "Something fails: ", $e->getMessage(), "\n";
    }
  }

  function transaction3()
  {
    $conex = new mysqli("localhost", "root", "", "world");

    $conex->autocommit(false);
    $conex->begin_transaction();

    try {
      $conex->query("INSERT INTO `countrylanguage`(`CountryCode`, `Language`) VALUES 
        ('IES','SQL'), ('IES','JS'), ('IES','Python'), ('IES','C++'), ('IES','Ruby');");
      $conex->query("DELETE FROM `country` WHERE Code = 'IES';");

      if ($conex->error) {
        throw new mysqli_sql_exception($conex->error);
      } else {
        $conex->commit();
        echo "Succesful transaction.";
      }
    } catch (mysqli_sql_exception $e) {
      $conex->rollback();
      echo "Something fails: ", $e->getMessage(), "\n";
    }
  }

  if (isset($_POST["transaction1"])) {
    transaction1();
  }

  if (isset($_POST["transaction2"])) {
    transaction2();
  }

  if (isset($_POST["transaction3"])) {
    transaction3();
  }

  ?>


</body>

</html>