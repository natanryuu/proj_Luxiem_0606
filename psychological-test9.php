<?php
require './parts/connect-db.php';
$pageName = 'psychological-test9';
$title = 'Your Soulmate is Mysta Rias';

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
            <img src="imgs/psychological-test/mysta.png" alt="">
        </div>
        <div class="text">
            <h2 style="cursor: default;">你的靈魂伴侶是</h2>
            <h3 style="cursor: default;" style="color:#c3552b;">Mysta Rias</h3>
            <p style="cursor: default;">你可能想得很少自己，但善於隱藏你有那種感覺。人們不會猜你是多愁善感的類型，尤其是因為你不遺餘力地讓他們不相信，但你的情緒可以如此大到他們消耗你遇見你，某人的你的第一印象可能是持懷疑態度，但曾經完全解開，他們會意識到你是他們想要的人一直在他們身邊。
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