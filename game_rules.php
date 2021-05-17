<?php

$num = (int)$_POST['num'];
var_dump($num);

$drownNum = rand(1, 10);

if(isset($num) === $drownNum){
		echo "Gratulacje zgadłeś liczbę" . $drownNum;
	} else{
		echo "Przykro mi nie zgadłeś liczby, Wylosowana liczba to:" . $drownNum;
	}
?>

<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport">
	<title>Gra zaganij liczbe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Gra zgadnij liczbę</h3>
	<table>
		<tr>
			<td>
				<p>Zgafnij liczbę od 1 do 10</p>
				<form action="game_rules.php" method="post">
					<p>Liczba: <input type="text" name="num" placeholder="Zgafnij liczbę"></p>
					<input type="submit" value="Sprawdź">
				</form>
			</td>
		</tr>
	</table>


</body>


</html>
</html>