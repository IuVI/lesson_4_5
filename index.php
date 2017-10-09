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
		// заняття 17 (завдання 1 - вивести масив з назвами 5 країн)
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
	?>
</body>
</html>