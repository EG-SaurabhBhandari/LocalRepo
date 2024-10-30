<?php

function add ($a , $b){
    return $a + $b;
}

function substract ($a , $b){
    return $a - $b;
}

function multiply ($a , $b){
    return $a * $b;
}

function divide ($a , $b){
    if ($b == 0){
        return "Cannot divide by zero";
    }
    return $a/$b;
}

echo "Enter first number: ";
$num1 = trim(fgets(STDIN));

echo "Enter second number: ";
$num2 = trim(fgets(STDIN));

echo "Enter operation (add/substract/multiply/divide): ";
$operation = trim(fgets(STDIN));

switch ($operation){
    case "+":
        $result = add($num1 , $num2);
        break;
    case "-":
        $result = substract($num1 , $num2);
        break;
    case "/":
        $result = divide($num1 , $num2);
        break;
    case "*":
        $result = multiply($num1 , $num2);
        break;
    default:
        $result = "invalid operation";
}

echo "result: $result";

