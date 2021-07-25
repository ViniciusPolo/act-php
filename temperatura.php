<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(https://images.pexels.com/photos/2968789/pexels-photo-2968789.jpeg?cs=srgb&dl=pexels-anna-urlapova-2968789.jpg&fm=jpg);
            background-position-y: 30%;
            justify-content: center; 
            display:flex;
            
        }
        div{
            position: absolute; 
            top: 50%;
            display: table-cell; 
            vertical-align: middle;
            background-color: #ffffff;
            color: #606060;
            width: 40%;
            border-radius: 20px;
            text-align: center;
            border: solid 10px #606060;
        }
        </style>
</head>
<body>
    <div>

        <h1>Conversor de Temperatura em Fahrenheigt para Celsius:</h1></br>
        <h2>Digite a temperatura em Fahrenheigt:</h2>
        
        <form action="temperatura.php" method="GET">
            <input type="Number" name="temp"> F°
        </form>
        <hr>
        <?php
    $temp = $_GET['temp'] ?? 32;
    $celsius = ($temp-32)*5/9;
    echo '<h2>A temperatura em Celsius é:</br> '.number_format($celsius,1).' C°</h2>';
    ?>
    </div>
</body>
</html>