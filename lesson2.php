<p>Придумайте целое число больше нуля</p>
<form action="lesson2.php" method="post">
	<input type="text" name="number">
	<input type="submit" value="отправить">
</form>
<?php
	$user_variable = htmlspecialchars($_POST["number"]);
	$variable1 = 1;
	$variable2 = 1;
	$variable3 = 0;

	echo " Пользователь ввёл число - " . $user_variable;
	if ($user_variable >= 1) {
		for ($i=0; $i < 1;) {
			if($variable1 > $user_variable){
				echo "<br>Задуманное число не входит в числовой ряд<br>";
				$i++;
			} else {
				if($variable1 == $user_variable) {
					echo "<br>Задуманное число входит в числовой ряд<br>";
					$i++;
				} else {
					$variable3 = $variable1;
					$variable1 = $variable1 + $variable2;
					$variable2 = $variable3;
				}
			}
		}
	}
	else {
		echo "<br>Заданное вами значение не является подходящим!";
	}
	
?>