<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="./styl6.css">
</head>
<body>
    <div class="baner1">
        <h2>MÓJ ORGANIZER</h2>
    </div>
    <div class="baner2">
        <form action="" method="POST">
            <label for="">Wpis wydarzenia: </label>
            <input type="text" name="wpis">
            <input type="submit" value="ZAPISZ">
        </form>
    </div>
    <div class="baner3">
        <img src="./logo2.png" alt="Mój organizer">
    </div>
    <div class="glowny">
    <?php
        if(isset($_POST['wpis'])) {
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'egzamin6');
            $wpis = $_POST['wpis'];
            $query = "UPDATE zadania SET wpis = '" .   $wpis  . "' WHERE dataZadania = '2020-08-27';";
            $exe = mysqli_query($conn, $query);

            $query2 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac='sierpien';";
            $exe2 = mysqli_query($conn, $query2);
            while($row = mysqli_fetch_array($exe2)) {
                echo "<div class='dzien'>
                <h6>" . $row['dataZadania'] . " " . $row['miesiac'] . " </h6>
                <p>" . $row['wpis'] . "</p>
                </div>";
            }
        }
    ?>
    </div>
    <div class="stopka">
        <?php
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'egzamin6');
            $query3 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';";
            $exe3 = mysqli_query($conn, $query3);
            while($row = mysqli_fetch_array($exe3)) {
                echo "<h1>
                miesiąc: " . $row['miesiac'] . ", rok: " . $row['rok'] .  "
                </h1>";
            }
            mysqli_close($conn);
        ?>
        <p>Stronę wykonał: wiktordablju</p>
    </div>
</body>
</html>