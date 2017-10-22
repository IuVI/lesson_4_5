<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Hello</title>
</head>
<body>
	<?php
		// заняття 5
		echo 'Hello, World!!!';
		// заняття 8
		echo "<br> This instruction  follows next line after previous text";
		// заняття 10
		$var_1 = 0;
		echo "<br> this is how a variable looks like: $var_1";
		// заняття 12
		$bool = true;
		echo "<br>  this is how bollean variable looks like: $bool";
		// заняття 13
		$integer = -1234;
		echo "<br>  this is how integer variable looks like: $integer";
		// заняття 14
		$string = '\'first string variable\'';
		echo "<br> this is how string variable looks like: $string";
		// заняття 15
		$null = null;
		echo "<br>";
		var_dump($null);
		// заняття 16
		$textlist = ['veggies', 'pastry', 'fr' => 'fruits', 'poultry'];
		echo "<br>";
		echo "<pre>";
		print_r($textlist);
		echo "</pre>";
		echo "<br>";
		print_r($textlist[1]);
		echo "<br>";
		echo $textlist['fr'];
		//стільки нотісів за 1 заняття я ще не бачив
		// наступне заняття
		// заняття 18 (завдання 1 - вивести масив з назвами 5 країн)
		$countries = array('Ukraine', 'Japan', 'Italy', 'Chile', 'Namibia');
		echo "<br>";
		echo "<pre>";
		print_r($countries);
		echo "</pre>";
		// заняття 19 (завдання 2 - вивести асоціативний масив де ключ - назва країни, а елемент - її столиця)
		$acountries = array('Ukraine' => 'Kyiv', 'Zambia' => 'Lusaka', 'Italy' => 'Rome', 'Chile' => 'Santiago', 'Namibia' => 'Windhoek');
		echo "<br>";
		echo "<pre>";
		print_r($acountries);
		echo "</pre>";
		// заняття 20 (завдання 3 - вивести масив масивів з переліком стиль-автор-назва-ціна)
		$book1 = ['style' => 'roman', 'auth' => 'Fitzerald F.S.', 'title' => 'The Great Gatsby', 'price' => 60];
		$book2 = ['style' => 'roman', 'auth' => 'Rowling J.K.', 'title' => 'Harry Potter and the Holly Shit', 'price' => 40];
		$book3 = ['style' => 'manual', 'auth' => 'Cocker J.K.', 'title' => 'Self-teacher of guitar playing', 'price' => 50];
		$booklist = [$book1,$book2,$book3];
		echo "<br>";
		echo "<pre>";
		print_r($booklist);
		echo "</pre>";
		// заняття 22 константи (завдання 4 - ввести 2 константи : назви країн, а потім сформувати та вивести масив, що з них складається)
		echo "<br> завдання 4 заняття 22";
		define('ITALY', 'Italy');
		define('UKRAINE', 'Ukraine');
		$arr_4 = array(ITALY, UKRAINE);
		echo "<pre>";
		print_r($arr_4);
		echo "</pre>";
		// заняття 23 змінні змінних (завдання 5 - вивести значення змінної $$$$$hello)
		echo "<br> завдання 5 заняття 23";
		$hello = 'n1';
		$n1 = 'n2';
		$n2 = 'n3';
		$n3 = 'n4';
		$n4 = '<br>At last, id did it!!!!!';
		echo $$$$$hello;
		// заняття 28 предетерміновані змінні (завдання 6 - вивести на екран результат вводу з форми методом $_POST або $_GET)
		echo "<br> завдання 6 заняття 28 - суперглобальна змінна _ПОСТ";
	?>
	<form action="index.php" method="post">
		<input type="text" name="message"/>
		<input type="submit" value="Send!">
	</form>
	<br>
	<?php
		print_r($_POST);
	?>
	<hr><br>
	завдання 7 заняття 31 - серіалізація данних (створити форму з полями username, email, message та вивести серіалізовані дані на екран)
	<form action="index.php" method="post">
		<input type="text" name="username" value="login"/>
		<input type="email" name="mail" value="email@mail.com" />
		<textarea name="comment" cols="40" rows="5" ></textarea>
		<input type="submit" name="submit"/>
	</form>
	<?php
		$a = serialize($_POST);
		echo $a;
		echo "<br><hr>завдання 8 заняття 33 підрахувати кількість секунд у році і присвоїти це значення змінній, обчислити остачу від ділення на 2";
		$b = 365 * 60 * 60;
		$c = $b % 2;
		echo "<br> остача від ділення $b на 2 = $c";
		echo "<br><hr>завдання 9 заняття 35 створити строку 12345 шляхом використання оператора конкатенації";
		echo "<br>";
		echo "1" . "2" . "3" . "4" . "5";
		echo "<br><hr>завдання 10 заняття 36 підрахувати значення false && true || false && true || !false && true";
		echo "<br>";
		echo false && true || false && true || !false && true;
		echo "<br><hr>завдання 11 заняття 36 вивести на екран чи ділиться змінна на 2 у вигляді булевої змінної";
		$d = 300;
		$e = $d % 2 == 0;
		echo "<br>";
		echo $e;
		echo "<br><hr>завдання 12 заняття 37 створити алгоритм обміну значень змінних не використовуючи третьої";
		echo "<br>присвоюємо значення змінним 15 та 20";
		$f = 15;
		$g = 20;
		echo "<br>f = $f , g = $g";
		echo "<br>записуємо різницю між змінними до однієї зі змінних";
		$f = $g - $f;
		echo "<br>f = $f";
		echo "<br> віднімаємо і додаємо до змінних відповідні елементи";
		$g = $g - $f;
		$f = $g + $f;
		echo "<br>f = $f , g = $g";
		echo "<br><hr>завдання 13 заняття 44 створити алгоритм знаходження максимального значення з двох заданих змінних";
		echo "<br> маємо змінні f = $f , g = $g";
		if ($f > $g) {
			$m = $f;
		} elseif ($f == $g) {
			$m = 'equal';
		} else {
			$m = $g;
		}
		echo "<br> максимальне значення між f та g, m = $m";
		echo "<br><hr>завдання 14 заняття 45 створити алгоритм знаходження максимального значення з двох заданих змінних за допомогою тернарного оператора";
		echo "<br> маємо змінні f = $f , g = $g";
		$f > $g ? $m = $f : $f == $g ? $m = 'equal' : $m = $g;
		echo "<br> максимальне значення між f та g, m = $m";
		echo "<br><hr>завдання 15 заняття 46 створити алгоритм знаходження максимального значення з двох заданих змінних за допомогою switch-case";
		echo "<br> маємо змінні f = $f , g = $g";
		switch ($f) {
			case $g:
				$m = 'equal';
				break;
			default:
				$f > $g ? $m = $f : $m = $g;
				break;
		}
		echo "<br> максимальне значення між f та g, m = $m";
		echo "<br><hr>завдання 16 заняття 47 створити алгоритм знаходження усіх простих чисел від 1 до 100";
		$simple = array();

		for ( $i = 2; $i <= 100; $i++) {
			$not = true;
			for ($j=2; $j < $i; $j++) { 
				if ($i % $j == 0) {
					$not = false;
					break;
				}
			}
			if ($not) {
				$simple[] = $i;
			}
		}
		echo '<br>';
		print_r($simple);
		echo "<br><hr>завдання 17 заняття 48 створити алгоритм знаходження усіх простих чисел від 1 до 100 за допомогою do-while";
		$i = 2;
		$j = 2;
		unset($simple);
		$simple = array();
		while ($i<= 100) {
			$not = true;
			while ( $j < $i) {
				if ($i % $j == 0) {
					$not = false;
					break;
				}
				$j++;
			}
			if ($not) {
				$simple[] = $i;
			}
			$i++;
			$j = 2;
		}
		echo '<br>';
		print_r($simple);
		echo "<br><hr>завдання 18 заняття 49 вивести за допомогою foreach масив від 1 до 10, елементи якого діляться на 3";
		$ar10 = array(1, 2, 3, 4, 5, 6, 7, 8, 9 ,10);
		echo '<br>';
		foreach ($ar10 as $key) {
			if ($key % 3  == 0) {
				echo " " . $key;
			}
		}
		echo "<br><hr>завдання 19 заняття 51 вивести перше просте число між 200 та 400 використовуючи break та continue";
		unset($simple);
		$simple = array();
		for ( $i = 200; $i <= 400; $i++) {
			$not = true;
			for ($j=2; $j < $i; $j++) { 
				if ($i % $j == 0) {
					$not = false;
					break;
				}
			}
			if ($not) {
				echo '<br>' . $i;
				break;
			}
		}
		echo "<br><hr>завдання 20 заняття 52 як спростити функцію, які <b>теоретично</b> ще не проходили)))";
		function test($x, $y) {
		return ($y == 0) ? die('Error') : (float)($x / $y);
		}
		echo '<br>' . test(16,2);
		echo '<br>тернарний оператор лише на думку спадає';
		echo "<br><hr>завдання 21 заняття 55 записати у текстовий файл 1, 22, 333, 444, ... 101010... <br> для того, щоб запрацювало, розкоментіть строки нижче";
		/*$h = fopen('test.txt', 'a');
		for ($i = 1; $i < 11; $i++) {
			if ($i <2 ) {
				fwrite($h, str_repeat(strval($i), $i));
				continue;
			}
			fwrite($h, PHP_EOL . str_repeat(strval($i), $i));
		}
		fclose($h);*/
		echo "<br><hr>завдання 22 заняття 66 функція, що виводить масив між тегами пре";
		echo "<br масив складається з цифр 0, 1, 2, 3... 10>";
		function print_array ($a1) {
			echo "<pre>";
			print_r($a1);
			echo "<pre>";
		}
		$arr1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		print_array($arr1);
		echo "<br><hr>завдання 23 заняття 67 функція, що виводить масив між тегами пре замовчування - 0: print_r 1: var_dump";
		function print_ar_mod ($a1, $a2 = 0) {
			if ($a2 == 1) {
				echo "<pre>";
				var_dump($a1);
				echo "<pre>";
			} else {
				echo "<pre>";
				print_r($a1);
				echo "<pre>";
			}
		}
		print_ar_mod($arr1);
		echo "<br><hr>завдання 24 заняття 69 функція, що дописує в кінець масиву кількість значень масиву";
		function total_array (& $a1) {
			$a1[] = count($a1);
		}
		total_array($arr1);
		print_ar_mod($arr1);
		echo "<br><hr>завдання 25 заняття 70 функція, що визначає, чи число просте";
		function simple ($a1) {
			for ($i=2; $i < $a1; $i++) {
				if ($a1 % $i == 0) {
					return false;
				}
			}
			return true;
		}
		echo '<br>';
		var_dump(simple(239));
		echo "<br><hr>завдання 26 заняття 71 функція, що є аналогом print_r";
		// function print_ar ($a1) {
		// 	for ($i=0; $i < count($a1); $i++) { 
		// 		# code...
		// 	}
		// }
		// print_ar($arr1);
	?>
</body>
</html>