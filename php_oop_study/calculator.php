<?php include 'auto_loader.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-siizing: border-box;
    }

    body{
        width: 100vw;
        height: 100vh;
        display: grid;
        place-items: center;
    }
    form{
        width: 50%;
        heigth: 50%;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    form input, form select, form button{
        height: 2rem;
    }
</style>

<body>
    <form method="post" action="finalAnswer.php">
        <input type="number" name='firstNumber'>

        <select name="operation" id="sign">
            <option value="addition">addition</option>
            <option value="subtraction">subtraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>
        </select>

        <input type="number" name='secondNumber'>
        <button name="calculate" id="calculate">calculate</button>
    </form>
</body>
</html>