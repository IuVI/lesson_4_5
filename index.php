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
	?>
</body>
</html>