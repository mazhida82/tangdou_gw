<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"E:\phpStudy\WWW\tangdou_gw\public/../application/index\view\index\index.html";i:1517209250;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no” />
    <title>糖豆</title>
    <link rel="stylesheet" href="__STATIC__/css/style.css">
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
</head>
<body>
<style>
    .pg1 {
        background: url(__IMGURL__<?php echo $ad['bg1']->img; ?>) center no-repeat;
    }
    .pg2 {
        background: url(__IMGURL__<?php echo $ad['bg2']->img; ?>) center no-repeat;
    }
    .pg3 {
        background: url(__IMGURL__<?php echo $ad['bg3']->img; ?>) center no-repeat;
    }
    .pg4 {
        background: url(__IMGURL__<?php echo $ad['bg4']->img; ?>) center no-repeat;
    }

</style>
<div class="wrapper">
    <div class="pg pg1">
        <div class="inner inner-wrap">

            <img src="__IMGURL__<?php echo $ad['logo']->img; ?>" alt="" class="pg-item pg1-img wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".2s">
            <p class="pg-item pg1-font wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg1word; ?></p>
        </div>
    </div>
    <div class="pg pg2">
        <div class="inner">
            <img src="__IMGURL__<?php echo $ad['phone1']->img; ?>" alt="" class="pg-item pg2-font wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".2s">
            <div class="pg2-code-wrap wow bounceInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                <p class="pg-txt pg2-txt"><?php echo $setting->bg2word1; ?></p>
                <p class="pg-txt pg2-txt"><?php echo $setting->bg2word2; ?></p>
                <img src="__IMGURL__<?php echo $ad['code']->img; ?>" alt="" class="pg2-code">
            </div>
        </div>
    </div>
    <div class="pg pg3">
        <div class="inner">
            <p class="pg-txt pg3-txt wow shake" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg3word1; ?></p>
            <p class="pg-txt wow shake pg6-txt" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg3word2; ?></p>
            <img src="__IMGURL__<?php echo $ad['phone2']->img; ?>" alt="" class="pg-item pg3-font wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
        </div>
    </div>
    <div class="pg pg4">
        <div class="inner">

            <img src="__IMGURL__<?php echo $ad['phone3']->img; ?>" alt="" class="pg-item pg4-font wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
            <p class="pg-txt pg4-txt wow rotateInUpLeft" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg4word1; ?></p>
            <p class="pg-txt pg7-txt wow rotateInUpLeft" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg4word2; ?></p>
        </div>
    </div>
    <div class="pg pg5">
        <p class="pg5-title wow wobble" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg5word1; ?></p>
        <p class="pg5-txt wow wobble" data-wow-duration="1.5s" data-wow-delay=".2s"><?php echo $setting->bg5word2; ?></p>
    </div>
    <div class="footer">
        <p class="copy-right"><?php echo $setting->beian; ?></p>
    </div>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>