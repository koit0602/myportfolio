<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kito</title>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/23554c29ab.js" crossorigin="anonymous"></script>
    <!-- BootStrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <!-- jQuery読み込み -->
    <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1');
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(wp_is_mobile()): ?>
    <!-- モバイル用のヘッダー -->
    <header class="w-100 header-transparent">
        <div class="header-nav container-fluid">
            <div class="d-flex h-100 flex-column justify-content-around">
                <div class="d-flex justify-content-center">
                    <h1 class="mobile-header-title"><a class="kito" href="#kito">Kito</a></h1>
                </div>
                <ul class="header-right row d-flex d-block justify-content-around align-items-end p-0 pb-2 m-0">
                    <li class="mb-header-nav-box tb-header-nav-box text-center pr-2 d-inline-block"><a class="mb-header-nav-a tb-header-nav-a" href="#about"><p class="mobile-nav-p mb-1">About</p><i class="fas fa-biking d-block"></i></a></li>
                    <li class="mb-header-nav-box tb-header-nav-box text-center pr-2 d-inline-block"><a class="mb-header-nav-a tb-header-nav-a" href="#service"><p class="mobile-nav-p mb-1">Service</p><i class="far fa-handshake d-block"></i></a></li>
                    <!-- <li class="mb-header-nav-box tb-header-nav-box text-center pr-2 d-inline-block"><a class="mb-header-nav-a tb-header-nav-a" href=""><p class="mobile-nav-p mb-1">Works</p><i class="fas fa-laptop-code d-block"></i></a></li> -->
                    <li class="mb-header-nav-box tb-header-nav-box text-center pr-2 d-inline-block"><a class="mb-header-nav-a tb-header-nav-a" href="#contact"><p class="mobile-nav-p mb-1">Contact</p><i class="fab fa-weixin d-block"></i></a></li>
                    <li class="mb-header-nav-box tb-header-nav-box text-center d-inline-block"><a class="mb-header-nav-a tb-header-nav-a" href="https://www.instagram.com/n_kitokito/?hl=ja"><p class="mobile-nav-p mb-1">instagram</p><i class="fab fa-instagram d-block"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
<?php else: ?>
    <!-- PC用のヘッダー -->
    <header id="kito" class="w-100 header-transparent">
        <div class="header-nav w-100 m-auto m-0 p-0">
            <div class="d-flex m-0 w-100 pl-5 h-100 justify-content-between align-items-center">
                <div class="pc-header-title pl-5"><a class="kito" href="#kito">Kito</a></div>
                <ul class="pc-header-right d-block d-flex">
                    <li class="pr-5"><a class="pc-nav-a" href="#about"><i class="pr-2 fas fa-biking"></i><span class="pc-nav-span">About</span></a></li>
                    <li class="pr-5"><a class="pc-nav-a" href="#service"><i class="pr-2 far fa-handshake"></i><span class="pc-nav-span">Service</span></a></li>
                    <!-- <li class="pr-5"><a class="pc-nav-a" href=""><i class="pr-2 fas fa-laptop-code"></i><span class="pc-nav-span">Works</span></a></li> -->
                    <li class="pr-5"><a class="pc-nav-a" href="#contact"><i class="pr-2 fab fa-weixin"></i><span class="pc-nav-span">Contact</span></a></li>
                    <li class="pr-5"><a class="pc-nav-a" href="https://www.instagram.com/n_kitokito/?hl=ja"><i class="pr-2 fab fa-instagram"></i><span class="pc-nav-span">instagram</span></a></li>
                </ul>
            </div>
        </div>
    </header>
<?php endif; ?>