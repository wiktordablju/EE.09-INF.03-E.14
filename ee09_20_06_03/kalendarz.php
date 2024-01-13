<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="./styl5.css">
</head>
<body>
    <div class="baner1">
        <img src="./logo1.png" alt="Mój kalendarz">
    </div>
    <div class="baner2">
        <h1>KALENDARZ</h1>
        <?php
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'egzamin5');
            $query = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-07-01';";
            $exe = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($exe)) {
                echo "<h3>miesiąc: " . $row['miesiac'] . ", rok: " . $row['rok'] . "</h3>" ;
            }
        ?>
    </div>
    <div class="glowny">
    <?php
        $query2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';";
        $exe2 = mysqli_query($conn, $query2);

        while($row = mysqli_fetch_array($exe2)) {
            echo "<div class='dzien'>
            <h5>" . $row['dataZadania'] . "</h5>
            <p>" . $row['wpis'] . "</p>
            </div>";
        }
    ?>
    </div>
    <div class="stopka">
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis: </label> <input type="text" name="wpis"> <input type="submit" value="DODAJ">
        </form>
        <?php
            if(isset($_POST['wpis'])) {
                $wpis = $_POST['wpis'];
                $query3 = "UPDATE zadania SET wpis = '" . $wpis . "' WHERE dataZadania = '2020-07-13';";
                $exe3 = mysqli_query($conn, $query3);


            }
            mysqli_close($conn);
        ?>
        <p>Stronę wykonał: wiktordablju</p>
    </div>
</body>
</html>