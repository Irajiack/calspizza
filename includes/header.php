<?php
if(!isset($_SESSION['LANG']))
{ 
   session_start();
}
date_default_timezone_set('America/Montreal');
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/translator.php';
?>

<!DOCTYPE html>
<html lang="<?=translator("language")?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=translator("applicationName")?></title>
    <link rel="stylesheet" href="css/final.css">
    <link rel="shortcut icon" type="image/png" href="pictures/Pizza.png"/>
    <meta name="identifier-url" content="calspizza.ca" />
    <meta name="author" content="Camille Élisabeth Bleau" />
    <link rel="stylesheet" type="text/css" href="css/final.css" />
    <script src="https://kit.fontawesome.com/27d1739a1d.js" crossorigin="anonymous"></script>
    <script src="javascript/global.js"></script>
</head>
<body>
    <div ID="openMenu" class="mobile-menu" onclick="mobile_menu('open');">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div id="closeMenu" class="close-mobile-menu" onclick="mobile_menu('close');">
        <i class="fa-solid fa-x"></i>
    </div>
    <header id="FullMenu">
        
        <div class="inner">
            <div class="inner__top-container inner__top-container--flex">
            <?php
                if (getLanguage() === 'en') 
                {
                    echo '<a href="' . $_SERVER['PHP_SELF'] . '?lang=fr" class="text-white hover:text-yellow-300">Français <img src="pictures/LangFrench.png" class="w-10 inline ml-3"></a>';
                } 
                else 
                {
                    echo '<a href="' . $_SERVER['PHP_SELF'] . '?lang=en" class="text-white hover:text-yellow-300">English <img src="pictures/LangEnglish.png" class="w-10 inline ml-3"></a>';
                }
            ?>
            </div>
            <div class="inner__bottom-container">
                <a class="text-white text-2xl hover:text-yellow-300" href="tel:8193226421"><i class="fa-solid fa-phone-volume"></i> (819)-322-6421 </a>
                <nav class="menu mt-3">
                    <a href='/specials.php' class="menu__items text-lg"><?=translator("menu_combo")?></a>
                    <a href='/pizza.php' class="menu__items text-lg"><?=translator("menu_pizza")?></a>
                    <a href='/souvlaki.php' class="menu__items text-lg"><?=translator("menu_pita")?></a>
                    <a href='/subs.php' class="menu__items text-lg"><?=translator("menu_subs")?></a>
                    <a href='/salads.php' class="menu__items text-lg"><?=translator("menu_salads")?></a>
                    <a href='/pasta.php' class="menu__items text-lg"><?=translator("menu_pastas")?></a>
                    <a href='/burger.php' class="menu__items text-lg"><?=translator("menu_burger")?></a>
                    <a href='/fries.php' class="menu__items text-lg"><?=translator("menu_fries")?></a>
                    <a href='/sandwich.php' class="menu__items text-lg"><?=translator("menu_sandwich")?></a>
                    <a href='/plates.php' class="menu__items text-lg"><?=translator("menu_plates")?></a>
                    <a href='/sides.php' class="menu__items text-lg"><?=translator("menu_sides")?></a>
                </nav>
            </div>
        </div>
    </header>
    <div class="main-footer-group">
        <main>
        <a href="/">
            <img src="pictures/logo_new_1000.png" class="logo">
        </a>
        <h1><?=translator("catchPhrase")?></h1>