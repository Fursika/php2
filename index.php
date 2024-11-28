<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formularz</title>
</head>
<body>
<form action="index.php" method="get">
<label for="imie">Imię:</label>
<input type="text" id="imie" name="imie"><br><br>
<label for="nazwisko">Nazwisko:</label>
<input type="text" id="nazwisko" name="nazwisko"><br><br>
<label for="ulica">Ulica:</label>
<input type="text" id="ulica" name="ulica"><br><br>
<label for="telefon">Numer telefonu:</label>
<input type="text" id="telefon" name="telefon"><br><br>
<label for="email">E-mail:</label>
<input type="text" id="email" name="email"><br><br>
<input type="submit" value="OK" name="p1">
</form>
<?php
   if (isset($_GET['p1'])) {

       $imie = $_GET["imie"];
	echo "<h2>Podane dane:</h2>";
	echo "Imię: $imie<br>";

       $nazwisko = $_GET["nazwisko"];
	echo "Nazwisko: $nazwisko<br>";

       $ulica = $_GET["ulica"];
       echo "Ulica: $ulica<br>";

       $telefon = $_GET["telefon"];
       echo "Numer telefonu: $telefon<br>";

       $email = $_GET["email"];
       echo "E-mail: $email<br>";

   } else {
       echo "Nie podano danych.";
   }
   ?>
</body>
</html>