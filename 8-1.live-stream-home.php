<?php
$pageName = 'stream-home';
$title = '烤肉影片';
require './parts/connect-db.php';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
    <link rel="stylesheet" href="css/videostyle.css">
    <!-- <link rel="stylesheet" href="css/Vtuber_main.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<?php include __DIR__ . '/parts/html-navbar.php' ?>

<section class="coinshop">  
    <div class="freecoin-mission-title d-flex align-items-center">
        <div class="freecoin-mission-title-en shine">烤肉影片精選</div>
    </div>

    <!-- 3D輪播牆 -->
    <section id="carousel">
        <input type="radio" name="slider" id="s1">
        <input type="radio" name="slider" id="s2">
        <input type="radio" name="slider" id="s3" checked>
        <input type="radio" name="slider" id="s4">
        <input type="radio" name="slider" id="s5">

        <label for="s1" id="slider1">
            <img class="mission-card" src="imgs/live streaming pic/ike直播頁面/ike12.jpeg" alt="" width="100%" height="100%">
        </label>
        <label class="mission-card-login" for="s2" id="slider2">
            <img class="mission-card" src="imgs/live streaming pic/Mysta 直播頁面/Mysta12.jpeg" alt="" width="100%" height="100%">
        </label>
        <label for="s3" id="slider3">
            <img class="mission-card" src="imgs/live streaming pic/luca直播頁面/luca12.jpeg" alt="" width="100%" height="100%">
        </label>
        <label for="s4" id="slider4">
            <img class="mission-card" src="imgs/live streaming pic/shu直播頁面/shu12.jpeg" alt="" width="100%" height="100%">
        </label>
        <label for="s5" id="slider5">
            <img class="mission-card" src="imgs/live streaming pic/Vox直播頁面/Vox12.jpeg" alt="" width="100%" height="100%">
        </label>
    </section>

    <!-- 直播間首頁 影片 -->

    <div id="tab-demo">
        <ul class="tab-title NotoSans">
            <li class="active"><a href="#tab01">烤肉影片區</a></li>
        </ul>
    
    <div class="tab-wrap">
        <!-- ike stream wrap start-->
        <div class="tab-title-wrap">
            <p>Ike Eveland</p>
        </div>

        <div id="tab01" class="tab-inner NotoSans">
            <div class="index_Watch_img_out_wrap d-flex">
                <div class="index_Watch_img_wrap mr-2" data-toggle="modal" data-target="#stream1">
                    <div class="index_Watch_img effect-ming">
                        <img src="imgs/live streaming pic/ike直播頁面/ike1.jpeg" alt="">
                        <figcaption class="d-flex align-items-center justify-content-center">
                            <h2>Click Me</h2>
                        </figcaption>
                    </div>
                    <p class="index_Watch_text">【NIJISANJI EN】【Ike eveland】膽敢嚇死我們Ike天使/Ike神父...? How dare you scare Angel Ike to death ?! 中字烤肉
                    </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/ike直播頁面/ike2.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Luxiem聯動/全視角】 入戲過深的Ike【彩虹社中譯/Propnight #3】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/ike直播頁面/ike3.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【中文字幕/Ike Eveland】醉後伊芙蘭的奇幻漂流【NIJISANJI EN】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/ike直播頁面/ike4.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Ike Eveland】小學生吵架 音量注意 發霉? 灰色? 還是藍色?【NIJISANJI EN || Luxiem】【彩虹社EN烤肉】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/ike直播頁面/ike5.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【中文字幕/Ike Eveland】剛來又剛好在講瑞典文的機率是多少【NIJISANJI EN】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/ike直播頁面/ike6.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【NIJISANJI EN】文豪的IKEA讀音教學【 lke Eveland 中字 烤肉】

                        </p>
                </div>
            </div>
        </div>
        <!-- ike stream wrap end-->
        <!-- luca stream wrap start-->
        <div class="tab-title-wrap">
            <p>Luca Kaneshiro</p>
        </div>

        <div id="tab01" class="tab-inner NotoSans">
            <div class="index_Watch_img_out_wrap d-flex">
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca3.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【非專業烤肉】覺得遊戲太簡單了嗎Ike？帶上Luca吧！【Luxiem｜Luca Kaneshiro & Ike Eveland】_NIJISANJI EN
                         </p>
                </div>  
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca2.jpeg"  alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Nijisanji EN翻譯/Luca Kaneshiro】與Boss一起度過這個White Pog Day吧
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca4.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【［中字切片］槍與玫瑰貼貼？根本就是boss在欺負人！【Luca Kaneshiro/Shu Yamino/Rosemi Lovelock/Elira Pendora/Sonny Brisko】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca5.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Nijisanji EN翻譯/Luca Kaneshiro】與Boss一起度過這個White Pog Day吧
                        </p>

                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca6.jpeg"  alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【彩虹社EN中字】來互相傷害啊【Shu Yamino/Ike Eveland/Luca Kaneshiro】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/luca直播頁面/luca7.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Nijisanji 中字】線下混沌的POCKY GAME + 暴言頻出的深口侯話題
                        </p>
                </div>
            </div>
        </div>
        <!-- luca stream wrap end-->
        <!-- mysta stream wrap start-->
        <div class="tab-title-wrap">
            <p>Mysta Rias</p>
        </div>

        <div id="tab01" class="tab-inner NotoSans">
            <div class="index_Watch_img_out_wrap d-flex">
                <div class="index_Watch_img_wrap mr-2" data-toggle="modal" data-target="#stream1">
                    <div class="index_Watch_img effect-ming">
                        <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta1.jpeg"  alt="">

                        <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                    </div>
                    <p class="index_Watch_text">【彩虹社EN烤肉 / 切片】Mysta向Vox展現他的刀法!【Mysta Rias / Luxiem】

                    </p>
                    <!-- </a> -->
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta2.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【彩虹社EN烤肉 / 切片】Mysta一邊BeatBox一邊哼Diamond City Light!【Mysta Rias / Luxiem】
</p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
    
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta3.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">🧡🦊｜Mysta的Beatbox能力？！ Vox：「他會很多他說他不會的事」【Luxiem | Mysta Rias | 彩虹社 |中字切】
</p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta4.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">Mysta本人親自下海示範:這才是真正的bo'om聲音!tskrrrr[彩虹社中字翻譯][Mysta Rias]

                    </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
    
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta5.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Mysta Rias】性格內向的狐狸+出道前小故事【彩虹社EN中文精華/ NJISANJI EN】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Mysta 直播頁面/Mysta6.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【彩虹社EN烤肉】Mysta的字跡!【Mysta Rias / Luxiem】
                        【彩虹社EN烤肉】Mysta的字跡!【Mysta Rias / Luxiem】

                    </p>
                </div>
            </div>
        </div>
        <!-- mysta stream wrap end-->
        <!-- shu stream wrap start-->
        <div class="tab-title-wrap">
            <p>Shu Yamino</p>
        </div>

        <div id="tab01" class="tab-inner NotoSans">
            <div class="index_Watch_img_out_wrap d-flex">
                <div class="index_Watch_img_wrap mr-2" data-toggle="modal" data-target="#stream1">
                    <div class="index_Watch_img effect-ming">
                        <img src="imgs/live streaming pic/shu直播頁面/shu1.jpeg" alt="">

                        <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                    </div>
                    <p class="index_Watch_text">【一直忘記怎麼念烏克麗麗【Shu Yamino || NIJISANJI EN 中字】

                    </p>
                    <!-- </a> -->
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/shu直播頁面/shu2.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【彩虹社EN中字】請別再說這句話了【 Shu Yamino / luxiem】

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/shu直播頁面/shu3.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">Singing Soft Songs (Birthday Countdown pt. 1)【NIJISANJI EN | Shu
                                Yamino】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/shu直播頁面/shu4.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">Shu重做純潔度測驗後發現自己是BAD BOY【NIJISANJI EN】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/shu直播頁面/shu5.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Luxiem│Shu│中文字幕】吃可愛與帥氣長大的Shu 4分鐘帶你認識這寶藏男孩

                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/shu直播頁面/shu6.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Nijisanji EN】Shu都知道大家(還有他自己)需要什麼 :)【Shu Yamino】【中文字幕】

                        </p>
                </div>
            </div>
        </div>
        <!-- shu stream wrap end-->
        <!-- vox stream wrap start-->
        <div class="tab-title-wrap">
            <p>Vox Akuma</p>
        </div>


        <div id="tab01" class="tab-inner NotoSans">
            <div class="index_Watch_img_out_wrap d-flex">
                <div class="index_Watch_img_wrap mr-2" data-toggle="modal" data-target="#stream1">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox3.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">NIJISANJI EN】Vox put his foot down this time (認真向烤肉)【Vox Akuma / Luxiem】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox2.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【NIJISANJI EN / Ikeakuma】天使嗓音的整人遊戲｜The Prank From The Angel Voice【Ike Eveland / Vox Akuma】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox4.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Vox/切熟】谁也不能命令叛逆的恶魔
                         </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox5.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Vox/切熟】差点错配CP的上帝盒导
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox6.jpeg" alt="">

                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">office demon files papers, loses his mind 【STANLEY PARABLE ULTRA DELUXE】【NIJISANJI EN | Vox Akuma】
                        </p>
                </div>
                <div class="index_Watch_img_wrap mr-2">
                        <div class="index_Watch_img effect-ming">
                            <img src="imgs/live streaming pic/Vox直播頁面/Vox7.jpeg" alt="">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2>Click Me</h2>
                            </figcaption>
                        </div>
                        <p class="index_Watch_text">【Vox/切熟】脱衣舞！女装！一個不能少！！！
                         </p>
                </div>
            </div>
        </div>
        <!-- ike stream wrap end-->

    </div>
</section>


<?php include __DIR__ . '/parts/html-script.php' ?>

<!-- <script src="js/jquery-3.6.0.js"></script> -->
<!-- <script src="./bootstrap-4.2.1-dist/js/bootstrap.bundle.js"></script> -->
<script src="js/plugins.js"></script>
<script>
    $(window).on("load", function () {
        $('body').addClass('loaded');
    });
</script>

<?php include __DIR__ . '/parts/html-last.php' ?>