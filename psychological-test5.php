<?php
require './parts/connect-db.php';
$pageName = 'psychological-test5';
$title = '第五題';

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
        <h2 style="cursor: default;">Q5 你最喜歡哪種類型的男生？</h2>
        <a class="card card-wrap" href="psychological-test6.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">1</p>
              <h3 class="card__heading">天然呆純潔</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test7.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">

            <p class="card__category">2</p>
              <h3 class="card__heading">聰明平和寬厚</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test8.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">

            <p class="card__category">3</p>
            <h3 class="card__heading">腹黑抖S</h3>
          </div>
        </li>
        <a class="card card-wrap" href="psychological-test9.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">

            <p class="card__category">4</p>
            <h3 class="card__heading">天才敏銳</h3>
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test10.php">
            <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
            <div class="card__content-other">

              <p class="card__category">5</p>
              <h3 class="card__heading">溫柔會照顧人</h3>
            </div>
          </a>
      <div>
    </section>

<?php include __DIR__ . '/parts/html-script.php' ?>

<script>

</script>
<?php include __DIR__ . '/parts/html-last.php' ?>