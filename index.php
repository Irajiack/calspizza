<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="display-menu mt-10">
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("SundaySpecial")?></h2><h2 class="mb-5">19$</h2>
            <h3><?=translator("SundaySpecial_1")?></h3><h3 class="mb-5"><?=translator("SundaySpecial_2")?></h3>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("MegaSpecial")?></h2><h2 class="mb-5">51$</h2>
            <h3><?=translator("MegaSpecial_1")?></h3><h3 class="mb-5"><?=translator("MegaSpecial_2")?></h3>
        </div>
        <hr>
    </div>
</section>
<section class="display-menu my-10">
    <div class="display-menu__three-column">
        <h2 class="mb-5"><?=translator("Adress")?></h2>
        <div>
            <p><?=translator("Adress_1")?></p>
            <p><?=translator("Adress_2")?></p>
            <p><?=translator("Adress_3")?></p>
        </div>
    </div>
    <div class="display-menu__three-column">
        <h2 class="mb-5"><?=translator("OpenHours")?></h2>
        <div>
            <p class="font-semibold"><?=translator("OpenHours_1")?></p>
            <p class="font-semibold"><?=translator("OpenHours_1.1")?></p>
            <p class="font-semibold"><?=translator("OpenHours_2")?></p>
            <p class="font-semibold"><?=translator("OpenHours_2.1")?></p>
        </div>
    </div>
    <div class="display-menu__three-column">
        <h2 class="mb-5"><?=translator("Delivery")?></h2>
        <div>
            <p><?=translator("Delivery_1")?></p>
            <p><?=translator("Delivery_2")?></p>
        </div>
    </div>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>