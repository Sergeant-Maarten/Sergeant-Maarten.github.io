<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verzamel de ingediende gegevens
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $telefoonnummer = $_POST["telefoonnummer"];
    $bericht = $_POST["bericht"];

    // E-mail ontvanger
    $ontvanger_email = "maarten.ceulemans5@gmail.com"; // Vervang dit door jouw e-mailadres

    // Onderwerp van de e-mail
    $onderwerp = "Nieuw contactformulierbericht van $voornaam $achternaam";

    // Berichtinhoud
    $bericht_inhoud = "Voornaam: $voornaam\n";
    $bericht_inhoud .= "Achternaam: $achternaam\n";
    $bericht_inhoud .= "E-mail: $email\n";
    $bericht_inhoud .= "Telefoonnummer: $telefoonnummer\n";
    $bericht_inhoud .= "Bericht:\n$bericht\n";

    // Verzend e-mail
    $verzonden = mail($ontvanger_email, $onderwerp, $bericht_inhoud);

    // Controleer of de e-mail succesvol is verzonden
    if ($verzonden) {
        echo "Bedankt voor uw bericht! We nemen zo snel mogelijk contact met u op.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van het formulier.";
    }
}
