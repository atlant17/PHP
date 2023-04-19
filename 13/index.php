<!-- <?php
$n1 = 10;
$n2 = 20;
if ($n1 > $n2) {
        $max = $n1;
} else {
        $max = $n2;
}
echo 'max number is:' . $max;
?> -->

<!-- <?php
$buy = 300;
$sell = 200;
if ($buy > $sell) {
        echo "я в убытке на " . $buy - $sell;
} elseif ($buy < $sell) {
        echo "я в плюсе на " . $sell - $buy;
} else {
        echo 'вышел в ноль';
}
?> -->

<!-- <?php 
$i = 5;
switch($i) {
        case 1: 
                echo 'Monday';
                break;
        case 2:
                echo 'Tuesday';
                break;
        case 3:
                echo 'Wednesday';
                break;
        case 4: 
                echo 'Thursday';
                break;
        case 5:
                echo 'Friday';
                break;
        case 6: 
                echo 'Saturday';
                break;
        case 7: 
                echo 'Sunday';
                break;
        default:
                echo 'Ошибка! Введите число между 1 и 7';

}
?> -->

<!-- <?php
$n1 = 7;
$n2 = 7;
switch ($n1 > $n2) {
        case true:
                echo $max = $n1;
        break;
        case false:
                echo $max = $n2;
        break;
        default:
                echo $max = $n1;
                
}
?> -->

<!-- <?php
$max = 10;
for($i = 1; $i < $max; $i++){
        echo "$i \n";
}
?> -->

<!-- <?php 
$max = 12;
for($i = 1; $i <= $max; $i++){
        if(($i % 2) == 0){
                echo "$i \n" ;
        }
}
?> -->

<!-- <?php
$age = 18;
echo ($age < 18) ? 'cancel accept': 'acces true';
?> -->

<!-- <?php
$dividend = 10;
$divisor = 2;

try {
        $result = intdiv($dividend, $divisor);
        echo "$dividend / $divisor = $result\n";
} catch (DivisionByZeroError $error) {
        throw new Exception('No way!');
    }
    echo 'all good'
?> -->

<!-- <?php
function sumOfRange(int $n) {
    if ($n === 1) {
        return 1;
    }
   
    $sum  = $n + sumOfRange($n - 1);
   
    return $sum;
}

echo sumOfRange(6);
?> -->

<?php
function numbers(int $n) {
        if ($n <= 20) {
                echo $n . "<br>";
                numbers($n + 1);
        }
}
numbers(1);
?>