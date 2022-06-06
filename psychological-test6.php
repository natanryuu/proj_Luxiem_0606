<?php
require './parts/connect-db.php';
$pageName = 'psychological-test6';
$title = 'Your Soulmate is Luca Kaneshiro';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<!-- 這邊會放該頁需要的css 如同下面 -->
<!-- <link rel="stylesheet" href="./css/shopping_cart.css"> -->
<link rel="stylesheet" href="css/psychological-test-ans.css">
<link rel="stylesheet" href="css/psychological-test-ans-btn.css">

<?php include __DIR__ . '/parts/html-navbar.php' ?>
<!-- 這邊會放該頁需要的html -->



<section class="answer">
    <div class="title">
        <div style="cursor: default;" class="result-en">Result</div>
        <div style="cursor: default;" class="result-zh">測驗結果</div>
    </div>

    <div class="wrap">
        <div class="imageWrap">
            <img src="imgs/psychological-test/luca.png" alt="">
        </div>
        <div class="text">
            <h2 style="cursor: default;">你的靈魂伴侶是</h2>
            <h3 style="cursor: default;" style="color: #d4af37;">Luca Kaneshiro</h3>
            <p style="cursor: default;">你的世界觀可能不受同時代人的影響，但你比人們認為的你更有思想。你傾向於執行服務行為，對你來說只是自然的本能，但對接收端的人來說意味著世界。當你關心或愛某事時，它是完全和徹底的真誠，因為否則你不會給它一天的時間。您是親人所愛的人，儘管您甚至可能沒 有意識到這一點。
            </p>
        </div>
    </div>

    <div class="wrapper">
        <a href="psychological-home.php" class="button">再測一次</a>
    </div>
</section>





<?php include __DIR__ . '/parts/html-script.php' ?>

<script>

</script>
<?php include __DIR__ . '/parts/html-last.php' ?>