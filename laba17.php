<?php


//1 задание
echo "Задание 1";
echo "<br>";

$a = 10;
$b = 5;
echo 'Аргумент1 = ' . $a . "<br>" . ' Аргумент2 = ' . $b . "<br>";
if (($a >= 0) && ($b >= 0)) {
    echo 'Переменные положительные. Разность равна - '. ($a - $b);
}
elseif ($a < 0 && $b < 0) {
    echo 'Переменные отрицательные. Произведение равно - ' . ($a * $b);
}
else {
    echo 'Перменные разных знаков. Сумма равна -' . ($a + $b);
}


//2 задание
echo "<br><br>";

echo "Задание 2";
echo "<br>";
$a = rand(0, 15);

echo '\$a = ' . $a;
echo "<br>";
echo "Вывод чисел от \$а до 15: ";
while ($a <= 15) {
    switch ($a) {
        default:
            echo $a . " ";
            $a++;
            break;
    }
}


//3 задание
echo "<br><br>";

function sum($a, $b) {
    return 'Сложение. ' . $a . ' + ' . $b . (' = ' . ($a + $b));
}
function difference($a, $b) {
    return 'Вычитание. ' . $a . ' - ' . $b . (' = ' . ($a - $b));
}
function multiplication($a, $b) {
    return 'Умножение. ' . $a . ' * ' . $b . ' = ' . $a * $b;
}
function division($a, $b) {
    return 'Деление. ' . $a . ' / ' . $b . ' = ' . $a / $b;
}

$a = sum(6,3);
$b = difference(6,3);
$c = multiplication(3,6);
$d = division(6,3);

echo "Задание 3";
echo "<br>";
echo 'Аргумент1 = ' . 6 . "<br>" . ' Аргумент2 = ' . 3 . "<br>";
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;


//4 задание
echo "<br><br>";
echo "Задание 4";
echo "<br>";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'Сложение' :
            return sum($arg1, $arg2);
        case 'Вычитание' :
            return difference($arg1, $arg2);
        case 'Умножение' :
            return multiplication($arg1, $arg2);
        case 'Деление' :
            return division($arg1, $arg2);
    }
}
echo 'Аргумент1 = ' . 10 . "<br>" . ' Аргумент2 = ' . 2 . "<br>";;
echo mathOperation(10,2,'Сложение') . "\n";

//5 задание
echo "<br><br>";
echo "Задание 5";

$thisYear1 = date('Y') . '  год';
$thisYear2 = getdate()['year'] . ' год';
$thisYear3 = localtime(null,true)['tm_year'] +1900 . ' год';  //Возвращает локальное время
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title></title>
</head>
<body>
<div>
    <p>Год первым способом: <?= $thisYear1?></p>
    <p>Год вторым способом: <?= $thisYear2?></p>
    <p>Год третьим способом: <?= $thisYear3?> </p>
</div>
</body>
</html>
<?php

//6 задание
echo "Задание 6";
echo "<br>";
function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    return $val * power($val, $pow - 1);
}
echo 'Число = ' . 1 . "<br>" . ' Степень = ' . 0 . "<br>";
echo 'Ответ: ' . power(1, 0);
echo "<br>" . 'Число = ' . 2 . "<br>" . ' Степень = ' . 3 . "<br>";
echo 'Ответ: ' . power(2, 3);

?>
