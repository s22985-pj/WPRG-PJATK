<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>



  <form method="post" >
    Liczba 1: <input type="number" name="licz1"><br>
    Liczba 2: <input type="number" name="licz2"><br>
      <select name="choice">
          <option name="+" value="+">Dodawanie</option>
          <option name="-" value="-">Odejmowanie</option>
          <option name="*" value="*">Mnożenie</option>
          <option name="/" value="/">Dzielenie</option>
      </select><br>
      <input type="submit">
  </form>

<?php

include ('script.php');
$a = $_POST["licz1"];
$b = $_POST["licz2"];
$wynik = $_POST["choice"];

switch ($wynik){
    case "+": dodawanie($a,$b);
    break;
    case "-": odejmowanie($a,$b);
    break;
    case "*": mnozenie($a,$b);
    break;
    case "/": dzielenie($a,$b);
    break;
}

?>

</body>
</html>