<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Pesel</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Klasa</th>
        </tr>
        <?php
include "polacz.php";
    $szukaj = $_GET['szukaj'];

    if ($sql = $baza -> prepare("SELECT * FROM uczen WHERE nazwisko LIKE  '%{$_GET['szukaj']}%'")){
        $sql -> execute();
        $sql -> bind_result($pesel, $imie, $nazwisko, $klasa);
        //$sql -> bind_param("s", $szukaj);
        while($sql->fetch()){
            echo "<tr>
                    <td>$pesel</td>
                    <td>$imie</td>
                    <td>$nazwisko</td>
                    <td>$klasa</td>
            </tr>";
        }
        $sql -> close();
    }else die("Błąd w zapytaniu SQL!:". $baza->error);
    $baza -> close();

?>
    </table>
</body>

</html>
