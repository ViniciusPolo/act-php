<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            height: 100ch;
            display:flex;
            justify-content: center; /*Alinha verticalmente*/
            align-items: center; /*Alinhar horizontalmente*/
            background-image: url("https://images.pexels.com/photos/6238050/pexels-photo-6238050.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260")

        }
        form{
            width:300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #606060;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <?php
$n1 = $_POST['Numero1'];
$n2 = $_POST['Numero2'];
echo 'A soma entre '.$n1.' e '.$n2.' = '.$n1 + $n2;
?>
</body>
</html>