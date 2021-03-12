<?php get_header(); ?>

<?php if(wp_is_mobile()): ?>
    <!-- モバイル用のトップ画像 -->
    <div class="mobile-top-img top-img w-100"><img class="w-100 h-100" src="http://localhost/wordpress/wp-portforio/wp-content/uploads/2021/03/pf-top.png" alt="モバイル用ヘッダー画像です"></div>
<?php else: ?>
    <!-- PC用のトップ画像 -->
    <div class="pc-top-img top-img w-100"><img class="w-100 h-100" src="http://localhost/wordpress/wp-portforio/wp-content/uploads/2021/03/pf-pc-top.png" alt="PC用ヘッダー画像です"></div>
<?php endif; ?>

<main class="container mt-3 w-100 h-100">
    <!-- About -->
    <div class="about-wrapper">
        <div class="about-h p-5 m-0 w-100">
            <h2 id="about" class="text-center"><span class="about-span-color">A</span>bout</h2>
            <i class="fas fa-biking d-block text-center fa-2x"></i>
        </div>
        <div class="about-box m-0 w-100 p-3">
            <div class="row align-items-center">
            <?php
                $ua=$_SERVER['HTTP_USER_AGENT'];
                $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
                    if ($browser == true){
                    $browser = 'sp';
                }
                if($browser == 'sp'){
            ?>
            <!-- スマホのときの名前 -->
            <div class="about-name col-8"><h4>---名前---</h4><p class="">中江　紀斗<br>Nakae Kito</p></div>
                <div class="img-squere-position col-4">
                    <div class="img-squere-parent position-relative bg-secondary">
                        <div class="img-squere position-absolute">
                            <div class="about-img">画像を入れます</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <!-- スマホ以外のときの名前 -->
            <div class="about-name col-8"><h4>---名前---</h4><p class="">中江　紀斗　Nakae Kito</p></div>
                <div class="img-squere-position col-4">
                    <div class="img-squere-parent position-relative bg-secondary">
                        <div class="img-squere position-absolute">
                            <div class="about-img">画像を入れます</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="about-textbox col-12">
                    <div class="about-career">
                        <h4>---経歴---</h4>
                        <br>
                        1999年：<br>
                        広島県広島市にて生まれ、育つ。<br>
                        <br>
                        2018年：<br>
                        広島工業大学　工学部　電子情報工学科　入学<br>
                        <br>
                        2019年　3月：<br>
                        大学１年生の春休みに、自転車にて四国を一周し、自転車旅に魅かれたことで自転車で日本一周を目指す。<br>
                        <br>
                        2019年　9月：<br>
                        大学２年生の夏休みに、アメリカのユタ州に住むアメリカ人の友人宅にて、少しの間その友人と一緒に暮らす。<br>
                        <br>
                        2020年　2月,3月：<br>
                        大学２年生の春休みに、自転車で九州一周をする。<br>
                        <br>
                        2020年　12月：<br>
                        プログラミングスクールTECH I.S.に入校し、プログラミングの勉強を始める。<br>
                        <br>
                    </div>
                    <?php
                        $ua=$_SERVER['HTTP_USER_AGENT'];
                        $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
                            if ($browser == true){
                            $browser = 'sp';
                        }
                        if($browser == 'sp'){
                    ?>
                    <!-- スマホのときに表示 -->
                    <div class="about-skill">
                        <h4>---スキル---</h4>
                        <br>
                        <span><i class="icon-html pr-1 fab fa-html5"></i>HTML,<i class="icon-css pr-1 fab fa-css3-alt"></i>CSS</span>
                        <span>/<i class="icon-php pr-1 fab fa-php"></i>PHP</span>
                        <span>/<i class="icon-js pr-1 fab fa-js"></i>JavaScript</span><br>
                        <span>/<img class="pr-1 jquery-icon pb-1" src="http://localhost/wordpress/wp-portforio/wp-content/uploads/2021/03/jquery.png"/>jQuery/</span>
                        <span>/<i class="icon-mysql pr-1 fas fa-database"></i>mySQL</span>
                        <span>/<i class="icon-wp pr-1 fab fa-wordpress"></i>WordPress</span><br>
                        <span>/<i class="icon-bootstrap pr-1 fab fa-bootstrap"></i>BootStrap</span>
                    </div>
                    <?php }else{ ?>
                    <!-- スマホ以外のときに表示 -->
                    <div class="about-skill">
                        <h4>---スキル---</h4>
                        <span><i class="icon-html pr-1 fab fa-html5"></i>HTML,<i class="icon-css pr-1 fab fa-css3-alt"></i>CSS/</span>
                        <span><i class="icon-php pr-1 fab fa-php"></i>PHP/</span>
                        <span><i class="icon-js pr-1 fab fa-js"></i>JavaScript/</span>
                        <span><img class="pr-1 jquery-icon" src="http://localhost/wordpress/wp-portforio/wp-content/uploads/2021/03/jquery.png"/>jQuery/</span>
                        <span><i class="icon-mysql pr-1 fas fa-database"></i>mySQL/</span>
                        <span><i class="icon-wp pr-1 fab fa-wordpress"></i>WordPress/</span>
                        <span><i class="icon-bootstrap pr-1 fab fa-bootstrap"></i>BootStrap</span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Service -->
    <div class="service-wrapper">
        <div class="service-h p-5 m-0 w-100">
            <h2 id="service" class="text-center"><span class="service-span-color">S</span>ervice</h2>
            <i class="far fa-handshake d-block text-center fa-2x"></i>
        </div>
        <div class="row justify-content-around pb-3">
            <div class="service-box-parent col-sm-4 mt-3"><div class="service-box position-relative"><div class="service-content-box position-absolute">
                <div class="service-content-position position-relative">
                    <div class="service-content-colorbox1 position-absolute"><div class="service-content-whitebox p-2 position-absolute">
                        <p class="service-content-title text-center m-0">ディレクション</p>
                        <div class="text-center">
                            <i class="service-content-icon service-content-icon1 far fa-edit d-block"></i>
                        </div>
                        <div class="service-content-text mt-3">
                            お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。
                            制作ではデザインに入る前の事前の準備が特に重要になります。
                            何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。
                        </div>
                    </div></div>
                </div>
            </div></div></div>
            <div class="service-box-parent col-sm-4 mt-3"><div class="service-box position-relative"><div class="service-content-box position-absolute">
                <div class="service-content-position position-relative">
                    <div class="service-content-colorbox2 position-absolute"><div class="service-content-whitebox p-2 position-absolute">
                        <p class="service-content-title text-center m-0">デザイン</p>
                        <div class="text-center">
                            <i class="service-content-icon service-content-icon2 fas fa-paint-brush"></i>
                        </div>
                        <div class="service-content-text mt-3">
                            ヒアリングに基づいたプランに沿って、デザインを作成いたします。
                            人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。
                            インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。
                        </div>
                    </div></div>
                </div>
            </div></div></div>
            <div class="service-box-parent col-sm-4 mt-3"><div class="service-box position-relative"><div class="service-content-box position-absolute">
                <div class="service-content-position position-relative">
                    <div class="service-content-colorbox3 position-absolute"><div class="service-content-whitebox p-2 position-absolute">
                        <p class="service-content-title text-center m-0">コーディング</p>
                        <div class="text-center">
                            <i class="service-content-icon service-content-icon3 fas fa-code"></i>
                        </div>
                        <div class="service-content-text mt-3">
                            デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。
                            スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。
                        </div>
                    </div></div>
                </div>
            </div></div></div>
        </div>
    </div>

    <!-- Works -->
    <!-- 実績を入れていく -->

    <!-- Contact -->
    <div class="contact-wrapper pb-3">
        <div class="contact-h p-5 m-0 w-100">
            <h2 id="contact" class="text-center"><span class="contact-span-color">C</span>ontact</h2>
            <i class="fab fa-weixin d-block text-center fa-2x"></i>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="13" title="コンタクトフォーム 1"]'); ?>
    </div>
</main>

<?php get_footer(); ?>