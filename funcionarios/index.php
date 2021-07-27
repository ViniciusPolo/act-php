<?php
    include ('funcionario.php');
    $funcionario = new Funcionario();

    $todos = $funcionario-> all();
    $func= $funcionario->find('12345678999');

    print_r($todos);
    echo '<br><br>';
    print_r($func);

?>