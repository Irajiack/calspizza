<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="display-menu">
    <div class="display-menu__Titles">
        <h2>
            <?=translator("Pasta_Title")?>
        </h2>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_Alldressed")?></h2>
            <p><?=translator("Pasta_Alldressed_Description")?></p>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">14.30$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">17.35$</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_MeatSauce")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">12.10$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">14.60$</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_MeatSauce_Pepperoni")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">13.15$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">15.95$</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_MeatSauce_Veggies")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">12.95$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">15.40$</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_SmokedMeat")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">15.35$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">17.90$</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Pasta_Half")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">9.35$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">N/A</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__three-column hidden-moile"></div>
    <div class="display-menu__three-column">
        <div>
            <h2><?=translator("Pasta_Grattin")?></h2>
            <div class="display-menu__sizes">
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Spaghetti")?></h3>
                    <h4 class="font-semibold">2.75$</h4>
                </div>
                <div class="display-menu__sizes--size-two-columns">
                    <h3 class="font-semibold"><?=translator("Lasagna")?></h3>
                    <h4 class="font-semibold">N/A</h4>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="display-menu__three-column hidden-moile"></div>
    
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>