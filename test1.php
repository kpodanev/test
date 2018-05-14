<?php
$numbers = rand(100, 999);
if ($numbers % 10 == 0) {
	echo "Ваше число - $numbers";
} else {
	$numbers = $numbers - $numbers % 10;
	echo "Загаданное число - $numbers";
}