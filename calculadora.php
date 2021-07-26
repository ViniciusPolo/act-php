<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(https://images.pexels.com/photos/5412432/pexels-photo-5412432.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
            background-position-y: 20%;
            position: absolute; 
            top: 20%;
            display: table-cell; 
            vertical-align: middle;
            left: 30%;

        }
        #calc{
            text-align: center;
            border-radius: 20px;
            border: solid 5px black;
            padding: 10px;

            
        }
        #res{
            background-color: #ffffff;
            font-size: 80px;
            text-align: center;
            border-radius: 20px;
            border: solid 5px black;
            margin-top: 10px;

        }
        input{
            padding: 3px;
        }
        button, select, input{
            margin-top: 10px;
            padding: 5px 40px 5px 40px;
            font-size: 50px ;
        }
    </style>
</head>

<body>
    <div id="calc">
        <form action="calculadora.php" method="GET">
            <p>Valor 1</p>
            <input type="number" name="n1"><br>
            <select name="op" name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select><br>
            <p>Valor 2</p>
            <input type="number" name="n2"><br>
            <button type="submit">=</button>
        </form>
</div>
    <div id="res">

        <?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['op'];
    if ($op == '+') {
        echo $n1 + $n2;
    } else if ($op == '-') {
        echo $n1 - $n2;
    } else if ($op == '/') {
        echo $n1 / $n2;
    } else if ($op == '*') {
        echo $n1 * $n2;
    }
    ?>
    </div>
</body>

</html>