<?php 
ob_start();
require_once("templates/header.php"); 
$buffer=ob_get_contents();
ob_end_clean();

$title = "Kolpingsfamilie Schorndorf e.V. - Impressum der Kolpingsfamilie Schorndorf e.V.";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
?>
<div class="container py-3">
    <div style="min-height: 80vh;">
        <h1 class="display-3 text-center text-kolping-orange">Impressum</h1>
        <h5 class="mb-1">Angaben gemäß § 5 Telemediengesetz (TMG):</h5>
        <p class="mb-3">
            Kolpingsfamilie Schorndorf e. V.<br>
            Lortzingstraße 44<br>
            73614 Schorndorf
        </p>
        <h5 class="mb-1">Vertreten durch das Leitungsteam der Kolpingsfamilie Schorndorf:</h5>
        <p class="mb-3">
            Alexander Merkes, Timo Salenbauch, Karoline Weiß<br>
            E-Mail: <a href="mailto:leitungsteam@kolping-schorndorf.de" class="link">leitungsteam@kolping-schorndorf.de</a><br>
            Telefon: 0 71 81 - 48 13 78
        </p>
        <h5 class="mb-1">Eintragung im Vereinsregister:</h5>
        <p class="mb-3">
            Registergericht: Amtsgerichts Stuttgart<br>
            Registernummer: VR 280560
        </p>
        <h5 class="mb-1">Umsatzsteuer-ID:</h5>
        <p class="mb-3">
            Umsatzsteuer-Identifikationsnummer gemäß §27 a Umsatzsteuergesetz:<br>
            82005/08707 FA Schorndorf
        </p>
        <h5 class="mb-1">Inhaltlich verantwortlich i.S.v. §55 Abs. 2 RStV:</h5>
        <p class="mb-3">
            Leitungsteam der Kolpingsfamilie Schorndorf<br>
            Lortzingstraße 44<br>
            73614 Schorndorf<br>
            E-Mail: <a href="mailto:leitungsteam@kolping-schorndorf.dee" class="link">leitungsteam@kolping-schorndorf.de</a><br>
            Telefon: 0 71 81 - 48 13 78<br>
            <br>
            Nähere Hinweise zu unserem Datenschutz finden Sie unter diesem <a href="/datenschutz.php" class="link">Link</a>.
        </p>
    </div>
</div>
<?php require_once("templates/footer.php"); ?>