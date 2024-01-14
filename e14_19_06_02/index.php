<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>W naszej hurtowni kupisz najtaniej</h1>
    </div>
    <div class="lewy">
        <h3>Ceny wybranych artykułów w hurtowni</h3>
        <table>
        <?php
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'sklep');
            $query = "SELECT nazwa, cena FROM towary LIMIT 4;";
            $exe = mysqli_query($conn, $query);

    
            while($row = mysqli_fetch_array($exe)) {
                echo "<tr>
                <td>" . $row['nazwa'] . "</td>
                <td>" . $row['cena'] . " zł</td>
                </tr>";
            }
        ?>
        
            
        </table>
    </div>
    <div class="srodkowy">
        <h3>Ile będą kosztować Twoje zakupy?</h3>
        <form method="POST">
            <label>Wybierz artykuł</label>
            <select name="produkt">
                <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
                <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
                <option value="Cyrkiel">Cyrkiel</option>
                <option value="Linijka 30 cm">Linijka 30cm</option>
                <option value="Ekierka">Ekierka</option>
                <option value="Linijka 50 cm">Linijka 50 cm</option>
            </select><br>
            <label>liczba sztuk: </label>
            <input type="number" value=1 name="ilosc"><br>
            <input type="submit" value="OBLICZ">
        </form>
        <?php
            if(isset($_POST['produkt']) && isset($_POST['ilosc'])) {
                $produkt = $_POST['produkt'];
                $ilosc = $_POST['ilosc'];
                $query2 = "SELECT cena FROM towary WHERE nazwa = '" .  $produkt . "';";
                $exe2 = mysqli_query($conn, $query2);

                while($row = mysqli_fetch_array($exe2)) {
                    echo "Wartość zamówienia: " . $row['cena'] * $ilosc . "zł";
                }
            }
            mysqli_close($conn);
        ?>
    </div>
    <div class="prawy">
        <img src="./zakupy2.png" alt="hurtownia">
        <h3>Kontakt</h3>
        <p>telefon: <br>111222333<br>e-mail:<br><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </div>
    <div class="stopka">
        <h4>Witrynę wykonał wiktordablju</h4>
    </div>
</body>
</html>