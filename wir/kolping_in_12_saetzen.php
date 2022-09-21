<?php
chdir ($_SERVER['DOCUMENT_ROOT']);
require_once('templates/header.php');
?>
<div class="container py-3">
    <div style="min-height: 80vh;">
        <h1 class="display-3 text-center text-kolping-orange">Kolping in 12 Sätzen</h1>
        <div class="row">
            <?php if (!isMobile()):?>
                <div class="col-2"></div>
                <div class="col-3">
                    <picture>
                        <source type="image/webp" srcset="/media/wir/ak_portraet_kl.webp">
                        <source type="image/jpeg" srcset="/media/wir/ak_portraet_kl.jpg">
                        <img src="/media/wir/ak_portraet_kl.jpg" class="d-block w-100 rounded" alt="Vorschaubild">
                    </picture>
                </div>
            <?php endif;?>
            <div class="<?php if (!isMobile()) print("col-7"); else print("col-12");?> my-auto">
                <li>Wir laden ein und machen Mut zur Gemeinschaft.</li>
                <li>Wir handeln im Auftrag Jesu Christi.</li>
                <li>Wir nehmen uns Adolph Kolping zum Vorbild.</li>
                <li>Wir sind in der Kirche zu Hause.</li>
                <li>Wir sind eine generationenübergreifende familienhafte Gemeinschaft.</li>
                <li>Wir prägen als katholischer Sozialverband die Gesellschaft mit.</li>
                <li>Wir begleiten Menschen in ihrer persönlichen und beruflichen Bildung.</li>
                <li>Wir eröffnen Perspektiven für junge Menschen.</li>
                <li>Wir vertreten ein christliches Arbeitsverständnis.</li>
                <li>Wir verstehen uns als Anwalt für Familie.</li>
                <li>Wir spannen ein weltweites Netz der Partnerschaft.</li>
                <li>Wir leben verantwortlich und handeln solidarisch.</li>
            </div>
        </div>
    </div>
</div>


<?php require_once('templates/footer.php'); ?>