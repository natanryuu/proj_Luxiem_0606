<?php
require './parts/connect-db.php';
$pageName = 'psychological-test4';
$title = '第四題';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<!-- 這邊會放該頁需要的css 如同下面 -->
<!-- <link rel="stylesheet" href="./css/shopping_cart.css"> -->
<link rel="stylesheet" href="css/psychological-test.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<?php include __DIR__ . '/parts/html-navbar.php' ?>
<!-- 這邊會放該頁需要的html -->


<section class="hero-section">
      <div class="card-grid">
          <h2 style="cursor: default;">Q4 你在遊戲中欣賞什麼？</h2>
        <a class="card card-wrap" href="psychological-test5.php">
          <div class="card__background" style="background-image:  url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">1</p>
            <h3 class="card__heading">慷慨的扭蛋率</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test5.php">
          <div class="card__background" style="background-image:  url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">2</p>
            <h3 class="card__heading">身臨其境的故事情節</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test5.php">
          <div class="card__background" style="background-image:  url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">3</p>
            <h3 class="card__heading">藝術風格/角色人物設計</h3>
          </div>
        </li>
        <a class="card card-wrap" href="psychological-test5.php">
          <div class="card__background" style="background-image:  url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">4</p>
            <h3 class="card__heading">大型開放的世界地圖</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test5.php">
            <div class="card__background" style="background-image:  url(imgs/psychological-test/未選擇.png)"></div>
            <div class="card__content-other">
              <p class="card__category">5</p>
              <h3 class="card__heading">配音</h3>
            </div> 
          </a>
      <div>
    </section>

<?php include __DIR__ . '/parts/html-script.php' ?>

<script>

</script>
<?php include __DIR__ . '/parts/html-last.php' ?>