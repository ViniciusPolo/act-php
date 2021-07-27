<?php
class Calculadora
{
    public function soma($x, $y)
    {
        return $x + $y;
    }
    public function sub($x, $y)
    {
        return $x - $y;
    }
    public function mult($x, $y)
    {
        return $x * $y;
    }
    public function div($x, $y)
    {
        return $x / $y;
    }
    public function pot($x, $y)
    {
        $result = 1;
        for($i=0;$i<$y;$i++){
            $result*=$x;
            return $result;
        } 
    }
}
?>