<?php
echo "Введите число: \n";
$num = trim(fgets(STDIN));
$ord = $num % 3;
if ($ord == 0) {
	echo "Ваше число кратное 3";
} else {
	echo "Ваше число не кратное 3, остаток = $ord";
}