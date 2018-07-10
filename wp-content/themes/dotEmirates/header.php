<?php $theme_opts = get_option(de_opts); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <title>dotemirates</title>
   <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <style>
        .fa::before{
            /*float: right;*/
            /*margin-top: 19px;*/
            /*width: 30px;*/
        }
    </style>
    <!-- <link rel="shortcut icon" href="images/favicon.ico" /> -->
    -->
    <?php wp_head(); ?>
</head>
<body class="">

<header id="header">

    <div class="top ">
        <div class="gridContainer clearfix">
            <h1 class="logo pullRight"><img src="<?= get_template_directory_uri(). '/images/logo.png'?>" alt=""></h1>
            <div class="leftArea pullLeft">

                <div class="one search">
                    <div class="icon"><i class="icon-search"></i></div>
                </div>
                <div class="one mainSocial">
                    <?php
                    if(!empty($theme_opts['twitter'])){
                       ?> <a href="http://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="icon-twitter"></i></a><?php
                    }
                    if(!empty($theme_opts['facebook'])){
                       ?> <a href="http://facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="icon-facebook"></i></a<?php
                    }
                    if(!empty($theme_opts['telegram'])){
                       ?> <a href="http://telegram.com/<?php echo $theme_opts['telegram']; ?>"><i class="icon-telegram"></i></a><?php
                    }

                    ?>

                   <!-- <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-facebook"></i></a>-->
                </div>
                <div class="one widgets clearfix">
                    <div class="oneWidget">
                        <span class="icon"><i class="icon-economy"></i></span>
                    </div>
                    <div class="oneWidget">
                        <span class="icon"><i class="icon-weather"></i></span>
                    </div>
                    <div class="oneWidget">
                        <span class="icon"><i class="icon-pray"></i></span>
                    </div>
                    <div class="oneWidget">
                        <span class="icon"><i class="icon-currencies"></i></span>
                    </div>
                    <div class="oneWidget">
                        <span class="icon"><i class="icon-gas"></i></span>
                    </div>
                </div>
                <div class="one"><a href="#">EN</a></div>

            </div>
        </div>
    </div>

    <nav id="navigation">
        <div class="gridContainer clearfix">
            <div class="menuIcon"><div><span></span><span></span><span></span></div><span class="text">القائمة</span></div>
            <div class="theMenu relative">
                <?php dotEm_nav_menu()?>
                <div class="seeMore" onClick="sliceMenu()"><i class="icon-arrow-right"></i> <span>المزيد</span><span class="back">الرجوع</span></div>
            </div>

        </div>
    </nav>

</header>
