<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio World Transactions</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function t1() {
        $.ajax({
            type: "POST",
            url: "transactions.php",
            data: {
                "transaction1": "1"
            },
            success: function(response) {
                $("#result").html(response);
            }
        })
    }

    function t2() {
        $.ajax({
            type: "POST",
            url: "transactions.php",
            data: {
                "transaction2": "2"
            },
            success: function(response) {
                $("#result").html(response);
            }
        })
    }

    function t3() {
        $.ajax({
            type: "POST",
            url: "transactions.php",
            data: {
                "transaction3": "3"
            },
            success: function(response) {
                $("#result").html(response);
            }
        })
    }
    </script>
</head>

<body>
    <button type="submit" onclick="t1()">Transacción 1</button>
    <button type="submit" onclick="t2()">Transacción 2</button>
    <button type="submit" onclick="t3()">Transacción 3</button>

    <br><br>
    <div id="result">
    </div>

</body>

</html>