<?php
require_once("php/functions.php");
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Webseite der Kolpingsfamilie Schorndorf">
    <meta name="author" content="Developed by Jan">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" >
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script defer data-domain="kolping-schorndorf.de" src="https://plausible.schniebs.com/js/plausible.js"></script>
    <link rel="stylesheet" href="/css/styles.css">          <!-- Link Stylesheet -->
    <link rel="stylesheet" href="/css/dark.css" disabled>   <!-- Link Dark Stylesheet and disable it -->
    <link rel="stylesheet" href="/css/light.css" disabled>  <!-- Link Light Stylesheet and disable it -->
    <script src="/js/custom.js"></script>
    <script src="/js/markdown_unmark.js"></script>
    <link rel="icon" type="image/png" href="/favicon.jpg" sizes="1024x1024" />
    <title>Kolpingsfamilie Schorndorf</title>
</head>
<body>

<nav class="navbar header-header navbar-expand-lg cbg ctext sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/images/k.png" class="navbar-icon_light align-text-bottom" alt="Navbar Logo">
            <img src="/images/k_dark.png" class="navbar-icon_dark align-text-bottom" alt="Navbar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse cbg" tabindex="-1" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item text-size-x-large">
                    <a class="nav-link clink" aria-current="page" href="/termine.php">Termine</a>
                </li>
                <li class="nav-item text-size-x-large">
                    <a class="nav-link clink" href="/nachrichten.php">Nachrichten</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle cbg clink" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Wir über uns
                    </a>
                    <ul class="dropdown-menu cbg ctext">
                        <li><a class="dropdown-item clink cbg" href="/wir/grusswort.php">Grusswort Präses</a></li>
                        <li><a class="dropdown-item clink cbg" href="/wir/vorstand.php">Unser Vorstand</a></li>
                        <li><a class="dropdown-item clink cbg" href="/wir/kolping_in_12_saetzen.php">Kolping in 12 Sätzen</a></li>
                    </ul>
                </li>
                <li class="nav-item text-size-x-large <?php if (!isMobile()) print("pt-1 ps-2"); else print("pt-2");""?>">
                    <a href="https://jugend.kolping-schorndorf.de">
                        <img src="/images/kj.svg" class="navbar-kj_light align-text-bottom" alt="Kolpingjugend Logo">
                        <img src="/images/kj_dark.svg" class="navbar-kj_dark align-text-bottom" alt="Kolpingjugend Logo">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="cookieModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog cbg2">
        <div class="modal-content cbg">
            <div class="modal-header cbg">
                <h4 class="modal-title ctext fw-bold" id="cookieModalLabel">Mhhh Lecker &#x1F36A;!</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ctext cbg fw-normal">
                <div class="px-2">
                    <p>Wir nutzen Cookies auf unserer Website.<br>
                    Alle Cookies welche auf dieser Webseite verwendet werden sind für die Funktion der Webseite nötig. <br>
                    Die Cookies werden nicht ausgewertet.
                    </p>
                </div>
            </div>
            <div class="modal-footer ctext cbg fw-bold">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick='setCookie("acceptCookies", "false", 365)'>Ablehnen</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick='setCookie("acceptCookies", "true", 365)'>Akzeptieren</button>
            </div>
        </div>
    </div>
</div>

<?php 
if (!check_cookie()):
?>
<script type="text/javascript">
    const myModal = new bootstrap.Modal('#cookieModal');
    const modalToggle = document.getElementById('cookieModal');
    myModal.show(modalToggle);
</script>
<?php endif; ?>