<?php
require_once("php/functions.php");

if (!isset($_GET["id"])) {
    header("location: events.php");
    exit;
}

if (isset($_GET["d"])) {
    $stmt = $pdo->prepare('SELECT * FROM d_events where d_events_id  = ?  and visible = 1');
    // bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
    $stmt->bindValue(1, $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    if ($stmt->rowCount() != 1) {
        error_log($stmt->rowCount());
        header("location: termine.php");
        exit;
    }
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('SELECT vorname, nachname FROM users where user_id = ?');
    $stmt->bindValue(1, $event['created_by'], PDO::PARAM_INT);
    $stmt->execute();
    $creator = $stmt->fetch(PDO::FETCH_ASSOC);

    ob_start();
    require_once("templates/header.php"); 
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Kolpingsfamilie Schorndorf e.V. - ".$event["title"];
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
    echo $buffer;
    ?>
    <div class="container-xxl py-3" style="min-height: 80vh;">
        <div class="row">
            <h1 class="display-4 text-center mb-3 text-kolping-orange"><?=$event["title"]?></h1>
        </div>
        <div class="<?php if (!isMobile()) print("row");?>">
            <div class="col<?php if (!isMobile()) print("-6");?> mb-3">
                <div class="card cbg2 py-3 px-3">
                    <div class="row g-0">
                        <div class="col">
                            <div class="card cbg text-size-larger py-3 px-3 align-items-center text-center">
                                <?=nbrToDay($event['weekday'])?>
                                <br>
                                <?=$event['time']?>
                            </div>
                        </div>
                        <div class="col-md-10 d-flex justify-content-start align-items-center">
                            <div class="card-body ctext align-items-center">
                                <h3 class="card-title align-center"><?=$event['title']?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="col<?php if (!isMobile()) print("-6");?>" id="text-<?=$event["d_events_id"]?>"><?=$event["text"]?></span>
            <script>unMarkToSpan("text-<?=$event["d_events_id"]?>")</script>
        </div>
        <div class="row justify-content-between pt-3">
        <div class="col ctext text-size-large <?php if (!isMobile()) print("ps-0");?>">
                Autor*in:<?php if (isMobile()) print("<br>");?> <?=$creator['vorname']?> <?=$creator['nachname']?>
            </div>
            <div class="col text-end ctext text-size-large">
                Letzte Änderung:<?php if (isMobile()) print("<br>");?> <?=date('d.m.Y H:i', strtotime($event['updated_at']))?>
            </div>
        </div>
    </div>
    <?php
    include_once("templates/footer.php");
    exit;
} else

$stmt = $pdo->prepare('SELECT * FROM events where events_id  = ?  and visible = 1');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, $_GET["id"], PDO::PARAM_INT);
$stmt->execute();
if ($stmt->rowCount() != 1) {
    error_log($stmt->rowCount());
    header("location: termine.php");
    exit;
}
$event = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare('SELECT vorname, nachname FROM users where user_id = ?');
$stmt->bindValue(1, $event['created_by'], PDO::PARAM_INT);
$stmt->execute();
$creator = $stmt->fetch(PDO::FETCH_ASSOC);

ob_start();
require_once("templates/header.php"); 
$buffer=ob_get_contents();
ob_end_clean();

$title = "Kolpingsfamilie Schorndorf e.V. - ".$event["title"];
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
?>
<div class="container-xxl py-3" style="min-height: 80vh;">
    <div class="row">
        <h1 class="display-4 text-center mb-3 text-kolping-orange"><?=$event["title"]?></h1>
    </div>
    <div class="<?php if (!isMobile()) print("row");?>">
        <div class="col<?php if (!isMobile()) print("-6");?> mb-3">
            <div class="card cbg2 py-3 px-3">
                <div class="row g-0">
                    <div class="col">
                        <div class="card cbg text-size-larger py-3 px-3 align-items-center text-center">
                            <?=$datedd->format(strtotime($event['date']))?>
                            <br>
                            <?=$dateMMM->format(strtotime($event['date']))?>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-start align-items-center">
                        <div class="card-body ctext align-items-center">
                            <h3 class="card-title align-center"><?=$event['title']?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="col<?php if (!isMobile()) print("-6");?>" id="text-<?=$event["events_id"]?>"><?=$event["text"]?></span>
        <script>unMarkToSpan("text-<?=$event["events_id"]?>")</script>
    </div>
    <div class="row justify-content-between pt-3">
    <div class="col ctext text-size-large <?php if (!isMobile()) print("ps-0");?>">
            Autor*in:<?php if (isMobile()) print("<br>");?> <?=$creator['vorname']?> <?=$creator['nachname']?>
        </div>
        <div class="col text-end ctext text-size-large">
            Letzte Änderung:<?php if (isMobile()) print("<br>");?> <?=date('d.m.Y H:i', strtotime($event['updated_at']))?>
        </div>
    </div>
</div>

<?php
include_once("templates/footer.php")
?>
