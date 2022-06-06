<?php
session_start();
$pageName = 'index';
$title = 'The light of Luxiem 首頁';
require './parts/connect-db.php';
?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<!-- 這邊會放該頁需要的css 如同下面 -->
<!-- <link rel="stylesheet" href="./css/shopping_cart.css"> -->
<link rel="stylesheet" href="./css/index.css" />

<?php include __DIR__ . '/parts/html-navbar.php' ?>

<!-- 這邊會放該頁需要的html -->

<div class="index_whole_body">

    <!-- index -->
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- index_Bigtitle -->
                <div class="index_Bigtitle d-flex justify-content-center">
                    <img class="index_Bigtitle_img" src="./imgs/index/Luxiem.png" alt="" />
                </div>

                <!-- index_visual -->
                <div class="index_visual">
                    <!-- width="560" height="315" -->
                    <!-- <iframe class="index_visual_video" src="https://www.youtube.com/embed/bdABx8gOhSs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen >
                        </iframe> -->


                    <!-- index_visual_bc -->
                    <div class="index_visual_bc_wrap">
                        <div class="index_visual_bc"></div>
                        <!-- index_visual_video -->
                        <video class="index_visual_video" width="100%" src="./video/NIJISANJI EN_1080p.mp4" autoplay loop muted></video>
                    </div>
                    <!-- index_visual_chat -->
                    <div class="index_visual_chat">
                        <h3>聊天室</h3>
                        <p><span class="mr-3">Casai卡特</span>好期待～終於要出道了！</p>
                        <p><span class="mr-3">瑄瑄</span>這是新的團嗎？</p>
                        <p><span class="mr-3">恩摁ㄣ</span>OMG 等好久了！</p>
                        <p><span class="mr-3">Tonny</span>FINALLY 終於終於</p>
                        <p><span class="mr-3">Enna 奇異鳥</span>聽起來不錯的公關團</p>
                        <div class="Spinner_img_wrap">
                            <img src="./imgs/index/Spinner.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- index_text -->
                <div class="index_text KaiseiOpti d-flex">
                    <p class="index_text_up text-white">in the</p>
                    <p class="index_text_dn fakegold">Dark</p>
                </div>
                <!-- index_circle_btn1 -->
                <div class="index_circle_btn1">
                    <div class="index_circle_btn_wrap">
                        <div class="index_circle_btn_circle">
                            <a href="psychological-home.php">
                                <div class="index_arrow_1">
                                    <div class="index_arrow_text Primary">
                                        <p>誰是你的靈魂伴侶？</p>
                                        <svg viewBox="0 0 93 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M92.7071 8.09821C93.0976 7.70769 93.0976 7.07452 92.7071 6.684L86.3431 0.320037C85.9526 -0.0704874 85.3194 -0.0704874 84.9289 0.320037C84.5384 0.710561 84.5384 1.34373 84.9289 1.73425L90.5858 7.3911L84.9289 13.048C84.5384 13.4385 84.5384 14.0716 84.9289 14.4622C85.3195 14.8527 85.9526 14.8527 86.3431 14.4622L92.7071 8.09821ZM7.71589e-08 8.39111L92 8.3911L92 6.3911L-7.71589e-08 6.39111L7.71589e-08 8.39111Z" fill="#D3B572" />
                                        </svg>
                                    </div>
                                </div>
                                <img class="vox_bg" src="./imgs/index/VOX-BG.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- index_circle_btn2 -->
                <div class="index_circle_btn2">
                    <div class="index_circle_btn_wrap">
                        <div class="index_circle_btn_circle">
                            <a href="psychological-home.php">
                                <div class="index_arrow_2">
                                    <div class="index_arrow_text Primary">
                                        <p>你是Luxiem裡面的誰？</p>
                                        <svg viewBox="0 0 93 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M92.7071 8.09821C93.0976 7.70769 93.0976 7.07452 92.7071 6.684L86.3431 0.320037C85.9526 -0.0704874 85.3194 -0.0704874 84.9289 0.320037C84.5384 0.710561 84.5384 1.34373 84.9289 1.73425L90.5858 7.3911L84.9289 13.048C84.5384 13.4385 84.5384 14.0716 84.9289 14.4622C85.3195 14.8527 85.9526 14.8527 86.3431 14.4622L92.7071 8.09821ZM7.71589e-08 8.39111L92 8.3911L92 6.3911L-7.71589e-08 6.39111L7.71589e-08 8.39111Z" fill="#D3B572" />
                                        </svg>
                                    </div>
                                </div>
                                <img class="ike_bg" src="./imgs/index/IKE_BG.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- index_intro_Bigtrain_wrap -->
                <div class="index_intro_Bigtrain_wrap">

                    <!-- index_intro_count -->
                    <div class="index_intro_count">
                        <div class="index_intro_count_wrap KaiseiOpti text-white">
                            <p class="fakegold numerator">1</p>
                            <p>／</p>
                            <p class="denominator">5</p>
                        </div>
                    </div>

                    <!-- index_text_2 -->
                    <div class="index_text_2">
                        <p class="index_text_2_up KaiseiOpti fakegold">Who?</p>
                        <p class="index_text_2_dn text-white NotoSans">是誰？</p>
                    </div>

                    <!-- index_intro_Bigtrain -->
                    <div class="index_intro_Bigtrain d-flex">
                        <!-- index_intro_Ike_outwrap -->
                        <div class="index_intro_Ike_outwrap">

                            <!-- index_IKE_body -->
                            <div class="index_IKE_body">
                                <div class="index_IKE_body_wrap">
                                    <img class="ike_body" src="./imgs/index/Ike_whole body.png" alt="" />
                                </div>
                                <img class="ike_shadow" src="./imgs/index/Ike_shadow.png" alt="" />
                            </div>

                            <!-- index_IKE_intro -->
                            <div class="index_IKE_intro">
                                <div class="index_IKE_head">
                                    <img src="./imgs/index/Ike.png" alt="" />
                                    <p>
                                        <span class="color_ike index_IKE_head_title">
                                            Ike Eveland
                                        </span>
                                    </p>
                                    <p class="text-white">
                                        來自過去的小說家，似乎有些自閉，當他有下一部作品的想法時，就會變成完全不同的人。
                                    </p>
                                    <a class="see_more fakegold" href="">See more</a>
                                    <div class="svg_link">
                                        <!-- YT-icon -->
                                        <a href="https://www.youtube.com/channel/UC4yNIKGvy-YUrwYupVdLDXA">
                                            <svg class="YT-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.54 6.42C22.4212 5.94541 22.1793 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11999 4 3.39999 4.46C2.92924 4.59318 2.50197 4.84824 2.16134 5.19941C1.82071 5.55057 1.57878 5.98541 1.45999 6.46C1.14521 8.20556 0.991228 9.97631 0.999992 11.75C0.988771 13.537 1.14276 15.3213 1.45999 17.08C1.59095 17.5398 1.8383 17.9581 2.17814 18.2945C2.51797 18.6308 2.93881 18.8738 3.39999 19C5.11999 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1793 17.9094 22.4212 17.4746 22.54 17C22.8524 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" fill="#D3B572" />
                                                <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" fill="black" />
                                            </svg>
                                        </a>
                                        <!-- TW-icon -->
                                        <a href="https://twitter.com/ike_eveland">
                                            <svg class="TW-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                        <!-- ST-icon -->
                                        <a href="https://streamlabs.com/ikeevelandnijisanjien/tip">
                                            <svg class="ST-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 1V23" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- index_square_btn -->
                            <div class="index_square_btn d-flex">
                                <div class="index_square_btn_wrap">
                                    <p id="ike_voice_bt_01" onclick="playike01()">voice 1</p>
                                    <p id="ike_voice_bt_02" onclick="playike02()">voice 2</p>
                                    <p id="ike_voice_bt_03" onclick="playike03()">voice 3</p>
                                    <p id="ike_voice_bt_04" onclick="playike04()">voice 4</p>
                                </div>
                            </div>
                            <audio id="ike_voice_01" src="./voice/ike/ike出道.mp3"></audio>
                            <audio id="ike_voice_02" src="./voice/ike/ike笑.mp3"></audio>
                            <audio id="ike_voice_03" src="./voice/ike/ike氣噗噗.mp3"></audio>
                            <audio id="ike_voice_04" src="./voice/ike/ike驚呼.mp3"></audio>

                            <!-- see_more_ph -->
                            <div class="see_more_ph">
                                <a class="see_more fakegold" href="https://wikiwiki.jp/nijisanji/Ike%20Eveland"> See more </a>
                            </div>

                            <!-- index_SC_rank -->
                            <div class="index_SC_rank">
                                <div class="index_SC_rank_wrap">
                                    <div class="index_SC_rank_title d-flex align-items-lg-baseline">
                                        <p class="fakegold">SC Vtuber 排名</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 6L13.5 15.5L8.5 10.5L1 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 6H23V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="index_SC_rank_info">
                                        <div class="index_SC_rank_info_number d-flex align-items-lg-baseline justify-content-between">
                                            <p class="text-white SC_rank_number ike_rank_nb">No. 17</p>
                                            <p class="fakegold SC_rank_money ike_rank_m">+ NT 1,077,677</p>
                                        </div>
                                        <div class="index_SC_rank_info_btn d-flex align-items-lg-baseline">
                                            <p class="mr-4 active ike_monthly">當月</p>
                                            <p class="ike_weekly">當周</p>
                                            <a class="index_SC_rank_link" href="https://playboard.co/en/channel/UC4yNIKGvy-YUrwYupVdLDXA">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.91667 19H30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M19 7.91663L30.0833 19L19 30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- index_livenow_timezone -->
                            <div class="index_livenow_timezone">
                                <div class="index_livenow_timezone_wrap">
                                    <div class="index_livenow_title d-flex align-items-baseline">
                                        <svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="6" fill="#E73D48" />
                                            <circle cx="10" cy="10" r="9.5" stroke="#E73D48" />
                                        </svg>
                                        <p>LIVE NOW</p>
                                    </div>
                                    <div class="index_livenow_img">
                                        <img src="./imgs/index/Ike_Witness.png" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div class="index_timezone">
                                        <div class="index_timezone_wrap d-flex align-items-start">
                                            <!-- index_timezone_flag -->
                                            <!-- <div class="dropdown index_timezone_flag">
                                        <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="./imgs/index/flag/TW.png" alt="">
                                        </a>
                                        <div class="dropdown-menu index_timezone_flag_list"
                                            aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/TW.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/JP.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/GB.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/CA.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/SE.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/US.png" alt="">
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img src="./imgs/index/flag/AU.png" alt="">
                                            </a>
                                        </div>
                                    </div> -->
                                            <div class="index_timezome_flag_dropdown_menu_wrap">
                                                <ul class="index_timezome_flag_dropdown_menu mr-3">
                                                    <li class="flag_wrap_top">
                                                        <a class="flag_wrap">
                                                            <img class="flag_top" src="./imgs/index/flag/TW.png" alt="" />
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 9L12 15L18 9" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>

                                                        <ul>
                                                            <li>
                                                                <a class="flag_wrap flag_TW">
                                                                    <img src="./imgs/index/flag/TW.png" alt="" />
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_JP">
                                                                    <img src="./imgs/index/flag/JP.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_GB">
                                                                    <img src="./imgs/index/flag/GB.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_AU">
                                                                    <img src="./imgs/index/flag/AU.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_US">
                                                                    <img src="./imgs/index/flag/US.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_SE">
                                                                    <img src="./imgs/index/flag/SE.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_CA">
                                                                    <img src="./imgs/index/flag/CA.png" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="TimezoneInfo_wrap d-flex pt-2">
                                                <p id="TimezoneInfo" class="TimezoneInfo mr-3"></p>
                                                <p id="TimezoneInfoCount" class="TimezoneInfoCount mr-2 d-flex align-items-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- index_intro_Vox_outwrap -->
                        <div class="index_intro_Ike_outwrap">

                            <!-- index_Vox_body -->
                            <div class="index_IKE_body">
                                <div class="index_IKE_body_wrap">
                                    <img class="ike_body" src="./imgs/index/Vox_whole body.png" alt="" />
                                </div>
                                <img class="ike_shadow" src="./imgs/index/Vox_shadow.png" alt="" />
                            </div>

                            <!-- index_Vox_intro -->
                            <div class="index_IKE_intro">
                                <div class="index_IKE_head">
                                    <img src="./imgs/index/Vox.png" alt="" />
                                    <p>
                                        <span class="color_vox index_IKE_head_title">
                                            Vox Akuma
                                        </span>
                                    </p>
                                    <p class="text-white">
                                        一個來自過去的惡魔，擁有強大的力量。雖然對自己的強大能力很有自信，但也會照顧那些對他忠誠的人。
                                    </p>
                                    <a class="see_more fakegold" href="">See more</a>
                                    <div class="svg_link">
                                        <!-- YT-icon -->
                                        <svg class="YT-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.54 6.42C22.4212 5.94541 22.1793 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11999 4 3.39999 4.46C2.92924 4.59318 2.50197 4.84824 2.16134 5.19941C1.82071 5.55057 1.57878 5.98541 1.45999 6.46C1.14521 8.20556 0.991228 9.97631 0.999992 11.75C0.988771 13.537 1.14276 15.3213 1.45999 17.08C1.59095 17.5398 1.8383 17.9581 2.17814 18.2945C2.51797 18.6308 2.93881 18.8738 3.39999 19C5.11999 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1793 17.9094 22.4212 17.4746 22.54 17C22.8524 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" fill="#D3B572" />
                                            <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" fill="black" />
                                        </svg>
                                        <!-- TW-icon -->
                                        <svg class="TW-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                        </svg>
                                        <!-- ST-icon -->
                                        <svg class="ST-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1V23" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- index_square_btn -->
                            <div class="index_square_btn d-flex">
                                <div class="index_square_btn_wrap">
                                    <p id="vox_voice_bt_01" onclick="playike05()">voice 1</p>
                                    <p id="vox_voice_bt_02" onclick="playike06()">voice 2</p>
                                    <p id="vox_voice_bt_03" onclick="playike07()">voice 3</p>
                                    <p id="vox_voice_bt_04" onclick="playike08()">voice 4</p>
                                </div>
                            </div>
                            <audio id="vox_voice_01" src="./voice/vox/vox出道.mp3"></audio>
                            <audio id="vox_voice_02" src="./voice/vox/vox笑聲.mp3"></audio>
                            <audio id="vox_voice_03" src="./voice/vox/vox賣萌.mp3"></audio>
                            <audio id="vox_voice_04" src="./voice/vox/vox驚.mp3"></audio>

                            <!-- see_more_ph -->
                            <div class="see_more_ph">
                                <a class="see_more fakegold" href=""> See more </a>
                            </div>

                            <!-- index_SC_rank -->
                            <div class="index_SC_rank">
                                <div class="index_SC_rank_wrap">
                                    <div class="index_SC_rank_title d-flex align-items-lg-baseline">
                                        <p class="fakegold">SC Vtuber 排名</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 6L13.5 15.5L8.5 10.5L1 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 6H23V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="index_SC_rank_info">
                                        <div class="index_SC_rank_info_number d-flex align-items-lg-baseline justify-content-between">
                                            <p class="text-white SC_rank_number vox_rank_nb">No. 3</p>
                                            <p class="fakegold SC_rank_money vox_rank_m">+NT 2,918,080</p>
                                        </div>
                                        <div class="index_SC_rank_info_btn d-flex align-items-lg-baseline">
                                            <p class="mr-4 active vox_monthly">當月</p>
                                            <p class="vox_weekly">當周</p>
                                            <a class="index_SC_rank_link" href="">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.91667 19H30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M19 7.91663L30.0833 19L19 30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- index_livenow_timezone -->
                            <div class="index_livenow_timezone">
                                <div class="index_livenow_timezone_wrap">
                                    <div class="index_livenow_title d-flex align-items-baseline">
                                        <svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="6" fill="#E73D48" />
                                            <circle cx="10" cy="10" r="9.5" stroke="#E73D48" />
                                        </svg>
                                        <p>LIVE NOW</p>
                                    </div>
                                    <div class="index_livenow_img">
                                        <img src="./imgs/index/Vox_OUTLAST.png" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div class="index_timezone">
                                        <div class="index_timezone_wrap d-flex align-items-start">
                                            <!-- index_timezone_flag -->
                                            <div class="index_timezome_flag_dropdown_menu_wrap">
                                                <ul class="index_timezome_flag_dropdown_menu mr-3">
                                                    <li class="flag_wrap_top">
                                                        <a class="flag_wrap">
                                                            <img class="flag_top" src="./imgs/index/flag/TW.png" alt="" />
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 9L12 15L18 9" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>

                                                        <ul>
                                                            <li>
                                                                <a class="flag_wrap flag_TW">
                                                                    <img src="./imgs/index/flag/TW.png" alt="" />
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_JP">
                                                                    <img src="./imgs/index/flag/JP.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_GB">
                                                                    <img src="./imgs/index/flag/GB.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_AU">
                                                                    <img src="./imgs/index/flag/AU.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_US">
                                                                    <img src="./imgs/index/flag/US.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_SE">
                                                                    <img src="./imgs/index/flag/SE.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_CA">
                                                                    <img src="./imgs/index/flag/CA.png" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="TimezoneInfo_wrap d-flex pt-2">
                                                <p id="" class="TimezoneInfo mr-3"></p>
                                                <p id="" class="TimezoneInfoCount mr-2 d-flex align-items-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- index_intro_Mysta_outwrap -->
                        <div class="index_intro_Ike_outwrap">

                            <!-- index_Mysta_body -->
                            <div class="index_IKE_body">
                                <div class="index_IKE_body_wrap">
                                    <img class="ike_body" src="./imgs/index/Mysta_whole body.png" alt="" />
                                </div>
                                <img class="ike_shadow" src="./imgs/index/Mysta_shadow.png" alt="" />
                            </div>

                            <!-- index_Mysta_intro -->
                            <div class="index_IKE_intro">
                                <div class="index_IKE_head">
                                    <img src="./imgs/index/Mysta.png" alt="" />
                                    <p>
                                        <span class="color_mysta index_IKE_head_title">
                                            Mysta Rias
                                        </span>
                                    </p>
                                    <p class="text-white">
                                        一個來自過去的古怪的偵探。
                                        作為一個天生的天才，他以其敏銳的觀察力和無與倫比的推理能力解開了無數的謎團。
                                    </p>
                                    <a class="see_more fakegold" href="">See more</a>
                                    <div class="svg_link">
                                        <!-- YT-icon -->
                                        <svg class="YT-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.54 6.42C22.4212 5.94541 22.1793 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11999 4 3.39999 4.46C2.92924 4.59318 2.50197 4.84824 2.16134 5.19941C1.82071 5.55057 1.57878 5.98541 1.45999 6.46C1.14521 8.20556 0.991228 9.97631 0.999992 11.75C0.988771 13.537 1.14276 15.3213 1.45999 17.08C1.59095 17.5398 1.8383 17.9581 2.17814 18.2945C2.51797 18.6308 2.93881 18.8738 3.39999 19C5.11999 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1793 17.9094 22.4212 17.4746 22.54 17C22.8524 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" fill="#D3B572" />
                                            <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" fill="black" />
                                        </svg>
                                        <!-- TW-icon -->
                                        <svg class="TW-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                        </svg>
                                        <!-- ST-icon -->
                                        <svg class="ST-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1V23" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- index_square_btn -->
                            <div class="index_square_btn d-flex">
                                <div class="index_square_btn_wrap">
                                    <p id="mysta_voice_bt_01" onclick="playike09()">voice 1</p>
                                    <p id="mysta_voice_bt_02" onclick="playike10()">voice 2</p>
                                    <p id="mysta_voice_bt_03" onclick="playike11()">voice 3</p>
                                    <p id="mysta_voice_bt_04" onclick="playike12()">voice 4</p>
                                </div>
                            </div>
                            <audio id="mysta_voice_01" src="./voice/mysta/mysta出道.mp3"></audio>
                            <audio id="mysta_voice_02" src="./voice/mysta/mysta大叫.mp3"></audio>
                            <audio id="mysta_voice_03" src="./voice/mysta/mysta早安.mp3"></audio>
                            <audio id="mysta_voice_04" src="./voice/mysta/mysta笑聲.mp3"></audio>

                            <!-- see_more_ph -->
                            <div class="see_more_ph">
                                <a class="see_more fakegold" href=""> See more </a>
                            </div>

                            <!-- index_SC_rank -->
                            <div class="index_SC_rank">
                                <div class="index_SC_rank_wrap">
                                    <div class="index_SC_rank_title d-flex align-items-lg-baseline">
                                        <p class="fakegold">SC Vtuber 排名</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 6L13.5 15.5L8.5 10.5L1 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 6H23V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="index_SC_rank_info">
                                        <div class="index_SC_rank_info_number d-flex align-items-lg-baseline ">
                                            <p class="text-white SC_rank_number mysta_rank_nb">No. 16</p>
                                            <p class="fakegold SC_rank_money mysta_rank_m">+ NT 1,089,279</p>
                                        </div>
                                        <div class="index_SC_rank_info_btn d-flex align-items-lg-baseline">
                                            <p class="mr-4 active mysta_monthly">當月</p>
                                            <p class="mysta_weekly">當周</p>
                                            <a class="index_SC_rank_link" href="">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.91667 19H30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M19 7.91663L30.0833 19L19 30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- index_livenow_timezone -->
                            <div class="index_livenow_timezone">
                                <div class="index_livenow_timezone_wrap">
                                    <div class="index_livenow_title d-flex align-items-baseline">
                                        <svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="6" fill="#E73D48" />
                                            <circle cx="10" cy="10" r="9.5" stroke="#E73D48" />
                                        </svg>
                                        <p>LIVE NOW</p>
                                    </div>
                                    <div class="index_livenow_img">
                                        <img src="./imgs/index/Mysta_KUUKIYOMI.png" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div class="index_timezone">
                                        <div class="index_timezone_wrap d-flex align-items-start">
                                            <!-- index_timezone_flag -->
                                            <div class="index_timezome_flag_dropdown_menu_wrap">
                                                <ul class="index_timezome_flag_dropdown_menu mr-3">
                                                    <li class="flag_wrap_top">
                                                        <a class="flag_wrap">
                                                            <img class="flag_top" src="./imgs/index/flag/TW.png" alt="" />
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 9L12 15L18 9" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>

                                                        <ul>
                                                            <li>
                                                                <a class="flag_wrap flag_TW">
                                                                    <img src="./imgs/index/flag/TW.png" alt="" />
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_JP">
                                                                    <img src="./imgs/index/flag/JP.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_GB">
                                                                    <img src="./imgs/index/flag/GB.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_AU">
                                                                    <img src="./imgs/index/flag/AU.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_US">
                                                                    <img src="./imgs/index/flag/US.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_SE">
                                                                    <img src="./imgs/index/flag/SE.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_CA">
                                                                    <img src="./imgs/index/flag/CA.png" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="TimezoneInfo_wrap d-flex pt-2">
                                                <p id="" class="TimezoneInfo mr-3"></p>
                                                <p id="" class="TimezoneInfoCount mr-2 d-flex align-items-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- index_intro_Luca_outwrap -->
                        <div class="index_intro_Ike_outwrap">

                            <!-- index_Luca_body -->
                            <div class="index_IKE_body">
                                <div class="index_IKE_body_wrap">
                                    <img class="ike_body" src="./imgs/index/Luca_whole body.png" alt="" />
                                </div>
                                <img class="ike_shadow" src="./imgs/index/Luca_shadow.png" alt="" />
                            </div>

                            <!-- index_Mysta_intro -->
                            <div class="index_IKE_intro">
                                <div class="index_IKE_head">
                                    <img src="./imgs/index/Luca.png" alt="" />
                                    <p>
                                        <span class="color_luca index_IKE_head_title">
                                            Luca Kaneshiro
                                        </span>
                                    </p>
                                    <p class="text-white">
                                        一個來自過去沒什麼脾氣的黑手黨老大。無論是展現自己的力量，或是保護弱者，總是為了戰鬥而倒下。
                                    </p>
                                    <a class="see_more fakegold" href="">See more</a>
                                    <div class="svg_link">
                                        <!-- YT-icon -->
                                        <svg class="YT-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.54 6.42C22.4212 5.94541 22.1793 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11999 4 3.39999 4.46C2.92924 4.59318 2.50197 4.84824 2.16134 5.19941C1.82071 5.55057 1.57878 5.98541 1.45999 6.46C1.14521 8.20556 0.991228 9.97631 0.999992 11.75C0.988771 13.537 1.14276 15.3213 1.45999 17.08C1.59095 17.5398 1.8383 17.9581 2.17814 18.2945C2.51797 18.6308 2.93881 18.8738 3.39999 19C5.11999 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1793 17.9094 22.4212 17.4746 22.54 17C22.8524 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" fill="#D3B572" />
                                            <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" fill="black" />
                                        </svg>
                                        <!-- TW-icon -->
                                        <svg class="TW-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                        </svg>
                                        <!-- ST-icon -->
                                        <svg class="ST-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1V23" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- index_square_btn -->
                            <div class="index_square_btn d-flex">
                                <div class="index_square_btn_wrap">
                                    <p id="luca_voice_bt_01" onclick="playike13()">voice 1</p>
                                    <p id="luca_voice_bt_02" onclick="playike14()">voice 2</p>
                                    <p id="luca_voice_bt_03" onclick="playike15()">voice 3</p>
                                    <p id="luca_voice_bt_04" onclick="playike16()">voice 4</p>
                                </div>
                            </div>
                            <audio id="luca_voice_01" src="./voice/luca/luca出道.mp3"></audio>
                            <audio id="luca_voice_02" src="./voice/luca/luca早安.mp3"></audio>
                            <audio id="luca_voice_03" src="./voice/luca/luca笑.mp3"></audio>
                            <audio id="luca_voice_04" src="./voice/luca/luca驚.mp3"></audio>

                            <!-- see_more_ph -->
                            <div class="see_more_ph">
                                <a class="see_more fakegold" href=""> See more </a>
                            </div>

                            <!-- index_SC_rank -->
                            <div class="index_SC_rank">
                                <div class="index_SC_rank_wrap">
                                    <div class="index_SC_rank_title d-flex align-items-lg-baseline">
                                        <p class="fakegold">SC Vtuber 排名</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 6L13.5 15.5L8.5 10.5L1 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 6H23V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="index_SC_rank_info">
                                        <div class="index_SC_rank_info_number d-flex align-items-lg-baseline justify-content-between">
                                            <p class="text-white SC_rank_number luca_rank_nb">No. 13</p>
                                            <p class="fakegold SC_rank_money luca_rank_m">+ NT 1,404,636</p>
                                        </div>
                                        <div class="index_SC_rank_info_btn d-flex align-items-lg-baseline">
                                            <p class="mr-4 active luca_monthly">當月</p>
                                            <p class="luca_weekly">當周</p>
                                            <a class="index_SC_rank_link" href="">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.91667 19H30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M19 7.91663L30.0833 19L19 30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- index_livenow_timezone -->
                            <div class="index_livenow_timezone">
                                <div class="index_livenow_timezone_wrap">
                                    <div class="index_livenow_title d-flex align-items-baseline">
                                        <svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="6" fill="#E73D48" />
                                            <circle cx="10" cy="10" r="9.5" stroke="#E73D48" />
                                        </svg>
                                        <p>LIVE NOW</p>
                                    </div>
                                    <div class="index_livenow_img">
                                        <img src="./imgs/index/Luca_Mincraft.png" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div class="index_timezone">
                                        <div class="index_timezone_wrap d-flex align-items-start">
                                            <!-- index_timezone_flag -->
                                            <div class="index_timezome_flag_dropdown_menu_wrap">
                                                <ul class="index_timezome_flag_dropdown_menu mr-3">
                                                    <li class="flag_wrap_top">
                                                        <a class="flag_wrap">
                                                            <img class="flag_top" src="./imgs/index/flag/TW.png" alt="" />
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 9L12 15L18 9" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>

                                                        <ul>
                                                            <li>
                                                                <a class="flag_wrap flag_TW">
                                                                    <img src="./imgs/index/flag/TW.png" alt="" />
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_JP">
                                                                    <img src="./imgs/index/flag/JP.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_GB">
                                                                    <img src="./imgs/index/flag/GB.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_AU">
                                                                    <img src="./imgs/index/flag/AU.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_US">
                                                                    <img src="./imgs/index/flag/US.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_SE">
                                                                    <img src="./imgs/index/flag/SE.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_CA">
                                                                    <img src="./imgs/index/flag/CA.png" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="TimezoneInfo_wrap d-flex pt-2">
                                                <p id="" class="TimezoneInfo mr-3"></p>
                                                <p id="" class="TimezoneInfoCount mr-2 d-flex align-items-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- index_intro_Shu_outwrap -->
                        <div class="index_intro_Ike_outwrap">

                            <!-- index_Shu_body -->
                            <div class="index_IKE_body">
                                <div class="index_IKE_body_wrap">
                                    <img class="ike_body" src="./imgs/index/Shu_whole body.png" alt="" />
                                </div>
                                <img class="ike_shadow" src="./imgs/index/Shu_shadow.png" alt="" />
                            </div>

                            <!-- index_Shu_intro -->
                            <div class="index_IKE_intro">
                                <div class="index_IKE_head">
                                    <img src="./imgs/index/Shu.png" alt="" />
                                    <p>
                                        <span class="color_shu index_IKE_head_title">
                                            Shu Yamino
                                        </span>
                                    </p>
                                    <p class="text-white">
                                        一個擁有來自過去的神秘力量的咒術師。雖然溫和善良，但對任何試圖傷害他的人，會毫不留情地施以詛咒。
                                    </p>
                                    <a class="see_more fakegold" href="">See more</a>
                                    <div class="svg_link">
                                        <!-- YT-icon -->
                                        <svg class="YT-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.54 6.42C22.4212 5.94541 22.1793 5.51057 21.8386 5.15941C21.498 4.80824 21.0707 4.55318 20.6 4.42C18.88 4 12 4 12 4C12 4 5.11999 4 3.39999 4.46C2.92924 4.59318 2.50197 4.84824 2.16134 5.19941C1.82071 5.55057 1.57878 5.98541 1.45999 6.46C1.14521 8.20556 0.991228 9.97631 0.999992 11.75C0.988771 13.537 1.14276 15.3213 1.45999 17.08C1.59095 17.5398 1.8383 17.9581 2.17814 18.2945C2.51797 18.6308 2.93881 18.8738 3.39999 19C5.11999 19.46 12 19.46 12 19.46C12 19.46 18.88 19.46 20.6 19C21.0707 18.8668 21.498 18.6118 21.8386 18.2606C22.1793 17.9094 22.4212 17.4746 22.54 17C22.8524 15.2676 23.0063 13.5103 23 11.75C23.0112 9.96295 22.8572 8.1787 22.54 6.42Z" fill="#D3B572" />
                                            <path d="M9.75 15.02L15.5 11.75L9.75 8.47998V15.02Z" fill="black" />
                                        </svg>
                                        <!-- TW-icon -->
                                        <svg class="TW-icon mr-3" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                        </svg>
                                        <!-- ST-icon -->
                                        <svg class="ST-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 1V23" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 5H9.5C8.57174 5 7.6815 5.36875 7.02513 6.02513C6.36875 6.6815 6 7.57174 6 8.5C6 9.42826 6.36875 10.3185 7.02513 10.9749C7.6815 11.6313 8.57174 12 9.5 12H14.5C15.4283 12 16.3185 12.3687 16.9749 13.0251C17.6313 13.6815 18 14.5717 18 15.5C18 16.4283 17.6313 17.3185 16.9749 17.9749C16.3185 18.6313 15.4283 19 14.5 19H6" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- index_square_btn -->
                            <div class="index_square_btn d-flex">
                                <div class="index_square_btn_wrap">
                                    <p id="shu_voice_bt_01" onclick="playike17()">voice 1</p>
                                    <p id="shu_voice_bt_02" onclick="playike18()">voice 2</p>
                                    <p id="shu_voice_bt_03" onclick="playike19()">voice 3</p>
                                    <p id="shu_voice_bt_04" onclick="playike20()">voice 4</p>
                                </div>
                            </div>
                            <audio id="shu_voice_01" src="./voice/shu/shu出道.mp3"></audio>
                            <audio id="shu_voice_02" src="./voice/shu/shu笑聲.mp3"></audio>
                            <audio id="shu_voice_03" src="./voice/shu/shu賣萌.mp3"></audio>
                            <audio id="shu_voice_04" src="./voice/shu/shu驚呼.mp3"></audio>

                            <!-- see_more_ph -->
                            <div class="see_more_ph">
                                <a class="see_more fakegold" href=""> See more </a>
                            </div>

                            <!-- index_SC_rank -->
                            <div class="index_SC_rank">
                                <div class="index_SC_rank_wrap">
                                    <div class="index_SC_rank_title d-flex align-items-lg-baseline">
                                        <p class="fakegold">SC Vtuber 排名</p>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23 6L13.5 15.5L8.5 10.5L1 18" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17 6H23V12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="index_SC_rank_info">
                                        <div class="index_SC_rank_info_number d-flex align-items-lg-baseline justify-content-between">
                                            <p class="text-white SC_rank_number shu_rank_nb">No. 7</p>
                                            <p class="fakegold SC_rank_money shu_rank_m">+ NT 1,758,527</p>
                                        </div>
                                        <div class="index_SC_rank_info_btn d-flex align-items-lg-baseline">
                                            <p class="mr-4 active shu_monthly">當月</p>
                                            <p class="shu_weekly">當周</p>
                                            <a class="index_SC_rank_link" href="">
                                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.91667 19H30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M19 7.91663L30.0833 19L19 30.0833" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- index_livenow_timezone -->
                            <div class="index_livenow_timezone">
                                <div class="index_livenow_timezone_wrap">
                                    <div class="index_livenow_title d-flex align-items-baseline">
                                        <svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="6" fill="#E73D48" />
                                            <circle cx="10" cy="10" r="9.5" stroke="#E73D48" />
                                        </svg>
                                        <p>LIVE NOW</p>
                                    </div>
                                    <div class="index_livenow_img">
                                        <img src="./imgs/index/Shu_VALORANT.png" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div class="index_timezone">
                                        <div class="index_timezone_wrap d-flex align-items-start">
                                            <!-- index_timezone_flag -->
                                            <div class="index_timezome_flag_dropdown_menu_wrap">
                                                <ul class="index_timezome_flag_dropdown_menu mr-3">
                                                    <li class="flag_wrap_top">
                                                        <a class="flag_wrap">
                                                            <img class="flag_top" src="./imgs/index/flag/TW.png" alt="" />
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M6 9L12 15L18 9" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </a>

                                                        <ul>
                                                            <li>
                                                                <a class="flag_wrap flag_TW">
                                                                    <img src="./imgs/index/flag/TW.png" alt="" />
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_JP">
                                                                    <img src="./imgs/index/flag/JP.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_GB">
                                                                    <img src="./imgs/index/flag/GB.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_AU">
                                                                    <img src="./imgs/index/flag/AU.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_US">
                                                                    <img src="./imgs/index/flag/US.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_SE">
                                                                    <img src="./imgs/index/flag/SE.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="flag_wrap flag_CA">
                                                                    <img src="./imgs/index/flag/CA.png" alt="" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="TimezoneInfo_wrap d-flex pt-2">
                                                <p id="" class="TimezoneInfo mr-3"></p>
                                                <p id="" class="TimezoneInfoCount mr-2 d-flex align-items-center"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>



                <!-- index_intro_chevron_left -->
                <div class="index_intro_chevron_left">
                    <div class="index_intro_chevron_left_wrap">
                        <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M41.25 49.5L24.75 33L41.25 16.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- index_intro_chevron_right -->
                <div class="index_intro_chevron_right">
                    <div class="index_intro_chevron_right_wrap">
                        <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.75 49.5L41.25 33L24.75 16.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>


                <!-- index_MEME_outwrap -->
                <div class="index_MEME_outwrap">
                    <div class="index_MEME_wrap">
                        <!-- index_MEME_text -->
                        <div class="index_MEME_text">
                            <div class="index_MEME_text_up">
                                <p class="text-white MEME_text_1">迷因產生器</p>
                                <p class=" KaiseiOpti fakegold MEME_text_2">MEME</p>
                            </div>
                            <p class=" KaiseiOpti fakegold MEME_text_3">Maker</p>

                        </div>
                        <!-- menu_btn -->
                        <div class="menu_btn">
                            <div class="menu_line">
                                <span class="line_up"></span>
                                <span class="line_middle"></span>
                                <span class="line_down"></span>
                            </div>
                        </div>
                        <!-- index_MEME_img_wrap -->
                        <div class="index_MEME_img_wrap">
                            <div class="index_MEME_img">
                                <img src="./imgs/index/MEME/MEME_ike.png" alt="">
                            </div>
                        </div>

                        <!-- index_MEME_img_wrap_other -->
                        <div class="index_MEME_img_wrap_other">
                            <div class="index_MEME_img_1">
                                <img src="./imgs/index/MEME/MEME_ike.png" alt="">
                            </div>
                            <div class="index_MEME_img_2">
                                <img src="./imgs/index/MEME/MEME_mysta.png" alt="">
                            </div>
                            <div class="index_MEME_img_3">
                                <img src="./imgs/index/MEME/MEME_vox.png" alt="">
                            </div>
                            <div class="index_MEME_img_4">
                                <img src="./imgs/index/MEME/MEME_shu.png" alt="">
                            </div>
                            <div class="index_MEME_img_5">
                                <img src="./imgs/index/MEME/MEME_luca.png" alt="">
                            </div>
                        </div>

                        <!-- index_MEME_btn_wrap -->
                        <div class="index_MEME_btn_wrap d-flex">
                            <div class="index_MEME_btn ">
                                <div class="MEME_btn contain-1">
                                    <p class="MEME_btn_1 active"> 文豪</p>
                                </div>
                                <div class="MEME_btn contain-1">
                                    <p class="MEME_btn_2"> 狐狸</p>
                                </div>
                                <div class="MEME_btn contain-1">
                                    <p class="MEME_btn_3"> 惡魔</p>
                                </div>
                                <div class="MEME_btn contain-1">
                                    <p class="MEME_btn_4"> 咒術師</p>
                                </div>
                                <div class="MEME_btn contain-1">
                                    <p class="MEME_btn_5">黑手黨</p>
                                </div>

                            </div>
                        </div>
                        <!-- index_arrow_3 -->
                        <div class="index_arrow_3">
                            <div class="index_arrow_text text-white">
                                <a href="hold-item.php">
                                    <p>創作自己的迷因</p>
                                </a>
                                <svg viewBox="0 0 93 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M92.7071 8.09821C93.0976 7.70769 93.0976 7.07452 92.7071 6.684L86.3431 0.320037C85.9526 -0.0704874 85.3194 -0.0704874 84.9289 0.320037C84.5384 0.710561 84.5384 1.34373 84.9289 1.73425L90.5858 7.3911L84.9289 13.048C84.5384 13.4385 84.5384 14.0716 84.9289 14.4622C85.3195 14.8527 85.9526 14.8527 86.3431 14.4622L92.7071 8.09821ZM7.71589e-08 8.39111L92 8.3911L92 6.3911L-7.71589e-08 6.39111L7.71589e-08 8.39111Z" fill="#D3B572" />
                                </svg>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- index_watch_wrap -->
                <div class="index_watch_wrap">
                    <!-- index_watch_text -->
                    <div class="index_watch_text">
                        <p class="KaiseiOpti fakegold watch_text_01">Watch This !</p>
                        <p class="NotoSans text-white watch_text_02">來看看創作</p>
                    </div>
                    <!-- #tab-demo -->
                    <div id="tab-demo">
                        <ul class="tab-title NotoSans">
                            <li><a href="#tab01">直播影片區</a></li>
                            <li><a href="#tab02">烤肉影片區</a></li>
                            <li><a href="#tab03">粉絲創作區</a></li>
                        </ul>
                        <!-- #tab01 -->
                        <div id="tab01" class="tab-inner NotoSans">
                            <div class="index_Watch_img_out_wrap d-flex">
                                <div class="index_Watch_img_wrap mr-2" data-toggle="modal" data-target="#stream1">
                                    <!-- <a href="https://www.youtube.com/watch?v=AqxLT5ko8gQ&t=1s"> -->
                                    <div class="index_Watch_img">
                                        <img src="./imgs/index/stream/behind_frame.jpg" alt="" />
                                        <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <p class="index_Watch_text">【BEHIND THE FRAME】Time to brush up on those art
                                        skills【NIJISANJI EN | Ike Eveland】
                                    </p>
                                    <!-- </a> -->
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://www.youtube.com/watch?v=WbFyDz1T3gI&t=4s">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/stream/unpacking.jpg" alt="" />
                                            <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【UNPACKING】Getting my life together
                                            simulator【NIJISANJI EN | Ike Eveland】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://www.youtube.com/watch?v=1wyJGQs8sLg&t=1s">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/stream/HONK.jpg" alt="" />
                                            <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【UNTITLED GOOSE GAME】I am chaos.【NIJISANJI EN | Ike
                                            Eveland】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://www.youtube.com/watch?v=iMqWXzuWauw&t=1600s">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/stream/GRIS.jpg" alt="" />
                                            <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【GRIS】Am I wearing a coat again?【NIJISANJI EN | Ike
                                            Eveland】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://www.youtube.com/watch?v=ef8pFLLQvVc">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/stream/ABZU.jpg" alt="" />
                                            <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【ABZU】Deep dive, take two!【NIJISANJI EN | Ike
                                            Eveland】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://www.youtube.com/watch?v=CXEhzPqeG4A&t=3s">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/stream/the_witness_0403.jpg" alt="" />
                                            <svg class="video_play_icon" width="91" height="90" viewBox="0 0 91 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M85.4642 24.075C85.0138 22.2953 84.0964 20.6646 82.8049 19.3478C81.5133 18.0309 79.8933 17.0744 78.1083 16.575C71.5867 15 45.5 15 45.5 15C45.5 15 19.4133 15 12.8917 16.725C11.1067 17.2244 9.48665 18.1809 8.1951 19.4978C6.90354 20.8146 5.98623 22.4453 5.53582 24.225C4.34226 30.7708 3.75843 37.4112 3.79166 44.0625C3.74911 50.7639 4.33298 57.4549 5.53582 64.05C6.03238 65.7744 6.97024 67.343 8.25879 68.6043C9.54734 69.8656 11.143 70.7768 12.8917 71.25C19.4133 72.975 45.5 72.975 45.5 72.975C45.5 72.975 71.5867 72.975 78.1083 71.25C79.8933 70.7506 81.5133 69.7941 82.8049 68.4772C84.0964 67.1604 85.0138 65.5297 85.4642 63.75C86.6485 57.2535 87.2323 50.6638 87.2083 44.0625C87.2509 37.3611 86.667 30.6701 85.4642 24.075V24.075Z" fill="white" fill-opacity="0.5" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M36.9688 56.3251L58.7708 44.0625L36.9688 31.8V56.3251Z" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【THE WITNESS】It's just drawing lines, how hard can
                                            it be?【NIJISANJI EN | Ike Eveland】
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- #stream1 -->
                        <div id="stream1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog .modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">

                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/AqxLT5ko8gQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- #tab02 -->
                        <div id="tab02" class="tab-inner NotoSans">
                            <div class="index_Watch_img_out_wrap d-flex">
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/NujKPbNsnOA">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/sweden.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【Ike Eveland】流利切換三種語言的文豪【彩虹社中譯】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/wBanjn9vXPk">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/man.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【Luxiem聯動/全視角】 入戲過深的Ike【彩虹社中譯/Propnight #3】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/6_kVhp6H_xg">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/meow.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【彩虹社繁中翻譯】Ike的超可愛喵喵叫和早安voice
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/UY8Zz25ifAc">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/deathvoice.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【Ike Eveland】無力P - Aspirin｜驚為天人的歌聲【彩虹社中譯】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/m9fH253-7ak">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/language.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">【彩虹社EN中字】如果你不只會說一種語言的話 💌【NIJISANJI EN | Ike
                                            Eveland】
                                        </p>
                                    </a>
                                </div>
                                <div class="index_Watch_img_wrap mr-2">
                                    <a href="https://youtu.be/mu86MMvDndw">
                                        <div class="index_Watch_img">
                                            <img src="./imgs/index/clip/youSmell.webp" alt="" />
                                            <svg class="video_play_icon" width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M46.5 85.25C67.901 85.25 85.25 67.901 85.25 46.5C85.25 25.099 67.901 7.75 46.5 7.75C25.099 7.75 7.75 25.099 7.75 46.5C7.75 67.901 25.099 85.25 46.5 85.25Z" fill="#FCFCFC" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M38.75 31L62 46.5L38.75 62V31Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <p class="index_Watch_text">you smell

                                        </p>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- #tab03 -->
                        <div id="tab03" class="tab-inner NotoSans">
                            <div class="index_Watch_img_out_wrap d-flex">
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart1">
                                    <div class="index_Watch_fanart_img">
                                        <img src="./imgs/index/fanart/FKpIvInaQAAqKIn.jpg" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@qtoro111
                                            <br>
                                            <span class=" fakegold "> #Ikenography </spanc>
                                        </p>
                                        <a href="https://twitter.com/qtoro111/status/1489082813282676736/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart2">
                                    <div class="index_Watch_fanart_img">
                                        <img src="./imgs/index/fanart/gris-Ike-2.jpg" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@a_a00od
                                            <br>
                                            <span class=" fakegold ">#Ikenography</span>
                                        </p>
                                        <a href="https://twitter.com/a_a00od/status/1493985909657591811/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart3">
                                    <div class="index_Watch_fanart_img">
                                        <img src="./imgs/index/fanart/fanart-Ike.jpg" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@Wainz_h_VD
                                            <br>
                                            <span class=" fakegold ">#Ikenography</span> 'That's the problem, people who
                                            think he was one of the exhibits.'
                                        </p>
                                        <a href="https://twitter.com/Wainz_h_VD/status/1488527527849209856/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart4">
                                    <div class="index_Watch_fanart_img">
                                        <img src="./imgs/index/fanart/FMAecAbUYAIfZSP.jfif" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@_jialun_
                                            <br>
                                            <span class=" fakegold ">#Ikenography #IkeEveland #Luxiem</span> My treasure
                                        </p>
                                        <a href="https://mobile.twitter.com/_jialun_/status/1495228546356105219/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart5">
                                    <div class="index_Watch_fanart_img">
                                        <img class="tr-img" src="./imgs/index/fanart/11111.jpeg" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@SeigenMomokawa
                                            <br>
                                            <span class=" fakegold ">#Ikenography </span> He is sooo cute
                                            背景是照片，摸了
                                        </p>
                                        <a href="https://twitter.com/SeigenMomokawa/status/1480102961011326976/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="index_Watch_fanart_img_wrap mr-2" data-toggle="modal" data-target="#fanart6">
                                    <div class="index_Watch_fanart_img">
                                        <img class="tr-img_2" src="./imgs/index/fanart/FUBGGYfakAAhPId.png" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2">@romiiii926
                                            <br>
                                            <span class=" fakegold ">#Ikenography </span>
                                        </p>
                                        <a href="https://twitter.com/romiiii926/status/1531301006495354880/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- index_Watch_fanart_img_wrap_lightbox -->
                        <div class="index_Watch_fanart_img_wrap_lightbox">
                            <!-- #fanart1 -->
                            <div class="modal fade" id="fanart1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="und" dir="ltr"><a href="https://twitter.com/hashtag/Ikenography?src=hash&amp;ref_src=twsrc%5Etfw">#Ikenography</a>
                                                    <br>💙💙💙 <a href="https://t.co/4CRQ0OiaNX">pic.twitter.com/4CRQ0OiaNX</a>
                                                </p>&mdash; QTORO (@qtoro111) <a href="https://twitter.com/qtoro111/status/1489082813282676736?ref_src=twsrc%5Etfw">February
                                                    3, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- #fanart2 -->
                            <div class="modal fade" id="fanart2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="und" dir="ltr"><a href="https://twitter.com/hashtag/Ikenography?src=hash&amp;ref_src=twsrc%5Etfw">#Ikenography</a>
                                                    <a href="https://t.co/SA72JdbOX0">pic.twitter.com/SA72JdbOX0</a>
                                                </p>
                                                &mdash; ⠒̫⃝ (@a_a00od) <a href="https://twitter.com/a_a00od/status/1493985909657591811?ref_src=twsrc%5Etfw">February
                                                    16, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- #fanart3 -->
                            <div class="modal fade" id="fanart3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/Ikenography?src=hash&amp;ref_src=twsrc%5Etfw">#Ikenography</a>
                                                    &#39;That&#39;s the problem, people who think he was one of the
                                                    exhibits.&#39; <a href="https://t.co/QP5v4FcPME">pic.twitter.com/QP5v4FcPME</a>
                                                </p>&mdash; Wainz (@Wainz_h_VD) <a href="https://twitter.com/Wainz_h_VD/status/1488527527849209856?ref_src=twsrc%5Etfw">February
                                                    1, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- #fanart4 -->
                            <div class="modal fade" id="fanart4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/Ikenography?src=hash&amp;ref_src=twsrc%5Etfw">#Ikenography</a>
                                                    <a href="https://twitter.com/hashtag/IkeEveland?src=hash&amp;ref_src=twsrc%5Etfw">#IkeEveland</a>
                                                    <a href="https://twitter.com/hashtag/Luxiem?src=hash&amp;ref_src=twsrc%5Etfw">#Luxiem</a>
                                                    My treasure💙 <a href="https://t.co/YzYn0GYFAU">pic.twitter.com/YzYn0GYFAU</a>
                                                </p>&mdash; JiaLun伽伦🥕 (@_jialun_) <a href="https://twitter.com/_jialun_/status/1495228546356105219?ref_src=twsrc%5Etfw">February
                                                    20, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- #fanart5 -->
                            <div class="modal fade" id="fanart5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="ja" dir="ltr"><a href="https://twitter.com/hashtag/Ikenography?src=hash&amp;ref_src=twsrc%5Etfw">#Ikenography</a><br><br>He
                                                    is sooo cute <br>背景是照片，摸了 <a href="https://t.co/Z1NJPRlXCw">pic.twitter.com/Z1NJPRlXCw</a>
                                                </p>&mdash; 百川青源seigen (@SeigenMomokawa) <a href="https://twitter.com/SeigenMomokawa/status/1480102961011326976?ref_src=twsrc%5Etfw">January
                                                    9, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- #fanart6 -->
                            <div class="modal fade" id="fanart6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog .modal-xl modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fakegold KaiseiOpti" id="exampleModalCenterTitle">
                                                Fanarts</h5>
                                            <button type="button" class="close fakegold" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <blockquote class="twitter-tweet">
                                                <p lang="und" dir="ltr"><a href="https://t.co/mPU87Pqv3j">pic.twitter.com/mPU87Pqv3j</a>
                                                </p>&mdash; nomiiii (@romiiii926) <a href="https://twitter.com/romiiii926/status/1531301006495354880?ref_src=twsrc%5Etfw">May
                                                    30, 2022</a>
                                            </blockquote>
                                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- tab_title_ph -->
                    <div class="tab_title_ph NotoSans">
                        <div class="tab_title_ph_stream">
                            <p class="fakegold tab_title_ph_p">直播影片區</p>

                            <div class="index_Watch_img_wrap_ph ">
                                <div class="index_Watch_img_ph ">
                                    <iframe width="100%" height="155" src="https://www.youtube.com/embed/AqxLT5ko8gQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    <p class="index_Watch_text_ph">
                                        【UNPACKING】Getting my life together simulator【NIJISANJI EN | Ike Eveland】
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="tab_title_ph_clip">
                            <p class="fakegold tab_title_ph_p">烤肉影片區</p>
                            <div class="index_Watch_img_wrap_ph ">
                                <div class="index_Watch_img_ph ">
                                    <iframe width="100%" height="155" src="https://www.youtube.com/embed/wBanjn9vXPk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    <p class="index_Watch_text_ph">
                                        【Luxiem聯動/全視角】 入戲過深的Ike【彩虹社中譯/Propnight #3】
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab_title_ph_fanart">
                            <p class="fakegold tab_title_ph_p">粉絲創作區</p>
                            <div class="index_Watch_img_wrap_ph ">
                                <div class="index_Watch_fanart_img_wrap_ph">
                                    <div class="index_Watch_fanart_img_ph">
                                        <img src="./imgs/index/fanart/FKpIvInaQAAqKIn.jpg" alt="" />
                                    </div>
                                    <div class="index_Watch_info d-flex justify-content-between mt-4">
                                        <p class="index_Watch_text_2_ph">@qtoro111
                                            <br>
                                            <span class=" fakegold "> #Ikenography </spanc>
                                        </p>
                                        <a href="https://twitter.com/qtoro111/status/1489082813282676736/photo/1">
                                            <!-- TW-icon -->
                                            <svg class="TW-icon " width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23 3.00005C22.0424 3.67552 20.9821 4.19216 19.86 4.53005C19.2577 3.83756 18.4573 3.34674 17.567 3.12397C16.6767 2.90121 15.7395 2.95724 14.8821 3.2845C14.0247 3.61176 13.2884 4.19445 12.773 4.95376C12.2575 5.71308 11.9877 6.61238 12 7.53005V8.53005C10.2426 8.57561 8.50127 8.18586 6.93101 7.39549C5.36074 6.60513 4.01032 5.43868 3 4.00005C3 4.00005 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.50005C20.9991 7.2215 20.9723 6.94364 20.92 6.67005C21.9406 5.66354 22.6608 4.39276 23 3.00005Z" fill="#D3B572" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- index_arrow_4 -->
                    <div class="index_arrow_4">
                        <div class="index_arrow_text text-white">
                            <a href="8-1.live-stream-home.php">
                                <p>看更多</p>
                            </a>
                            <svg viewBox="0 0 150 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M137.061 13.0607C137.646 12.4749 137.646 11.5251 137.061 10.9393L127.515 1.3934C126.929 0.807612 125.979 0.807612 125.393 1.3934C124.808 1.97918 124.808 2.92893 125.393 3.51472L133.879 12L125.393 20.4853C124.808 21.0711 124.808 22.0208 125.393 22.6066C125.979 23.1924 126.929 23.1924 127.515 22.6066L137.061 13.0607ZM0.666672 13.5H136V10.5H0.666672V13.5Z" fill="#D3B572" />
                            </svg>

                        </div>
                    </div>


                </div>







            </div>
        </div>
    </div>

    <!-- index_timeline -->
    <section class="timeline">
        <!-- index_timeline_wrap -->
        <!-- <img src="./imgs/index/marquee/halfcircle-black.png" alt="" class="halfcircle"> -->
        <div class="index_timeline_wrap">

            <div class="index_timeline">

                <!-- marquee_black_wrap -->
                <div class="marquee_black_outwrap">
                    <div class="marquee_black_wrap">
                        <marquee behavior="scroll" loop="5" scrollamount="10" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">
                            <img class="marquee_black" src="./imgs/index/marquee/marquee-black.png" alt="">
                            <img class="marquee_black" src="./imgs/index/marquee/marquee-black.png" alt="">
                            <img class="marquee_black" src="./imgs/index/marquee/marquee-black.png" alt="">
                        </marquee>
                    </div>
                </div>
                <!-- index_timeline_Title_ph -->
                <div class="index_timeline_Title_ph">
                    <p class="KaiseiOpti fakegold timeline_Title_up_ph">Timeline</p>
                    <p class="NotoSans timeline_Title_dn_ph">出道歷程</p>
                </div>
                <div class="index_timeline_bg_circle">

                    <div class="index_timeline_bg_halfcircle">
                        <!-- <img class="halfcircle" src="./imgs/index/marquee/halfcircle-black.png" alt="" > -->
                        <div class="index_timeline_Title">
                            <p class="KaiseiOpti fakegold timeline_Title_up">Timeline</p>
                            <p class="NotoSans timeline_Title_dn">出道歷程</p>
                        </div>

                        <div class="index_timeline_bg_circle_2">
                            <section id="timeline">

                                <ul class="line">
                                    <svg class="line_circle" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="7" cy="7" r="7" transform="rotate(90 7 7)" fill="#D3B572" />
                                    </svg>
                                    <!-- <div class="index_timeline_info_line"></div> -->
                                    <li class="timeline_cont_1">
                                        <div class="cont">
                                            <h3>Luxiem 出道</h3>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Debut Program on 12/19-20 | 'Luxiem' Debut teaser | NIJISANJI EN
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <time>2021 12 17</time>
                                        </div>
                                    </li>

                                    <li class="timeline_cont_2">
                                        <div class="cont">
                                            <h3>Luxiem 出道歌曲</h3>
                                            <div class="cont_info d-flex  align-items-end">
                                                <p>
                                                    Luxiem - Hope in the dark (Official Music Video) | NIJISANJI EN
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <h3>Luxiem 出道 官方直播</h3>
                                            <div class="cont_info d-flex  align-items-end">
                                                <p>
                                                    Party time with「Luxiem」♪ NIJISANJI EN VTuber Debut Program hosted by Elira & Oliver!
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <time>2021 12 20</time>
                                        </div>
                                    </li>
                                    <li class="timeline_cont_3">
                                        <div class="cont">
                                            <h3>Luxiem 首次連動 PROPNIGHT</h3>

                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Ike Eveland
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Mysta Rias
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Vox Akuma
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Shu Yamino
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Luca Kaneshiro（未直播）
                                                </p>

                                            </div>
                                            <time>2021 12 25</time>
                                        </div>
                                    </li>
                                    <li class="timeline_cont_4">
                                        <div class="cont">
                                            <h3>Luxiem 出道直播 官方剪輯精華</h3>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Are YOU ready for the BOYS!?!? NIJISANJI EN Luxiem VTuber Debut Highlights (Eng Sub)
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <time>2021 12 27</time>
                                        </div>
                                    </li>
                                    <li class="timeline_cont_5">
                                        <div class="cont">
                                            <h3>Luxiem 全員 Minecraft 連動</h3>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Luca Kaneshiro
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Mysta Rias
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Vox Akuma
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Shu Yamino
                                                </p>
                                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 7.53165L17 17.5316" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M17 7.53165V17.5316H7" stroke="#D3B572" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="cont_info d-flex justify-content-between align-items-end">
                                                <p>
                                                    Ike Eveland（未直播）
                                                </p>

                                            </div>

                                            <time>2022 01 04</time>
                                        </div>
                                    </li>


                                    <svg class="timeline_vector" width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.75 1.5L11.5 10.5L21.25 1.5" stroke="#D3B572" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </ul>

                            </section>
                        </div>

                        <!-- marquee_white_wrap -->
                        <div class="marquee_white_wrap">
                            <marquee behavior="scroll" loop="5" scrollamount="10" direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">
                                <img class="marquee_white" src="./imgs/index/marquee/marquee-white.png" alt="">
                                <img class="marquee_white" src="./imgs/index/marquee/marquee-white.png" alt="">
                                <img class="marquee_white" src="./imgs/index/marquee/marquee-white.png" alt="">
                            </marquee>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>

    <!-- 下面是第一個車廂 -->
    <div class="index_item_style_wrap">
        <div class="index_item_style d-flex index_item_style_carousel1">
            <!-- 左區塊 -->
            <div class="index_item_style_content desktop_index_item_style_content">
                <!-- <p class="index_item_style_text_en">Style</p>
                    <p class="index_item_style_text_tc">配件類型</p> -->

                <!-- 左上 -->
                <div class="index_item_style_content_row2 d-flex justify-content-between mt-0">
                    <!-- 左上左 -->
                    <div class="index_item_style_content_row2_left">
                        <a href="itemshop.php#" class="index_item_style_content_row2_left_imgwrap">
                            <img src="./imgs/index/item_style/whiteday/LKCpeBoo96TIlA3m.jpg" alt="">
                        </a>
                    </div>
                    <!-- 左上右 -->
                    <div class="index_item_style_content_row2_right">
                        <a href="itemshop.php" class="index_item_style_content_row2_right_imgwrap">
                            <img src="./imgs/index/item_style/halfyearcelebration/ike_chair.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- 左下 -->
                <div class="index_item_style_content_row1 d-flex justify-content-between mt-5">
                    <div class="index_item_style_content_row1_left">
                        <a href="itemshop.php" class="index_item_style_content_row1_left_imgwrap">
                            <img src="./imgs/index/item_style/vox_birth/FRBBnV-aAAEFphr.jpg" alt="">
                        </a>
                    </div>
                    <div class="index_item_style_content_row1_right">
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap">
                            <img src="./imgs/index/item_style/debut.jpg" alt="">
                        </a>
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap2">
                            <img src="./imgs/index/item_style/shu_birth/FRf3h5zVIAAUfpW.jpg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <!-- 右區塊 -->
            <div class="index_item_style_content">
                <p class="index_item_style_text_en">Style</p>
                <p class="index_item_style_text_tc">配件類型</p>
                <div class="index_item_style_content_row1 d-flex justify-content-between">
                    <!-- 右上左 -->
                    <div class="index_item_style_content_row1_left">
                        <a href="itemshop.php" class="index_item_style_content_row1_left_imgwrap">
                            <img src="./imgs/index/item_style/item_style_1.png" alt="">
                        </a>
                    </div>
                    <!-- 右上右 -->
                    <div class="index_item_style_content_row1_right">
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap">
                            <img src="./imgs/index/item_style/item_style_2.png" alt="">
                        </a>
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap2">
                            <img src="./imgs/index/item_style/item_style_3.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- 右下 -->
                <div class="index_item_style_content_row2 d-flex justify-content-between">
                    <!-- 右下左 -->
                    <div class="index_item_style_content_row2_left">
                        <a href="itemshop.php" class="index_item_style_content_row2_left_imgwrap">
                            <img src="./imgs/index/item_style/item_style_4.png" alt="">
                        </a>
                    </div>
                    <!-- 右下右 -->
                    <div class="index_item_style_content_row2_right">
                        <a href="itemshop.php" class="index_item_style_content_row2_right_imgwrap">
                            <img src="./imgs/index/item_style/item_style_5.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="index_item_style_seemore">
                    <a href="itemshop.php">
                        <p>看更多
                            <svg width="44" height="16" viewBox="0 0 44 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M43.7069 8.70711C44.0974 8.31658 44.0974 7.68342 43.7069 7.29289L37.3429 0.928932C36.9524 0.538408 36.3192 0.538408 35.9287 0.928932C35.5382 1.31946 35.5382 1.95262 35.9287 2.34315L41.5855 8L35.9287 13.6569C35.5382 14.0474 35.5382 14.6805 35.9287 15.0711C36.3192 15.4616 36.9524 15.4616 37.3429 15.0711L43.7069 8.70711ZM0.0664062 9H42.9997V7H0.0664062V9Z" fill="#D3B572" />
                            </svg>
                        </p>

                    </a>
                </div>
            </div>

            <!-- 再複製上面的一次 讓車廂滿版 -->
            <div class="index_item_style_content desktop_index_item_style_content desktop_index_item_style_content_final">
                <!-- <p class="index_item_style_text_en">Style</p>
                    <p class="index_item_style_text_tc">配件類型</p> -->

                <!-- 右上 -->
                <div class="index_item_style_content_row2 d-flex  mt-0">

                    <div class="index_item_style_content_row2_left">
                        <a href="itemshop.php" class="index_item_style_content_row2_left_imgwrap">
                            <img src="./imgs/index/item_style/halfyearcelebration/halfyearcelebration_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="index_item_style_content_row2_right">
                        <a href="itemshop.php" class="index_item_style_content_row2_right_imgwrap">
                            <img src="./imgs/index/item_style/sakura bloom/FQ68ZBTVcAAXQwn.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- 右下 -->
                <div class="index_item_style_content_row1 d-flex  mt-5 justify-content-between">
                    <div class="index_item_style_content_row1_left">
                        <a href="itemshop.php" class="index_item_style_content_row1_left_imgwrap">
                            <img src="./imgs/index/item_style/shu_birth/FRP3PdraUAEAPKc.jpg" alt="">
                        </a>
                    </div>
                    <div class="index_item_style_content_row1_right">
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap">
                            <img src="./imgs/index/item_style/niji_cafe_1.jpg" alt="">
                        </a>
                        <a href="itemshop.php" class="index_item_style_content_row1_right_imgwrap2">
                            <img src="./imgs/index/item_style/luca_birth/54a87fcb-a884-4404-8367-1f28db0a15fc_base_resized.jpg" alt="">
                        </a>
                    </div>
                </div>

            </div>

            <!-- <div class="index_item_style_content desktop_index_item_style_content">
                    <p class="index_item_style_text_en">Style</p>
                    <p class="index_item_style_text_tc">配件類型</p>
                    <div class="index_item_style_content_row1 d-flex justify-content-between">
                        <div class="index_item_style_content_row1_left">
                            <a href="#" class="index_item_style_content_row1_left_imgwrap">
                                <img src="./imgs/index/item_style/item_style_1.png" alt="">
                            </a>
                        </div>
                        <div class="index_item_style_content_row1_right">
                            <a href="#" class="index_item_style_content_row1_right_imgwrap">
                                <img src="./imgs/index/item_style/item_style_2.png" alt="">
                            </a>
                            <a href="#" class="index_item_style_content_row1_right_imgwrap2">
                                <img src="./imgs/index/item_style/item_style_3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="index_item_style_content_row2 d-flex justify-content-between">
                        <div class="index_item_style_content_row2_left">
                            <a href="#" class="index_item_style_content_row2_left_imgwrap">
                                <img src="./imgs/index/item_style/item_style_4.png" alt="">
                            </a>
                        </div>
                        <div class="index_item_style_content_row2_right">
                            <a href="#" class="index_item_style_content_row2_right_imgwrap">
                                <img src="./imgs/index/item_style/item_style_5.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="index_item_style_seemore">
                        <a href="#">
                            <p>看更多
                                <svg width="44" height="16" viewBox="0 0 44 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.7069 8.70711C44.0974 8.31658 44.0974 7.68342 43.7069 7.29289L37.3429 0.928932C36.9524 0.538408 36.3192 0.538408 35.9287 0.928932C35.5382 1.31946 35.5382 1.95262 35.9287 2.34315L41.5855 8L35.9287 13.6569C35.5382 14.0474 35.5382 14.6805 35.9287 15.0711C36.3192 15.4616 36.9524 15.4616 37.3429 15.0711L43.7069 8.70711ZM0.0664062 9H42.9997V7H0.0664062V9Z"
                                        fill="#D3B572" />
                                </svg>
                            </p>

                        </a>
                    </div>
                </div> -->

        </div>
    </div>


    <!-- 下面是排排寫組員小卡 手機版 -->
    <section class="index_member_card_mobile">
        <div class="index_member_card_mobile_wrap">
            <div class="index_member_card_mobile_row d-flex justify-content-center">
                <a href="#" class="index_member_card_mobile_unit mr-3">
                    <p>康晴</p>
                    <div class="index_member_card_mobile_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <a href="#" class="index_member_card_mobile_unit">
                    <p>楊曉婷</p>
                    <div class="index_member_card_mobile_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
            </div>

            <div class="index_member_card_mobile_row d-flex justify-content-center mt-3">
                <a href="#" class="index_member_card_mobile_unit mr-3">
                    <p>張堯瑄</p>
                    <div class="index_member_card_mobile_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <a href="#" class="index_member_card_mobile_unit">
                    <p>劉丹儀</p>
                    <div class="index_member_card_mobile_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
            </div>

            <div class="index_member_card_mobile_row d-flex justify-content-center mt-3">
                <a href="#" class="index_member_card_mobile_unit mr-3">
                    <p>蔡金恩</p>
                    <div class="index_member_card_mobile_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <div class="index_member_card_mobile_unit">
                    <div class="index_member_card_mobile_unit_imgwrap index_member_card_textbox">
                        <p class="index_member_card_text1">Contact</p>
                        <p class="index_member_card_text2">Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 下面是排排寫組員小卡 桌機版 -->
    <section class="index_member_card_desktop">
        <div class="index_member_card_desktop_wrap">
            <div class="index_member_card_desktop_row d-flex justify-content-center">
                <a href="#" class="index_member_card_desktop_unit mr-5">
                    <p>康晴</p>
                    <div class="index_member_card_desktop_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <a href="#" class="index_member_card_desktop_unit mr-5">
                    <p>楊曉婷</p>
                    <div class="index_member_card_desktop_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <a href="#" class="index_member_card_desktop_unit">
                    <p>張堯瑄</p>
                    <div class="index_member_card_desktop_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
            </div>

            <div class="index_member_card_desktop_row d-flex justify-content-center mt-5">
                <a href="#" class="index_member_card_desktop_unit mr-5">
                    <p>劉丹儀</p>
                    <div class="index_member_card_desktop_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
                <a href="#" class="index_member_card_desktop_unit">
                    <p>蔡金恩</p>
                    <div class="index_member_card_desktop_unit_imgwrap">
                        <img src="./imgs/index/member_card/desktop_card_template.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>



</div>
<div class="mobile-menu-footer_2">
    Copyright © 2022 Design by The light of Luxiem.
    <br> All Rights Reserved.
    <br>
    此網站僅用於資展國際專題發表
</div>


<?php include __DIR__ . '/parts/html-script.php' ?>

<script src="./js/index_timezone.js"></script>
<script src="./js/index_voice.js"></script>
<script src="./js/index_intro_Bigtrain.js"></script>
<script src="./js/index_MEME_change.js"></script>
<script src="./js/index_watch_lightbox.js"></script>
<script src="./bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>

<script>

</script>

<?php include __DIR__ . '/parts/html-last.php' ?>