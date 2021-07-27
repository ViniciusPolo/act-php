<?php

    include('Calculadora.php');
    $x=10;
    $y=11;

    $calculadora = new Calculadora();


    echo 'Soma: '.$calculadora->soma($x,$y);
    echo '<br>Subtração: '.$calculadora->sub($x,$y);
    echo '<br>Multiplicação: '.$calculadora->mult($x,$y);
    echo '<br>Divisão: '.$calculadora->div($x,$y);
    echo '<br>Potência: '.$calculadora->pot($x,$y);
    


?>