<?php
require './parts/connect-db.php';
$pageName = 'psychological-test10';
$title = 'Your Soulmate is Vox Akuma';

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
            <img src="imgs/psychological-test/vox.png" alt="">
        </div>
        <div class="text">
            <h2 style="cursor: default;">你的靈魂伴侶是</h2>
            <h3 style="cursor: default;" style="color:#960018;">Vox Akuma</h3>
            <p style="cursor: default;">你是那種從不透露他們真實感受的人，並且有意識地在他們的心臟周圍設置了一道保護屏障，但你卻設法給人們一種印象，即你一直存在於他們的生活中，而且你並沒有保留他們的一部分。自己與他們隔絕。但是，在極少數情況下，您確實讓某人進入，您會熱烈地愛他們，渴望與他們分享絕對的一切，並期望他們也向您完全暴露自己。你所做的每一件事都有激情，你的每一個行動和每一句話背後都有意義。在你的軌道上的人可以認為自己很幸運。
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