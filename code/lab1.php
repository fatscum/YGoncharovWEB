<?php

//
//	TASK - 1
//

/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and a large soda";

// Don't change the line below
echo"\nYour order is:$very_bad_unclear_name.";

//
//	TASK - 2
//

$int = 3;
echo "$int";

$float = 1.23;
echo "\n$float";

$not_a_twelve = 10 + 2;
echo "$not_a_twelve";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
$diff = $lastMonth - $thisMonth;
echo "$diff";

//
//	TASK - 11
//

$languagesCount = 4;
$months = 11;
$days = 16;
$daysPerLanguage = $months * $days;
echo "$daysPerLanguage";

//
//	TASK - 12
//

echo str(8**2);

//
//	TASK - 13
//

$my_num = 123;
$answer = $my_num;

$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;

echo $answer;

//
//	TASK - 14
//

$a = 10;
$b = 3;

echo "{$a} mod {$b} is " . ($a % $b) . "\n";

if (($a % $b) === 0)
	echo "{$a} can be divided by {$b}. The result is " . ($a / $b) . "\n";
else
	echo "{$a} cannot be divided by {$b}. The remainder is " . ($a % $b) . "\n";

$st = 2**10;
$sqrt245 = sqrt(245.0);
$arr = [4, 2, 5, 19, 13, 0, 10];
$vecLen = 0.0;

foreach ($arr as $elem)
	$vecLen += $elem ** 2;

$vecLen = sqrt($vecLen);
echo "st={$st}, sqrt245={$sqrt245}, vecLen={$vecLen}\n";

$sqrt379 = sqrt(379.0);
echo "First three sqrt379 approximations: "
		   . round($sqrt379) . ", "
		   . round($sqrt379, 1) . ", "
		   . round($sqrt379, 2)
		   . "\n";

$sqrt587 = sqrt(587.0);
$rounded = [
	"floor" => floor($sqrt587),
	"ceil"  => ceil ($sqrt587)
];

echo "floor(sqrt587)={$rounded['floor']}, ceil(sqrt587)={$rounded['ceil']}\n";

$arr = [4, -2, 5, 19, -130, 0, 1];
echo "min=" . min($arr) . ", max=" . max($arr) . "\n";

echo "Random integer in range [1;100]: " . rand(1, 100) . "\n";

$arr = [];
echo "Array of some random integers:";

for ($i = 0; $i < 10; $i++) {
	$elem = $arr[$i] = rand();
	echo " " . $elem;
}

echo "\n";

echo "Testing abs diff or something\n";

for ($a = 1; $a < 3; $a++)
	for ($b = 3; $b < 5; $b++)
		echo "....abs({$a}-{$b})=" . abs($a - $b) . "\n";

$arr = [1, 2, -1, -2, 3, -3];

echo "Array of modules:";

foreach ($arr as $i => $elem) {
	$elem = $arr[$i] = abs($arr[$i]);
	echo " " . $elem;
}

echo "\n";

$num = 30;
$divisors = [];

echo "All divisors of number {$num}:\n";

for ($d = 1; $d ** 2 <= $num; $d++) {
	if (($num % $d) == 0) {
		$divisors[] = $d;
		$symmetric_d = $num / $d;

		echo "....{$d}\n";

		if ($symmetric_d !== $d) {
			$divisors[] = $symmetric_d;
			echo "....{$symmetric_d}\n";
		}
	}
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;

foreach ($arr as $i => $elem) {
	if (($sum += $elem) > 10) {
		echo "sum(arr, n=1.." . ($i + 1) . ") = {$sum}>10";
		break;
	}
}

//
//	TASK - 15
//

function printStringReturnNumber15()
{
	echo "String Printed";
	return 23;
}

echo $my_num = printStringReturnNumber15();

//
//	TASK - 16
//

function printStringReturnNumber(): int
{
	echo ' ';
	return 0;
}

$my_num = printStringReturnNumber();
echo ($my_num);

function increaseEnthusiasm(string $str): string
{
	return "$str!";
}

echo (increaseEnthusiasm('chill'));

function repeatThreeTimes(string $str): string
{
	return str_repeat($str, 3);
}

echo (repeatThreeTimes('hello'));
echo (increaseEnthusiasm(repeatThreeTimes('chill')));

function cut(string $str, int $limit = 10) {}

function printArrayRecursive(array $arr, $i = 0)
{
	if ($i >= count($arr))
	{
		return;
	}
	echo $arr[$i] . ' ';
	printArrayRecursive($arr, $i + 1);
}

printArrayRecursive($arr);
echo "\n";

function getDigitsSum(int $number): int
{
	$sum = 0;
	while ($number > 0)
	{
		$sum += $number % 10;
		$number /= 10;
	}
	return $sum;
}

$number = 123;
$result = getDigitsSum($number);
while ($result >= 10)
{
	$result = getDigitsSum($result);
}
echo ($result);

//
//	TASK - 17
//

$infinity = 10;
$infiniteArray = [];
for ($i = 1; $i <= 10; $i++)
{
	$infiniteArray[] = "'" . str_repeat("x", $i) . "'";
}

function arrayFill(string $value, string $count): array
{
	return array_fill(0, $count, $value);
}

$sum = 0;
$array2d = [[1, 2, 3], [4, 5], [6]];
foreach ($array2d as $array1d)
{
	foreach ($array1d as $value)
	{
		$sum += $value;
	}
}

$array2d = [];
for ($i = 0; $i < 3; $i++)
{
	$array1d = [];
	for ($j = 1 + 3 * $i; $j <= 3 + 3 * $i; $j++)
	{
		$array1d[] = $j;
	}
	$array2d[] = $array1d;
}

$arr = [2, 5, 3, 9];
$result = 0;
foreach ($arr as $i => $value)
{
	if ($i >= count($arr) - 1)
	{
		break;
	}
	$result += $value * $arr[$i + 1];
}

$user = [
	'name' => 'Yan',
	'surname' => 'Goncharov',
	'patronymic' => 'Arkadyevich'
];
foreach ($user as $namePart)
{
	echo $namePart . ' ';
}
echo "\n";

$date = [
	'year' => date('Y'),
	'month' => date('m'),
	'day' => date('d'),
];
echo ("{$date['year']}-{$date['month']}-{$date['day']}");

$arr = ['a', 'b', 'c', 'd', 'e'];
$size = count($arr);
echo ($size);
echo ($arr[$size - 1]);
echo ($arr[$size - 2]);

//
//	TASK - 18
//

function sumMoreThanTen(int $number1, int $number2): bool
{
	return $number1 + $number2 > 10;
}

function equals(int $number1, int $number2): bool
{
	return $number1 === $number2;
}

$test = 0;

$test === 0 ? 'верно' : '';

echo "\n";

$age = 10;
if ($age < 10 || $age > 99)
{
	echo ('$age is less than 10 or greater than 99.');
}
else
{
	$sum = getDigitsSum($age);
	if ($sum <= 9)
	{
		echo ('Сумма цифр значения переменной $age однозначна.');
	}
	else
	{
		echo ('Сумма цифр значения переменной $age двузначна.');
	}
}

$arr = [1, 2, 3, 4, 5];
if (count($arr) === 3)
{
	echo (array_sum($arr));
}

//
//	TASK - 19
//

for ($i = 1; $i < 20; $i++)
{
	echo (str_repeat('x', $i));
}

//
//	TASK - 20
//

$average = array_sum($arr) / count($arr);

$sum1to100 = array_sum(range(1, 100));

$arr = array_map('sqrt', $arr);

$assocArray = array_combine(range('a','z'),range(1,26));

$digitsString = '1234567890';
$sumOfPairs = array_sum(str_split($digitsString, 2));