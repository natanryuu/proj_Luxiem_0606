<?php
require './parts/connect-db.php';
$pageName = 'live-stream';
$title = '直播間';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<link rel="stylesheet" href="./css/live_stream.css" />
<?php include __DIR__ . '/parts/html-navbar.php' ?> 

    <!--sub header PC-->
    <header class="site-header">     
        <div class="site-boundary">
            <nav class="site-nav" > 
                <!-- onclick="console.log(event); location.href='8.live-stream.php' -->
                <div class="site-header-profile-wrap" id="ike-icon" href="#">
                    <img src="imgs/live streaming pic/live_stream_luxiem/ike_profile.jpeg" alt=""> 
                </div>
                <div class="site-header-profile-wrap" id="vox-icon" href="#">
                    <div class="chat_icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.31 2.51196H2.48242V21.3521H9.25414L8.68889 26.3762L16.4752 21.3521H27.31V2.51196Z" fill="#C4C4C4" fill-opacity="0.9"/>
                            <path d="M27 0L3 0C1.3455 0 0 1.36136 0 3.03536V21.2475C0 22.9215 1.3455 24.2829 3 24.2829H7.5V30L16.9155 24.2829H27C28.6545 24.2829 30 22.9215 30 21.2475V3.03536C30 1.36136 28.6545 0 27 0ZM27 21.2475H16.0845L10.5 24.6365V21.2475H3V3.03536H27V21.2475Z" fill="white"/>
                            <path d="M7.5 7.5885H22.5V10.6239H7.5V7.5885ZM7.5 13.6592H18V16.6946H7.5V13.6592Z" fill="white"/>
                            </svg>
                    </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/vox_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="mysta-icon" href="#">
                    <div class="chat_icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.31 2.51196H2.48242V21.3521H9.25414L8.68889 26.3762L16.4752 21.3521H27.31V2.51196Z" fill="#C4C4C4" fill-opacity="0.9"/>
                        <path d="M27 0L3 0C1.3455 0 0 1.36136 0 3.03536V21.2475C0 22.9215 1.3455 24.2829 3 24.2829H7.5V30L16.9155 24.2829H27C28.6545 24.2829 30 22.9215 30 21.2475V3.03536C30 1.36136 28.6545 0 27 0ZM27 21.2475H16.0845L10.5 24.6365V21.2475H3V3.03536H27V21.2475Z" fill="white"/>
                        <path d="M7.5 7.5885H22.5V10.6239H7.5V7.5885ZM7.5 13.6592H18V16.6946H7.5V13.6592Z" fill="white"/>
                        </svg>
                    </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/mysta_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="luca-icon" href="#">
                    <div class="chat_icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.31 2.51196H2.48242V21.3521H9.25414L8.68889 26.3762L16.4752 21.3521H27.31V2.51196Z" fill="#C4C4C4" fill-opacity="0.9"/>
                        <path d="M27 0L3 0C1.3455 0 0 1.36136 0 3.03536V21.2475C0 22.9215 1.3455 24.2829 3 24.2829H7.5V30L16.9155 24.2829H27C28.6545 24.2829 30 22.9215 30 21.2475V3.03536C30 1.36136 28.6545 0 27 0ZM27 21.2475H16.0845L10.5 24.6365V21.2475H3V3.03536H27V21.2475Z" fill="white"/>
                        <path d="M7.5 7.5885H22.5V10.6239H7.5V7.5885ZM7.5 13.6592H18V16.6946H7.5V13.6592Z" fill="white"/>
                        </svg>
                    </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/luca_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="shu-icon" href="#">
                   <img src="imgs/live streaming pic/live_stream_luxiem/shu_profile.jpeg" alt="">
                </div>
                <!-- <div class="site-header-profile-wrap">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66602 23.3333H16.666V33.3333" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M33.334 16.6667H23.334V6.66669" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.334 16.6667L35.0007 5" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 35L16.6667 23.3333" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>  
                </div> -->
                <!-- <div class="site-header-profile-wrap">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 5H35V15" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 35H5V25" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M35.0007 5L23.334 16.6667" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 35L16.6667 23.3333" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="site-header-profile-wrap">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.0007 36.6666C29.2054 36.6666 36.6673 29.2047 36.6673 20C36.6673 10.7952 29.2054 3.33331 20.0007 3.33331C10.7959 3.33331 3.33398 10.7952 3.33398 20C3.33398 29.2047 10.7959 36.6666 20.0007 36.6666Z" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.1504 15C15.5422 13.8861 16.3156 12.9468 17.3336 12.3485C18.3517 11.7502 19.5485 11.5315 20.7124 11.7312C21.8762 11.9308 22.9318 12.5358 23.6922 13.4392C24.4526 14.3425 24.8688 15.4858 24.8671 16.6666C24.8671 20 19.8671 21.6666 19.8671 21.6666" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 28.3333H20.0167" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                </div> -->
            </nav>
            <div class="header-toggle">
                <svg width="38" height="14" viewBox="0 0 38 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.01563 2L19.0156 12L36.0156 2" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </div>
        </div>
    </header>

    <!--sub header mobile-->
    <header class="site-header-mobile">     
        <div class="site-boundary">
            <nav class="site-nav">
                <div class="site-header-profile-wrap" id="ike-icon" href="#">
                    <img src="imgs/live streaming pic/live_stream_luxiem/ike_profile.jpeg" alt=""> 
                </div>
                <div class="site-header-profile-wrap" id="vox-icon" href="#">
                    <div class="chat_icon">
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.2828 0.669922H0.662109V5.69397H2.46815L2.31743 7.03364L4.39364 5.69397H7.2828V0.669922Z" fill="#C4C4C4" fill-opacity="0.9"/>
                            <path d="M7.2 0L0.8 0C0.3588 0 0 0.363029 0 0.80943V5.66601C0 6.11241 0.3588 6.47544 0.8 6.47544H2V8L4.5108 6.47544H7.2C7.6412 6.47544 8 6.11241 8 5.66601V0.80943C8 0.363029 7.6412 0 7.2 0ZM7.2 5.66601H4.2892L2.8 6.56974V5.66601H0.8V0.80943H7.2V5.66601Z" fill="white"/>
                            <path d="M2 2.02344H6V2.83287H2V2.02344ZM2 3.6423H4.8V4.45173H2V3.6423Z" fill="white"/>
                            </svg>
                            
                    </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/vox_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="mysta-icon" href="#">
                    <div class="chat_icon">
                        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.2828 0.669922H0.662109V5.69397H2.46815L2.31743 7.03364L4.39364 5.69397H7.2828V0.669922Z" fill="#C4C4C4" fill-opacity="0.9"/>
                            <path d="M7.2 0L0.8 0C0.3588 0 0 0.363029 0 0.80943V5.66601C0 6.11241 0.3588 6.47544 0.8 6.47544H2V8L4.5108 6.47544H7.2C7.6412 6.47544 8 6.11241 8 5.66601V0.80943C8 0.363029 7.6412 0 7.2 0ZM7.2 5.66601H4.2892L2.8 6.56974V5.66601H0.8V0.80943H7.2V5.66601Z" fill="white"/>
                            <path d="M2 2.02344H6V2.83287H2V2.02344ZM2 3.6423H4.8V4.45173H2V3.6423Z" fill="white"/>
                        </svg>      
                </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/mysta_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="luca-icon" href="#">
                    <div class="chat_icon">
                            <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.2828 0.669922H0.662109V5.69397H2.46815L2.31743 7.03364L4.39364 5.69397H7.2828V0.669922Z" fill="#C4C4C4" fill-opacity="0.9"/>
                                <path d="M7.2 0L0.8 0C0.3588 0 0 0.363029 0 0.80943V5.66601C0 6.11241 0.3588 6.47544 0.8 6.47544H2V8L4.5108 6.47544H7.2C7.6412 6.47544 8 6.11241 8 5.66601V0.80943C8 0.363029 7.6412 0 7.2 0ZM7.2 5.66601H4.2892L2.8 6.56974V5.66601H0.8V0.80943H7.2V5.66601Z" fill="white"/>
                                <path d="M2 2.02344H6V2.83287H2V2.02344ZM2 3.6423H4.8V4.45173H2V3.6423Z" fill="white"/>
                                </svg>
                                
                    </div>
                    <img src="imgs/live streaming pic/live_stream_luxiem/luca_profile.jpeg" alt="">
                </div>
                <div class="site-header-profile-wrap" id="shu-icon-m" href="#">
                   <img src="imgs/live streaming pic/live_stream_luxiem/shu_profile.jpeg" alt="">
                </div>
            </nav>
            <div class="header-toggle-mobile" style="z-index:200">
                <svg width="18" height="7" viewBox="0 0 18 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L9 6L17 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
            </div>
        </div>
    </header>

    <!--  stream video content pc -->
    <div class="stream-video-container">
        <div class="stream-video-row-pc">
            <div class="display-none z-index3" id="ytplayer2"></div>
            <div class="display-none z-index3" id="ytplayer3"></div>
            <!-- <div class="stream-video-col-pc"></div>
            <div class="stream-video-col-pc-big"></div> -->
            <!-- <div class="stream-video-col-pc">
                <div class="display-none z-index3" id="ytplayer1"></div>
            </div> -->
        </div>
        <div class="stream-video-row">
            <div class="stream-video-col-pc">
                <div class="display-none z-index3" id="ytplayer4"></div>
            </div>
            <div cclass="stream-video-col-pc"></div>
            <div class="stream-video-col-pc">
                <div class="deco-right">
                    <svg width="441" height="396" viewBox="0 0 441 396" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M226.773 163.45L336.566 148.13L404.73 235.555L363.101 338.299L253.307 353.619L185.143 266.194L226.773 163.45Z" stroke="#D3B572"/>
                        <path d="M243.299 54.4527L332.459 168.806L278.007 303.199L134.393 323.238L45.2323 208.884L99.685 74.4915L243.299 54.4527Z" fill="#D3B572" fill-opacity="0.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>   


      <!-- stream video content mobile-->
    <!-- <div class="stream-video-container-mobile">
        <div class="stream-video-row">
            <div class="stream-video-col">
                <div class="display-none" id="ytplayer2"></div> 
            </div>
            <div class="stream-video-col">
                <div class="display-none" id="ytplayer3"></div> 
            </div>
            <div class="stream-video-col">
                <div class="display-none" id="ytplayer4"></div> 
            </div>
        </div>
        <div class="stream-video-row"> 
            <div class="stream-video-col">
                <div class="display-none" id="ytplayer1"></div> 
            </div>
        </div>
    </div>  -->

    <!-- <footer>
    <div class="desktop-footer">
        <div class="desktop-footer-team3rd">
            Copyright © 2022 Design by The light of Luxiem. All Rights Reserved. <br>
            此網站僅用於資展國際專題發表
        </div>
    </div>
</footer> -->


<!-- 下面是 導覽列套用scroll滑動效果 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="./js/script.js"></script>
<script src="./bootstrap-4.2.1-dist/js/bootstrap.bundle.js"></script>

<!-- Navbar/Footer js -->
<script src="./js/0.navbar_footer.js"></script>


<script>
    $(document).ready(() => {
        if (!localStorage.getItem('member')) {
            // $('#user-login').text('登入');
            // $('#user-login-m').text('登入');
            $('#user-login').addClass('show');
            $('#user-logout').addClass('hide');
            $('#user-image').attr('src', `./imgs/Navbar/user_img.png`);
            $('#user-image-m').attr('src', `./imgs/Navbar/user_img.png`);
            $('#user-name').text('用戶')
        } else if (localStorage.getItem('member')) {
            // 進資料庫抓資料
            let memberEmail = `${localStorage.getItem('member')}`;
            $.get('getuserData.php', {
                memberEmail
            }, function(data) {
                console.log(data);
                $('#user-image').attr('src', `./imgs/Navbar/${data.user_img}`)
                $('#user-image-m').attr('src', `./imgs/Navbar/${data.user_img}`)
                $('#user-name').text(data.user_name);

            }, 'json')
            // $('#user-login').text('登出');
            // $('#user-login-m').text('登出');
            $('#user-login').addClass('hide');
            $('#user-logout').addClass('show');
        }
    })
</script>
<!------------------------ 多框直播間內容 ------------------------->

<script src="./js/jquery-3.6.0.js"></script>

<script>
    //按下箭頭出現subNav PC
    $('.header-toggle').on('click', function() {
    $('.site-header').toggleClass('active');
    });

    // 按下箭頭出現subNav Mobile
    $('.header-toggle-mobile').on('click', function() {
    $('.site-header-mobile').toggleClass('active');
    });

    //按下icon讓隱藏的影片跳出來 PC
    // $('#ike-icon').on('click', function() {
    // $('#ytplayer1').toggleClass('display-none');
    // });
    $('#vox-icon').on('click', function() {
    $('#ytplayer2').toggleClass('display-none');
    });

    $('#mysta-icon').on('click', function() {
    $('#ytplayer3').toggleClass('display-none');

    });
    $('#luca-icon').on('click', function() {
    $('#ytplayer4').toggleClass('display-none');

    });



    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


    var player;
    var player2;
    var player3;
    var player4;

    function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer1', {
        height: '540',
        width: '640',
        videoId: 'CHnnPRFXtLc',
        playerVars:{'rel':0},
        
        });
        player2 = new YT.Player('ytplayer2', {
        height: '540',
        width: '640',
        videoId: 'PBb9YtkPBV0',
        playerVars:{'rel':0},
        
        });
        player3 = new YT.Player('ytplayer3', {
        height: '540',
        width: '640',
        videoId: 'TRYnI4fL0lQ',
        playerVars:{'rel':0},
        
        });
        player4 = new YT.Player('ytplayer4', {
        height: '540',
        width: '640',
        videoId: 'v0Y3r_cz4Vw',
        playerVars:{'rel':0},
        
        });
    function onPlayerReady(e) {
    // 為確保瀏覽器上可以自動播放，要把影片調成靜音
    e.target.mute().playVideo();
    }
    }
    
    
    // var player;
    // function onYouTubeIframeAPIReady() {
    // // 一般使用 影片的id寫在js裡
    // player = new YT.Player('player', {
    // height: '390', // 高度預設值為390，css會調成responsive
    // width: '640', // 寬度預設值為640，css會調成responsive
    // videoId: 'FM8hC7Wq1Ng',
    // playerVars:{'rel':0},
    // events: {
    // 'onReady': onPlayerReady,
    // }
    // });
    // }
    function onPlayerReady(e) {
    // 為確保瀏覽器上可以自動播放，要把影片調成靜音
    e.target.mute().playVideo();
    }

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
        videoId: 'FM8hC7Wq1Ng',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
        });
    }
    
    function onPlayerReady(e) {
        console.log(e.target.getPlayerState())
    }
    function onPlayerStateChange(e) {
        console.log(e.data)
    }


    //按下icon讓影片回去
    $('#ike-icon').on('click', function() {
        console.log('hi');
    $('#stream-video-room1 img').toggleClass('display-none');
    });
    $('#vox-icon').on('click', function() {
    $('#stream-video-room2 img').toggleClass.remove('display-none');
    });
    $('#mysta-icon').on('click', function() {
    $('#stream-video-room3 img').toggleClass('display-none');
    });
    $('#luca-icon').on('click', function() {
    $('#stream-video-room4 img').toggleClass('display-none');
    });
</script>

<?php include __DIR__ . '/parts/html-last.php' ?>