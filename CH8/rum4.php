<?php

function add($n1,$n2){
    $result = $n1 + $n2;
    echo "<br><br>Result add : 10 + 20 = ".$result;

}

function subtract($n1,$n2){
    $result = $n1-$n2;
    echo "<br><br>Result subtract : 10 - 20 = ".$result;
}

function multiply($n1,$n2){
    $result = $n1*$n2;
    return $result;
}

function divide($n1,$n2,&$result){
    $result = $n1/$n2;

}//pass by reference

$num1 = 10;
$num2 = 20;
echo "num 1 = 10 , num 2 = 20";

add($num1,$num2);

subtract($num1,$num2);

$resultMultiply=0;
$resultMultiply = multiply($num1,$num2);
echo "<br><br> Result Multiply : 10 x 20 =  " .$resultMultiply;

divide($num1,$num2,$resultDivide);
echo "<br><br> Result Divide : 10 / 20 = ".$resultDivide;

?>