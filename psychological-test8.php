<?php
require './parts/connect-db.php';
$pageName = 'psychological-test8';
$title = 'Your Soulmate is Ike Eveland';

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
            <img src="imgs/psychological-test/ike.png" alt="">
        </div>
        <div class="text">
            <h2 style="cursor: default;">你的靈魂伴侶是</h2>
            <h3 style="cursor: default;" style="color:#348ec7;">Ike Eveland</h3>
            <p style="cursor: default;">你是一個心地善良的人，重視生活中其他人可能覺得微不足道的事情。你周圍的人甚至希望他們能以你的方式看待世界，因為你可以在最微小的事物中找到快樂。但是，另一方面，您也可能會因為最微小的事情而情緒激動/哭泣。人們爭奪您的注意力，因為不可能不完全被您對生活的敏感性和散發出的溫暖所吸引和喜愛。
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