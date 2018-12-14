<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styl_oszczep.css">
    <title>Rzut oszczepem</title>
</head>
<body>
<div class="bannerAndFooter">
    <h1>Klub sportowy: rzut oszczepem</h1>
</div>
<div class="main">
    <h1 class="record">Nasz rekord: m</h1>
</div>
<div class="bannerAndFooter">
    <p>Klub sportowy</p>
    <p>Stronę opracował: </p>
</div>

</body>
</html>

<?php
$servername = "localhost"; // nazwa serwera
$username = "root"; //użytkownik
$password = ""; //hasło
$dbname = "sportowcy"; // nazwa bazy danych

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); //funkacja łączenia z bazą danych. Jako argumenty przyjmuje nazwę serwera, użytkownika, hasło, i nazwę pazydanych

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); //Jeżeli nie uda się połączyć z bazą danych
}
echo "Connected successfully"; // dodaje na stronie napis, że udało się połączyć z bazą danych

$sql = "SELECT id, imie, nazwisko FROM sportowiec"; // sql wybierania wszystkich osób z tabeli 'sportowiec'
$result = $conn->query($sql); // wykonanie zapytania

if ($result->num_rows > 0) { // jeżeli zapytanie zwróci dane (czyli tabela nie jest pusta) w pętli while zostaną wydrukowana zawartość bazy danych
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["imie"] . " " . $row["nazwisko"] . "<br>";
    }

} else {
    echo "0 results"; // Jeśli tabela jest pusta zwróci taki komunikat
}
$conn->close(); //przerwanie połączenia z bazą danych