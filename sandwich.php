<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="display-menu">
    <div class="display-menu__Titles">
        <h2>
            <?=translator("ClubSandwich_Title")?>
        </h2>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_WhiteMeat")?></h2>
            <h2>15$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_For2")?></h2>
            <h2>17.55$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_Cheese")?></h2>
            <h2>15.95$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_Cals")?></h2>
            <h2>18.65$</h2>
            <p><?=translator("ClubSandwich_CalsDescription")?></p>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_Poutine")?></h2>
            <h2>18.65$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("ClubSandwich_GrilledCheese")?></h2>
            <h2>5.45$</h2>
        </div>
        <hr>
    </div>
</section>


<section class="display-menu">
    <div class="display-menu__Titles">
        <h2>
            <?=translator("Sandwich_Title")?>
        </h2>
        <p>
            <?=translator("Sandwich_Notice")?>
        </p>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Sandwich_Tomato")?></h2>
            <h2>3.30$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Sandwich_BLT")?></h2>
            <h2>6.05$</h2>
        </div>
        <hr>
    </div>

    <div class="display-menu__three-column"></div>
    <div class="display-menu__three-column">
        <div>
            <h2><?=translator("Sandwich_Chicken")?></h2>
            <h2>7.15$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__three-column"></div>
</section>

<section class="display-menu">
    <div class="display-menu__Titles">
        <h2>
            <?=translator("Sandwich_Extra")?>
        </h2>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Sandwich_Extra_Veggies")?></h2>
            <h2>1.95$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__two-column">
        <div>
            <h2><?=translator("Sandwich_Extra_Bacon")?></h2>
            <h2>2.75$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__three-column"></div>
    <div class="display-menu__three-column">
        <div>
            <h2><?=translator("Sandwich_Extra_Cheese")?></h2>
            <h2>2.20$</h2>
        </div>
        <hr>
    </div>
    <div class="display-menu__three-column"></div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>