<?php require_once("templates/header.php");
$stmt = $pdo->prepare('SELECT * ,(SELECT source From blog_images WHERE blog_images.blog_entrys_id=blog_entrys.blog_entrys_id AND prev_img=1) AS source,(SELECT alt From blog_images WHERE blog_images.blog_entrys_id=blog_entrys.blog_entrys_id AND prev_img=1) AS alt FROM blog_entrys where visible = 1 ORDER BY created_at desc LIMIT 6;');
$stmt->execute();
$blogentrys = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare('SELECT * FROM events where visible = 1 AND date > DATE_SUB(NOW(), INTERVAL 1 DAY) ORDER BY date asc LIMIT 6;');
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid px-0 pt-0 pb-3">
    <div class="mb-3" style="min-height: <?php if (!isMobile()) print("33"); else print("38"); ?>vh;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture data-bs-interval="5000">
                        <source type="image/webp" srcset="/media/index/indexpic1<?php if (isMobile()) {print("_mobile");}?>.webp" class="d-block w-100">
                        <source type="image/jpeg" srcset="/media/index/indexpic1<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100">
                        <img src="/media/index/indexpic1<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100" alt="Vorschaubild">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture data-bs-interval="5000">
                        <source type="image/webp" srcset="/media/index/indexpic2<?php if (isMobile()) {print("_mobile");}?>.webp" class="d-block w-100">
                        <source type="image/jpeg" srcset="/media/index/indexpic2<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100">
                        <img src="/media/index/indexpic2<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100" alt="Vorschaubild">
                    </picture>
                </div>
            </div>
            <button class="carousel-control-prev justify-content-start px-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="width: 60px; height: 60px" aria-hidden="true"></span>
            <span class="visually-hidden">Letztes</span>
            </button>
            <button class="carousel-control-next justify-content-end px-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="width: 60px; height: 60px" aria-hidden="true"></span>
            <span class="visually-hidden">Nächstes</span>
            </button>
        </div>
    </div>
    <?php if (!isMobile()): ?>
        <div class="container-xxl">
            <div class="row ctext justify-content-between">
                <h1 class="display-4 text-center text-kolping-orange">Gruppierungen</h1>
                <div class="col-6 py-3">
                    <div class="row">
                        <h2 class="text-start">Junge Familien</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/junge_familien.webp">
                                    <source type="image/jpeg" srcset="/media/index/junge_familien.jpg">
                                    <img src="/media/index/junge_familien.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-7">
                            <span>
                                Die Jungen Familien treffen sich in regelmäßigen Abständen für gemeinsam Unternehmungen.<br>
                                Kontakt: Judith Höfer<br>
                                Telefon: 07181 - 254908
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 py-3">
                    <div class="row">
                        <h2 class="text-start">Seniorengruppe</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/mutter_kind_kl.webp">
                                    <source type="image/jpeg" srcset="/media/index/mutter_kind_kl.jpg">
                                    <img src="/media/index/mutter_kind_kl.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-7">
                            <span>
                                Termine siehe Programm<br>
                                Nähere Informationen erfolgen jeweils ca. 2 Wochen vor Termin, auch mit Aushang am schwarzen Brett im Kolpinghaus.<br>
                                Kontakt: Rudi Pick<br>
                                Telefon: 07181 - 76457
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 py-3">
                    <div class="row">
                        <h2 class="text-start">Frauengruppe</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/frauengruppe.webp">
                                    <source type="image/jpeg" srcset="/media/index/frauengruppe.jpg">
                                    <img src="/media/index/frauengruppe.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-7">
                            <span>
                                Treff jeweils donnerstags ab 14:30 im Kolpinghaus.<br>
                                Darüber hinaus sind verschiedene Aktivitäten geplant, bitte Aushang im Kolpinghaus beachten.<br>
                                Kontakt: Maria Schieszl<br>
                                Telefon: 07181 - 61213
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-6 py-3">
                    <div class="row">
                        <h2 class="text-start">Kolpingjugend</h2>
                        <div class="col-4">
                            <a href="https://jugend.kolping-schorndorf.de" class="clink">
                                <img src="/media/index/kj_light.png" class="kj_light w-100 rounded-circle" alt="Kolpingjugend Logo">
                                <img src="/media/index/kj_dark.png" class="kj_dark w-100 rounded-circle" alt="Kolpingjugend Logo">
                            </a>
                        </div>
                        <div class="col-7">
                            <span>
                                Die Kolpingjugend trifft sich jeden zweiten Samstag um 16:30 im Kolpinghaus.<br>
                                Weitere Informationen sind auf unserer <a href="https://jugend.kolping-schorndorf.de" class="link">Webseite</a> zu finden.<br>
                                Kontakt: Gruppenleitende<br>
                                E-Mail: <a href="mailto:jugend@kolping-schorndorf.de" class="link">jugend@kolping-schorndorf.de</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 pt-3">
                <div class="col justify-content-center">
                    <div class="row row-cols-1">
                        <h2 class="col display-6 ctext text-center">Termine</h2>
                        <div class="col">
                            <div class="row row-cols-1">
                                <?php foreach ($events as $event): ?> 
                                    <div class="col mb-3">
                                        <div class="card cbg2 py-3 px-3">
                                            <div class="row g-0">
                                                <div class="col-md-2 d-flex justify-content-start align-items-center">
                                                    <div class="card cbg text-size-larger py-3 px-3 align-items-center text-center">
                                                        <?=date('d', strtotime($event['date']))?>
                                                        <br>
                                                        <?=date('M', strtotime($event['date']))?>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 d-flex justify-content-start align-items-center">
                                                    <div class="card-body ctext align-items-center">
                                                        <h3 class="card-title mb-0 align-center"><?=$event['title']?></h3>
                                                    </div>
                                                </div>
                                                <a href="/termin.php?id=<?=$event['events_id']?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col justify-content-center">
                    <div class="row row-cols-1">
                        <h2 class="col display-6 ctext text-center">Nachrichten</h2>
                        <div class="col">
                            <div class="row row-cols-1">
                                <?php foreach ($blogentrys as $blogentry): ?> 
                                    <div class="col card cbg2 mb-3 px-0">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <?php if(isset($blogentry['source'])): ?>
                                                    <picture>
                                                        <source type="image/webp" srcset="<?=$blogentry['source']?>.webp" class="img-fluid rounded-start">
                                                        <source type="image/jpeg" srcset="<?=$blogentry['source']?>" class="img-fluid rounded-start">
                                                        <img src="<?=$blogentry['source']?>" class="img-fluid rounded-start" alt="<?=$blogentry['alt']?>">
                                                    </picture>
                                                <?php endif;?>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body ctext">
                                                    <h3 class="card-title"><?=$blogentry['name']?></h3>
                                                    <span id="text-<?=$blogentry['blog_entrys_id']?>"><?=$blogentry['prev_text']?></span>
                                                    <script>unMarkToSpan("text-<?=$blogentry['blog_entrys_id']?>")</script>
                                                </div>
                                            </div>
                                            <a href="/nachricht.php?id=<?=$blogentry['blog_entrys_id']?>" class="stretched-link"></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="justify-content-center py-3">
                <h1 class="display-4 text-kolping-orange text-center">Ihr Weg zu uns</h1>
                <div class="row py-2 justify-content-start">
                    <div id="map"></div>
                </div>
                <div class="row py-2">
                    <h3 class="ctext">Adresse:</h3>
                    <span class="ctext">
                        Kolpingfamilie Schorndorf e.V.<br>
                        Lortzingstraße 44<br>
                        73614 Schorndorf
                    </span>
                </div>
            </div>
        </div>
        
        
        <script>
            var map = L.map('map').setView([48.79591, 9.51173], 16);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);
            var marker = L.marker([48.79591, 9.51173]).addTo(map);
            marker.bindPopup("Kolpinghaus Schorndorf");
        </script>
    <?php else: ?>
        <div class="container">
            <div class="row ctext justify-content-between">
                <h1 class="display-4 text-center text-kolping-orange">Gruppierungen</h1>
                <div class="col-12 py-3">
                    <div class="row">
                        <h2 class="text-start">Junge Familien</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/junge_familien.webp">
                                    <source type="image/jpeg" srcset="/media/index/junge_familien.jpg">
                                    <img src="/media/index/junge_familien.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-8">
                            <span>
                                Die Jungen Familien treffen sich in regelmäßigen Abständen für gemeinsam Unternehmungen.<br>
                                Kontakt: Judith Höfer<br>
                                Telefon: 07181 - 254908
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="row">
                        <h2 class="text-start">Seniorengruppe</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/mutter_kind_kl.webp">
                                    <source type="image/jpeg" srcset="/media/index/mutter_kind_kl.jpg">
                                    <img src="/media/index/mutter_kind_kl.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-8">
                            <span>
                                Termine siehe Programm<br>
                                Nähere Informationen erfolgen jeweils ca. 2 Wochen vor Termin, auch mit Aushang am schwarzen Brett im Kolpinghaus.<br>
                                Kontakt: Rudi Pick<br>
                                Telefon: 07181 - 76457
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="row">
                        <h2 class="text-start">Frauengruppe</h2>
                        <div class="col-4">
                            <a>
                                <picture data-bs-interval="5000">
                                    <source type="image/webp" srcset="/media/index/frauengruppe.webp">
                                    <source type="image/jpeg" srcset="/media/index/frauengruppe.jpg">
                                    <img src="/media/index/frauengruppe.jpg" class="d-block w-100 rounded-circle" alt="Vorschaubild">
                                </picture>
                            </a>
                        </div>
                        <div class="col-8">
                            <span>
                                Treff jeweils donnerstags ab 14:30 im Kolpinghaus.<br>
                                Darüber hinaus sind verschiedene Aktivitäten geplant, bitte Aushang im Kolpinghaus beachten.<br>
                                Kontakt: Maria Schieszl<br>
                                Telefon: 07181 - 61213
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <div class="row">
                        <h2 class="text-start">Kolpingjugend</h2>
                        <div class="col-4">
                            <a href="https://jugend.kolping-schorndorf.de" class="clink">
                                <img src="/media/index/kj_light.png" class="kj_light w-100 rounded-circle" alt="Kolpingjugend Logo">
                                <img src="/media/index/kj_dark.png" class="kj_dark w-100 rounded-circle" alt="Kolpingjugend Logo">
                            </a>
                        </div>
                        <div class="col-8">
                            <span>
                                Die Kolpingjugend trifft sich jeden zweiten Samstag um 16:30 im Kolpinghaus.<br>
                                Weitere Informationen sind auf unserer <a href="https://jugend.kolping-schorndorf.de" class="link">Webseite</a> zu finden.<br>
                                Kontakt: Gruppenleitende<br>
                                E-Mail: <a href="mailto:jugend@kolping-schorndorf.de" class="link">jugend@kolping-schorndorf.de</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 pt-3 justify-content-center">
                <div class="col-11">
                    <div class="col justify-content-center my-2">
                        <div class="row row-cols-1">
                            <h2 class="col display-6 ctext text-center">Termine</h2>
                            <div class="col">
                                <div class="row row-cols-1">
                                <?php foreach ($events as $event): ?> 
                                    <div class="col mb-3 card cbg2 py-3 px-3"> 
                                        <div class="row g-0 row-cols-2">
                                            <div class="col-3 d-flex justify-content-start align-items-center">
                                                <div class="card cbg text-size-larger py-3 px-3 align-items-center text-center">
                                                    <?=date('d', strtotime($event['date']))?>
                                                    <br>
                                                    <?=date('M', strtotime($event['date']))?>
                                                </div>
                                            </div>
                                            <div class="col-9 d-flex justify-content-start align-items-center">
                                                <div class="card-body ctext align-items-center">
                                                    <h5 class="card-title mb-0 align-center text-break"><?=$event['title']?></h5>
                                                </div>
                                            </div>
                                            <a href="/termin.php?id=<?=$event['events_id']?>" class="stretched-link"></a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col justify-content-center mt-2">
                        <div class="row row-cols-1">
                            <h2 class="col display-6 ctext text-center">Nachrichten</h2>
                            <div class="col">
                                <div class="row row-cols-1">
                                    <?php foreach ($blogentrys as $blogentry): ?> 
                                        <div class="col card cbg2 mb-3 px-0">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <?php if(isset($blogentry['source'])): ?>
                                                        <picture>
                                                            <source type="image/webp" srcset="<?=$blogentry['source']?>.webp" class="img-fluid rounded-top">
                                                            <source type="image/jpeg" srcset="<?=$blogentry['source']?>" class="img-fluid rounded-top">
                                                            <img src="<?=$blogentry['source']?>" class="img-fluid rounded-top" alt="<?=$blogentry['alt']?>">
                                                        </picture>
                                                    <?php endif;?>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body ctext">
                                                        <h3 class="card-title"><?=$blogentry['name']?></h3>
                                                        <span id="text-<?=$blogentry['blog_entrys_id']?>"><?=$blogentry['prev_text']?></span>
                                                        <script>unMarkToSpan("text-<?=$blogentry['blog_entrys_id']?>")</script>
                                                    </div>
                                                </div>
                                                <a href="/nachricht.php?id=<?=$blogentry['blog_entrys_id']?>" class="stretched-link"></a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>



<?php require_once("templates/footer.php") ?>