</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="desktop-menu-list">
            <div class="logo">
                <a href="#" class="logo-link">
                    <img src="./imgs/Navbar/logo_Luxiem.png" alt="">
                </a>
            </div>

            <div class="mobile-btn">
                <span class="mobilebtn-1"></span>
                <span class="mobilebtn-2"></span>
                <span class="mobilebtn-3"></span>
            </div>

            <div class="nav-right">
                <ul class="list-unstyled d-flex align-items-center">
                    <li>
                        <a onclick="location.href='0_index.php'" href="0_index.php">首頁</a>
                    </li>
                    <li>
                        <a onclick="location.href='psychological-home.php'" href="psychological-home.php">心理測驗</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            迷因配件
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item nav-list" onclick="location.href='itemshop.php'" href="itemshop.php">配件購物</a>
                            <a class="dropdown-item nav-list" onclick="location.href='coinshop.php'" href="coinshop.php">代幣商店</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            影片首頁
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item nav-list" onclick="location.href='8.live-stream.php'" href="8.live-stream.php">直播間</a>
                            <a class="dropdown-item nav-list" onclick="location.href='8-1.live-stream-home.php'" href="8-1.live-stream-home.php">烤肉影片</a>
                            <a class="dropdown-item nav-list" onclick="location.href='9.donation.php'" href="9.donation.php">抖內區</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            會員中心
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item nav-list" onclick="location.href='merber-info-revise.php'" href="merber-info-revise.php">資料修改</a>
                            <a class="dropdown-item nav-list" onclick="location.href='7.order_check.php'" href="7.order_check.php">訂單查詢</a>
                            <a class="dropdown-item nav-list" onclick="location.href='item-followed.php'" href="item-followed.php">喜好收藏</a>
                            <a class="dropdown-item nav-list" onclick="location.href='hold-item.php'" href="hold-item.php">持有配件</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="desktop-user">
                <div class="desktop-user-nav">
                    <a class="user-info" href="#">
                        <div class="user-imgwrap">
                            <img src="./././imgs/Navbar/user_img.png" alt="" id="user-image">
                        </div>
                        <div class="user-name" id="user-name">Allen</div>

                        <div onclick="location.href='sign-in-page.php'" class="user-login" id="user-login">登入</div>
                        <div class="user-login" id="user-logout" onclick="
                           localStorage.removeItem('member');
                        //    unset($_SESSION['admin'])
                            location.href='0_index.php';
                        ">登出</div>

                        <div class="log-icon">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </div>
                    </a>

                    <a class="user-cart" onclick="location.href='5-1.shopping_cart.php'" href="5-1.shopping_cart.php">
                        <div class="user-login">購物車</div>
                        <div class="log-icon">
                            <i class="fa-solid fa-cart-plus"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 漢堡夾清單mobile_menu_list -->
    <div class="mobile-menu">
        <a class="user-info" href="#">
            <div class="user-imgwrap">
                <img src="./imgs/Navbar/user_img.png" alt="" id="user-image-m">
            </div>
            <div class="user-name" id="user-name-m">Allen</div>
            <div class="user-login" id='user-login-m' onclick="location.href='sign-in-page.php'" href="sign-in-page.php">登入</div>
            <div class="user-login" id='user-logout-m' onclick="
                           localStorage.removeItem('member');
                        //    unset($_SESSION['admin'])
                            location.href='0_index.php';
                        ">登出</div>
        </a>

        <div class="mobile-menu-list">
            <ul>
                <li class="mobile-menu-title-all">
                    <a class="mobile-menu-maintitle" href="0_index.php">首頁</a>
                </li>
                <li class="mobile-menu-title-all">
                    <a class="mobile-menu-maintitle" href="psychological-home.php">心理測驗</a>
                </li>
                <li class="mobile-menu-title-all">
                    <a class="mobile-menu-maintitle" href="#">迷因配件</a>
                    <ul>
                        <li>
                            <a class="mobile-menu-subtitle" href="itemshop.php">配件購物</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="coinshop.php">代幣商店</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-menu-title-all">
                    <a class="mobile-menu-maintitle" href="#">影片首頁</a>
                    <ul>
                        <li>
                            <a class="mobile-menu-subtitle" href="8.live-stream.php">直播間</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="8-1.live-stream-home.php">烤肉影片</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="9.donation.php">抖內區</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-menu-title-all">
                    <a class="mobile-menu-maintitle" href="#">會員中心</a>
                    <ul>
                        <li>
                            <a class="mobile-menu-subtitle" href="merber-info-revise.php">資料修改</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="7.order_check.php">訂單查詢</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="item-followed.php">喜好收藏</a>
                        </li>
                        <li>
                            <a class="mobile-menu-subtitle" href="hold-item.php">持有配件</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="mobile-menu-footer">
            Copyright © 2022 Design by The light of Luxiem. <br> All Rights Reserved. <br>
            此網站僅用於資展國際專題發表
        </div>
    </div>