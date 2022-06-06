<?php
require './parts/connect-db.php';
$pageName = 'psychological-test7';
$title = 'Your Soulmate is Shu Yamino';

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
            <img src="imgs/psychological-test/shu.png" alt="">
        </div>
        <div class="text">
            <h2 style="cursor: default;">你的靈魂伴侶是</h2>
            <h3 style="cursor: default;" style="color:#a660a7;">Shu Yamino</h3>
            <p style="cursor: default;">老實說只是在這裡玩得開心你沒有把事情看得太重，但是努力做好每一件事真誠的人可能會傾向於喜歡你勝過喜歡他們，這可能是因為你很細心並接受其他人純粹是天生的你甚至可能會下意識地行動不同 周圍 不同人，只是為了容納讓他們感覺舒適 - 只是與生俱來地編程在你身上。你是那種人人們感到如釋重負他們的生活。
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