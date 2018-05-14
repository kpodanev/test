<?php
echo "Загадайте число от 1 до 5 \n";
echo "Ваше число больше 3? y/n \n";
$ask1 = trim(fgets(STDIN));
if ($ask1 == y) {
	echo "Ваше число - 4? y/n \n";
	$ask2 = trim(fgets(STDIN));
		if ($ask2 == y) {
		echo "Хорошего дня \n";
			} else {
				echo "Ваше число - 5 \n";
				echo "Хорошего дня";
			}
} else {
	echo "Ваше число - 2? y/n \n";
	$ask3 = trim(fgets(STDIN));
		if ($ask3 == y) {
		echo "Хорошего дня \n";
			} else {
				echo "Ваше число - 3? y/n \n";
				$ask4 = trim(fgets(STDIN));
				if ($ask4 == y) {
					echo "Хорошего дня \n";
				} else {
				echo "Ваше число - 1 \n";
				echo "Хорошего дня";
			}
			}
}