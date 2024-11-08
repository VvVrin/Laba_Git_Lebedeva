<?php
function menu()
{
    echo "1. Сложение\n";
    echo "2. Вычитание\n";
    echo "3. Деление\n";
    echo "4. Возведение в степень\n";
    echo "Введите номер пункта меню: ";
}

function sum()
{
    global $num1, $num2;
    echo $num1 + $num2;
}

function minus()
{
    global $num1, $num2;
    echo $num1 - $num2;
}

function division()
{
    global $num1, $num2;
    if ($num2 == 0) {
        echo "Деление на ноль невозможно!\n";
    } else {
        echo $num1 / $num2;
    }
}

function degree()
{
    global $num1, $num2;
    echo pow($num1, $num2);
}

echo "Консольный калькулятор\n";
echo "Введите два числа\n";
global $num1, $num2;
echo "Введите первое число: ";
$num1 = trim(fgets(STDIN));
echo "Введите второе число: ";
$num2 = trim(fgets(STDIN));

$res = readline(menu());
switch ($res) {
    case '1':
        sum();
        break;
    case '2':
        minus();
        break;
    case '3':
        division();
        break;
    case '4':
        degree();
        break;
    default:
        echo "Введите от 1 до 4\n";
}
?>