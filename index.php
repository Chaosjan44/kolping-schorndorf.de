<?php require_once("templates/header.php") ?>

<div class="container-fluid px-0 pt-0 pb-3">
    <div class="mb-3" style="min-height: <?php if (!isMobile()) print("33"); else print("38"); ?>vh;">
        <div id="carouselExampleFade" class="carousel <?php if (check_style() == "dark") { print("carousel-dark "); }?>slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <picture data-bs-interval="5000">
                        <source type="image/webp" srcset="/media/indexpic1<?php if (isMobile()) {print("_mobile");}?>.webp" class="d-block w-100">
                        <source type="image/jpeg" srcset="/media/indexpic1<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100">
                        <img src="/media/indexpic1<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100" alt="Vorschaubild">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture data-bs-interval="5000">
                        <source type="image/webp" srcset="/media/indexpic2<?php if (isMobile()) {print("_mobile");}?>.webp" class="d-block w-100">
                        <source type="image/jpeg" srcset="/media/indexpic2<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100">
                        <img src="/media/indexpic2<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100" alt="Vorschaubild">
                    </picture>
                </div>
                <div class="carousel-item">
                    <picture data-bs-interval="5000">
                        <source type="image/webp" srcset="/media/indexpic3<?php if (isMobile()) {print("_mobile");}?>.webp" class="d-block w-100">
                        <source type="image/jpeg" srcset="/media/indexpic3<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100">
                        <img src="/media/indexpic3<?php if (isMobile()) {print("_mobile");}?>.jpg" class="d-block w-100" alt="Vorschaubild">
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
</div>



<?php require_once("templates/footer.php") ?>