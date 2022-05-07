<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>Rezerwacja pokoju</h1>

    <form method="post">
        <h4>
            Liczba osób<br>
            <label>
                <input name="guest_quantity" type="number" value="1" min="1" max="4">
            </label><br>
        </h4>
        <h4>
            Dane rezerwującego<br>
            <input name="name" type="text" placeholder="Imię"><br>
            <input name="surname" type="text" placeholder="Nazwisko"><br>
        </h4>
        <h4>
            Adres rezerwującego <br>
            <input name="street" type="text" placeholder="Ulica"><input name="street_num" type="number" placeholder="Nr domu">
            <br><input name="town" type="text" placeholder="Miejscowość">
            <br><input name="post_code" placeholder="Kod pocztowy">
        </h4>
        <h4>

            <input name="mail" type="email" placeholder="Adres e-mail">
        </h4>
            Data pobytu <br>
            od: <input name="date_from" type="date">
            do: <input name="date_to" type="date">
        <h4>
            Dane karty płatniczej <br>
            <input name="card_number" type="number"  minlength="16" maxlength="16" placeholder="16-cyfrowy numer karty"><br>
            <input name="date_card" type="text" placeholder="data ważności karty"><br>
            <input name="CVV" type="number" minlength="3" maxlength="3" placeholder="Numer cvv" size="1">
        </h4>
        <h4>
            Dodatkowe udogodnienia <br>
            <h5>Łóżeczko dla dziecka:
                <input name="kid_bed" type="checkbox"><br></h5>
            <h5>Klimatyzacja:
                <input name="clima" type="checkbox"><br></h5>
            <h5>Popielniczna:
                <input name="ashtray" type="checkbox"><br></h5>

            <input type="submit" value="Dalej" name="save">

        </h4>
    </form>

    <form method="post"><input type="submit" value="Odczytaj dane" name="view"></form>

    <?php


$gquantity = $_POST['guest_quantity'];
$na = $_POST['name'];
$sn = $_POST['surname'];
$street = $_POST['street'];
$snum = $_POST['street_num'];
$town = $_POST['town'];
$pcode = $_POST['post_code'];
$mail = $_POST['mail'];
$d_from = $_POST['date_from'];
$d_to = $_POST['date_to'];
$cnum = $_POST['card_number'];
$dcar = $_POST['date_card'];
$cvv = $_POST['CVV'];



if(isset($_POST['save'])){
    if ($plik = fopen("file.csv","a+")) {
        $dane = $gquantity.";".$na.";".$sn.";".$street.";".$snum.";".$town.";".$pcode.";".$mail.";".$d_from.";".$d_to.";".$cnum.";".$dcar.";".$cvv."\n";
        fwrite($plik,$dane);
        fclose($plik);
    } else echo "Błąd zapisu";
}

$line = 1;
if (isset($_POST['view']))
{
    if ($plik = fopen("file.csv", "r")) {
        while (($data = fgetcsv($plik,1000,";"))!== FALSE) {
            $atributs = count($data);
            $line++;
            for ($i = 0; $i <$atributs ; $i++){
                echo $data[$i]. " ";
            }
            echo "<br>";
        }
        fclose($plik);
    } else echo "Błąd odczytu";
}



?>
</body>
</html>
