<?php
/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.*/

$a = rand(-15,15);
$b = rand(-15,15);

if ($a >= 0 && $b >= 0){
    echo $a - $b;
}
elseif ($a < 0 && $b < 0){
    echo $a * $b;
}
else {
    echo $a + $b;
}
echo "<br>";

/*2. Присвоить переменной $а значение в промежутке [0..15]. 
С помощью оператора switch организовать вывод чисел от $a до 15.*/

$a = rand(1,15);
switch ($a){
    case 1:
        echo $a++ . " ";
    case 2:
        echo $a++ . " ";
    case 3:
        echo $a++ . " ";
    case 4:
        echo $a++ . " ";
    case 5:
        echo $a++ . " ";
    case 6:
        echo $a++ . " ";
    case 7:
        echo $a++ . " ";
    case 8:
        echo $a++ . " ";
    case 9:
        echo $a++ . " ";
    case 10:
        echo $a++ . " ";
    case 11:
        echo $a++ . " ";
    case 12:
        echo $a++ . " ";
    case 13:
        echo $a++ . " ";
    case 14:
        echo $a++ . " ";
    case 15:
        echo $a++ . " ";
        break;
    default:
        echo "Число задано неверно";
}

echo "<br>";

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return.*/


function summ($a,$b){
    return $a + $b;
}

function minus($a,$b){
    return $a - $b;
}

function multi($a,$b){
    return $a * $b;
}

function split($a,$b){
    if ($b == 0) {
        return "Error";
    }
    return $a / $b;
}

echo "<br>";

/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
и вернуть полученное значение (использовать switch).*/

// $operation: "+", "-", "*", "/"
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "+":
            return summ($arg1,$arg2);
        case "-":
            return minus($arg1,$arg2);
        case "*":
            return multi($arg1,$arg2);
        case "/":
            return split($arg1,$arg2);
        default:
            return "Error";
    }

}
echo mathOperation(2,3,"+");
echo "<br>";
echo mathOperation(2,3,"-");
echo "<br>";
echo mathOperation(2,3,"*");
echo "<br>";
echo mathOperation(2,3,"/");
echo "<br>";

/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
где $val – заданное число, $pow – степень. При желании сделайте фукнцию анонимной и организуйте рекурсию через замыкание.*/

function power($val, $pow){
    if ($pow == 0){
        return(1);
    }
    elseif ($pow > 0) {
        return $val * power($val, $pow - 1);
    }
    elseif ($pow < 0){
            return 1/(power($val,-$pow));
    }
    return "Error";
}

echo  power(2,3);
echo "<br>";
echo  power(2,-3);
echo "<br>";

// При желании сделайте фукнцию анонимной и организуйте рекурсию через замыкание
$power1 = function ($val, $pow) use (&$power1) {
    if ($pow == 0){
        return(1);
    }
    elseif ($pow > 0){
        return $val * $power1($val,$pow-1);
    }
    elseif ($pow < 0){
        return 1/($power1($val,-$pow));
    }
    return "Error";
};

echo  $power1(2,3);
echo "<br>";
echo  power(2,-3);
echo "<br>";

/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты */


// минутs: 0-минута, 1-минуты, 2-минут
// часs: 0-час, 1-часа, 2-часов
function numberDeclination($val){

    $first = substr($val,0,1);
    
    $second = substr($val,1,1);

    if ($first != 1 && $second ==1) {
        return 0;
    
    } elseif  ($first != 1 && $second >= 2 && $second <= 4 ){
        return 1;
    }else{
        return 2;
    }
}

function currentTime(){
    $time = date("H-i");

    $hour = substr($time,0,2);
    $minute = substr($time,3,2);

    $hourArr = ["час","часа","часов"];
    $minuteArr = ["минута","минуты","минут"];

    $hourString = $hourArr[numberDeclination($hour)];
    $minuteString = $minuteArr[numberDeclination($minute)];

    return (int)$hour . " {$hourString} " . (int)$minute . " $minuteString";
}

echo currentTime();