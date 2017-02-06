<?php
$total = 141;

function ending($count){
	$count_mine = $count % 100;
	if ($count_mine > 20) {
		$count_mine %= 10;
	}

	switch ($count_mine) {
		case 1:	return '';
		case 2:
		case 3:
		case 4:	return 'а';
		default:	return 'ов';
	}
}

for ($i=0; $i < $total; $i++) { 
	echo " - в корзине {$i} товар" . ending($i) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
	<title>Вывод окончаний товаров в корзине.</title>
</head>
<body>
	
</body>
</html>
