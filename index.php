<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admina</title>
</head>

<body>
    <form method="get" action="szukaj.php">
        <input type="text" name="szukaj" id="szukaj" value="">
        <input type="submit" value="szukaj">
    </form>
    <br>
    <br>


    <table border="1">
        <tr>
            <th>Pesel</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Klasa</th>
        </tr>
        <?php
        include "polacz.php";
        if ($sql = $baza -> prepare("SELECT * FROM uczen ORDER BY pesel, imie")){
            $sql -> execute();
            $sql -> bind_result($pesel, $imie, $nazwisko, $klasa);
            while ($sql -> fetch()){
                
                echo "<tr>
                        <td>$pesel</td>
                        <td>$imie</td>
                        <td>$nazwisko</td>
                        <td>$klasa</td>
                </tr>";
            }
            $sql -> close();
        }else die("Błąd w zapytaniu SQL!". $baza->error);
        $baza->close();
    ?>
    </table>
</body>

</html>
