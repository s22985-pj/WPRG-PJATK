<html>
<head>

</head>
<body>
    <form method="post">
        Imię:
        <br>
        <label>
            <input type="text" name="name" required>
        </label>
        <br>
        Nazwisko:
        <label>
            <input type="text" name="lastName" required>
        </label>
        <br>
        E-mail:
        <br>
        <label>
            <input name="mail" type="email" required>
        </label>
        <br>
        <input type="submit" value="Zapisz">
    </form>

    <?php

    $imie = $_POST["name"];
    $nazwisko = $_POST["lastName"];
    $mail = $_POST["mail"];

    if(!$plik = fopen("file.txt", "a+")) {
        echo "problem z zapisem pliku";
    } else {
        $rekord = $imie." ".$nazwisko." ".$mail."\n";
        fwrite($plik, $rekord);
        fclose($plik);
        echo "zapisano";
    }

    ?>

</body>
</html>
