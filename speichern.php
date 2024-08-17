<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deine_datenbank";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Daten aus dem Formular erhalten
$name = $_POST['name'];
$email = $_POST['email'];

// SQL-Abfrage zum Einfügen der Daten
$sql = "INSERT INTO benutzer (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Neue Daten erfolgreich gespeichert";
} else {
    echo "Fehler: " . $sql . "<br>" . $conn->error;
}

// Verbindung schließen
$conn->close();
?>
