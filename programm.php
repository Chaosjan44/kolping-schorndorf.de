<?php 
ob_start();
require_once("templates/header.php"); 
$buffer=ob_get_contents();
ob_end_clean();

$title = "Kolpingsfamilie Schorndorf e.V. - Unser Programm";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);
echo $buffer;
?>
<div class="container py-3">
    <div style="min-height: 80vh;">
        <h1 class="display-3 text-center mb-3 text-kolping-orange">Unser Programm zum Herunterladen</h1>
        <!-- <div class="row row-cols-1 gx-3">
            <div class="col p-2">
                <div class="card cbg2 shadow1" style="height: 100% !important;">
                    <div class="card-body ctext">
                        <h3 class="card-title text-center">Programm 2025 Januar - Juli</h3>
                        <div class="justify-content-center text-center">
                            <form method="get" action="media/programm/2025_01-07.ics">
                                <button class="btn btn-kolping mx-auto my-2" type="submit">
                                    <span class="card-text">Herunterladen</span>
                                    <i class="bi bi-download"></i>
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row row-cols-1 gx-3">
            <div class="col p-2">
                <div class="card cbg2 shadow1" style="height: 100% !important;">
                    <div class="card-body ctext">
                        <h3 class="card-title text-center">Programm 2024 August - Januar</h3>
                        <div class="justify-content-center text-center">
                            <form method="get" action="media/programm/2024_08-01.ics">
                                <button class="btn btn-kolping mx-auto my-2" type="submit">
                                    <span class="card-text">Herunterladen</span>
                                    <i class="bi bi-download"></i>
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("templates/footer.php"); ?>


