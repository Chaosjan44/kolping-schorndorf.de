<?php
chdir ($_SERVER['DOCUMENT_ROOT']);
ob_start();
require_once("templates/header.php"); 
$buffer=ob_get_contents();
ob_end_clean();

$title = "Kolpingsfamilie Schorndorf e.V. - Unser Vorstand";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer; 
?>
<div class="container py-3">
    <div style="min-height: 80vh;">
        <h1 class="display-3 text-center text-kolping-orange">Unser Vorstand</h1>
        <div class="row">
            <div class="<?php if (!isMobile()) print("col-4"); else print("col-12 py-3");?>">
                <picture>
                    <source type="image/webp" srcset="/media/wir/vorstand.webp" class="d-block w-100">
                    <source type="image/jpeg" srcset="/media/wir/vorstand.jpg" class="d-block w-100">
                    <img src="/media/wir/vorstand.jpg" class="d-block w-100 rounded" alt="Vorschaubild">
                </picture>
            </div>
            <div class="<?php if (!isMobile()) print("col-8"); else print("col-12 py-3");?>">
                <div class="accordion accordion-flush cbg2 ctext" id="accordionExample">
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Praeses">
                        <button class="accordion-button cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cPräses" aria-expanded="true" aria-controls="cPräses">
                            Präses
                        </button>
                        </h2>
                        <div id="cPräses" class="accordion-collapse collapse show" aria-labelledby="Praeses" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>Walter Tötsch</strong><br>
                                <a href="mailto:walter.toetsch@kolping-schorndorf.de" class="link">walter.toetsch@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Leitungsteam">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cLeitungsteam" aria-expanded="false" aria-controls="cLeitungsteam">
                            Leitungsteam
                        </button>
                        </h2>
                        <div id="cLeitungsteam" class="accordion-collapse collapse" aria-labelledby="Leitungsteam" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Karoline Weiß<br>
                                    Alexander Merkes<br>
                                    Timo Salenbauch<br>
                                </strong>
                                <a href="mailto:leitungsteam@kolping-schorndorf.de" class="link">leitungsteam@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Kassiererin">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cKassiererin" aria-expanded="false" aria-controls="cKassiererin">
                            Kassiererin
                        </button>
                        </h2>
                        <div id="cKassiererin" class="accordion-collapse collapse" aria-labelledby="Kassiererin" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Marie Pick<br>
                                </strong>
                                <a href="mailto:marie.pick@kolping-schorndorf.de" class="link">marie.pick@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Schriftführerin">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cSchriftführerin" aria-expanded="false" aria-controls="cSchriftführerin">
                            Schriftführerin
                        </button>
                        </h2>
                        <div id="cSchriftführerin" class="accordion-collapse collapse" aria-labelledby="Schriftführerin" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Tanja Schniebs<br>
                                </strong>
                                <a href="mailto:tanja.schniebs@kolping-schorndorf.de" class="link">tanja.schniebs@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Junge_Familien">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cJunge_Familien" aria-expanded="false" aria-controls="cJunge_Familien">
                            Junge Familien
                        </button>
                        </h2>
                        <div id="cJunge_Familien" class="accordion-collapse collapse" aria-labelledby="Junge_Familien" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Judith Höfer<br>
                                </strong>
                                <a href="mailto:judith.hoefer@kolping-schorndorf.de" class="link">judith.hoefer@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Jugend_Vertretung">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cJugend_Vertretung" aria-expanded="false" aria-controls="cJugend_Vertretung">
                            Vertretung der Kolpingjugend im Vorstand
                        </button>
                        </h2>
                        <div id="cJugend_Vertretung" class="accordion-collapse collapse" aria-labelledby="Jugend_Vertretung" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Magnus Höfer<br>
                                    Jan Schniebs<br>
                                </strong>
                                <a href="mailto:jugend@kolping-schorndorf.de" class="link">jugend@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item cbg2 ctext">
                        <h2 class="accordion-header cbg2 ctext" id="Hausverwalter">
                        <button class="accordion-button collapsed cbg2 ctext" type="button" data-bs-toggle="collapse" data-bs-target="#cHausverwalter" aria-expanded="false" aria-controls="cHausverwalter">
                            Hausverwalter
                        </button>
                        </h2>
                        <div id="cHausverwalter" class="accordion-collapse collapse" aria-labelledby="Hausverwalter" data-bs-parent="#accordionExample">
                            <div class="accordion-body cbg2 ctext">
                                <strong>
                                    Matthias Pick<br>
                                </strong>
                                <a href="mailto:matthias.pick@kolping-schorndorf.de" class="link">matthias.pick@kolping-schorndorf.de</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('templates/footer.php'); ?>