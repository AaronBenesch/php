<?php

// Datei, in der Passwörter gespeichert werden
$datei = "passwortmanager.php";

while (true) {
    // Auswahl anzeigen
    echo "\nWas möchtest du tun?\n";
    echo "1. Neues Passwort speichern\n";
    echo "2. Gespeicherte Passwörter anzeigen\n";
    echo "3. Beenden\n";
    echo "Wähle 1, 2 oder 3: ";
    $wahl = trim(fgets(STDIN)); // Eingabe lesen

    if ($wahl === "1") {
        // Passwort speichern
        echo "Name der Website oder des Kontos: ";
        $website = trim(fgets(STDIN));

        echo "Passwort: ";
        $passwort = trim(fgets(STDIN));

        // Speichern
        $eintrag = "$website: $passwort\n";
        file_put_contents($datei, $eintrag, FILE_APPEND);
        echo "Passwort gespeichert!\n";

    } elseif ($wahl === "2") {
        // Passwörter anzeigen
        if (file_exists($datei)) {
            echo "\nGespeicherte Passwörter:\n";
            echo file_get_contents($datei);
        } else {
            echo "Keine Passwörter gespeichert.\n";
        }

    } elseif ($wahl === "3") {
        // Beenden
        echo "Programm wird beendet.\n";
        break;

    } else {
        // Ungültige Eingabe
        echo "Ungültige Eingabe, bitte wähle 1, 2 oder 3.\n";
    }
}
?>
