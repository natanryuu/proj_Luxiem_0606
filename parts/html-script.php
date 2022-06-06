<footer>
    <div class="desktop-footer">
        <div style="cursor: default;" class="desktop-footer-team3rd">
            Copyright © 2022 Design by The light of Luxiem. All Rights Reserved. <br>
            此網站僅用於資展國際專題發表
        </div>
    </div>
    <!-- $_SESSION['admin']['member_coin']-->
</footer>


<script src="./js/jquery-3.6.0.js"></script>
<script src="./bootstrap-4.2.1-dist/js/bootstrap.bundle.js"></script>

<!-- Navbar/Footer js -->
<script src="./js/0.navbar_footer.js"></script>

<!-- 下面是 導覽列套用scroll滑動效果 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="./js/script.js"></script>
<script>
    $(document).ready(() => {
        if (!localStorage.getItem('member')) {
            // $('#user-login').text('登入');
            // $('#user-login-m').text('登入');
            $('#user-login').addClass('show');
            $('#user-logout').addClass('hide');
            $('#user-login-m').addClass('show');
            $('#user-logout-m').addClass('hide');

            $('#user-image').attr('src', `./imgs/Navbar/user_img.png`);
            $('#user-image-m').attr('src', `./imgs/Navbar/user_img.png`);

            $('#user-name').text('用戶')
            $('#user-name-m').text('用戶')

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
                $('#user-name-m').text(data.user_name);

            }, 'json')
            // $('#user-login').text('登出');
            // $('#user-login-m').text('登出');
            $('#user-login').addClass('hide');
            $('#user-logout').addClass('show');
            $('#user-login-m').addClass('hide');
            $('#user-logout-m').addClass('show');
        }
    })
</script>