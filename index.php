<?php
session_start();
?>

<!DOCTYPE html>

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
				<form action="index.php" method="post">
					<p>Liczba: <input type="number" name="num" placeholder="Zgadnij liczbę"></p>
					<input type="submit" value="Sprawdź">
				</form>
			</td>
		</tr>
	</table>
	<br><br>
	<table>
		<tr>
			<td>
				<?php
				if(isset($_POST['num']) && is_numeric($_POST['num'])) {
					$num = $_POST['num'];
					if(isset($_SESSION['i'])) {
						$_SESSION['i']++;
					} else {
						$_SESSION['i'] = 1;
					}
					if(!isset($_SESSION['random'])) {
						$_SESSION['random'] = random_int(1,10);
					}
					if($num > $_SESSION['random']) {
						echo 'Wylosowana liczba jest mniejsza od Twojej<br>';
					} elseif($num < $_SESSION['random']) {
						echo 'Wylosowana liczba jest większa od Twojej<br>';
					} else {
						echo 'Gratulacje zgadłeś liczbę za '. $_SESSION['i'] .' razem<br>';
						session_destroy();
					}
				} else {
					if(isset($_SESSION['i'])) {
						echo 'Podaj kolejną liczbę';
					} else{
						echo 'Zacznij Grę!!!';
					}
				}
				?>
			</td>
		</tr>
	</table>

</body>


</html>