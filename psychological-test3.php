<?php
require './parts/connect-db.php';
$pageName = 'psychological-test3';
$title = '第三題';

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
        <h2 style="cursor: default;">Q3 是什麼原因會讓你很高興與某人成為朋友？</h2>
        <a class="card card-wrap" href="psychological-test4.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">1</p>
            <h3 class="card__heading">他們和我有相似的興趣/個性</h3>
          </div>
        </a>
        <a class="card card-wrap"  href="psychological-test4.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">2</p>
            <h3 class="card__heading">我覺得他們很酷或有信譽</h3>
          </div>
        </a>
        <a class="card card-wrap"  href="psychological-test4.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">3</p>
            <h3 class="card__heading">我覺得可以在他們身邊做我自己</h3>
          </div>
        </li>
        <a class="card card-wrap"  href="psychological-test4.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content-other">
            <p class="card__category">4</p>
            <h3 class="card__heading">他們讓我發笑/在一起很有趣</h3>
          </div>
        </a>
      
        <a class="card card-wrap"  href="psychological-test4.php">
            <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
            <div class="card__content-other">
              <p class="card__category">5</p>
              <h3 class="card__heading">我能感覺到他們關心/愛我</h3>
            </div>
          </a>
      <div>
    </section>

<?php include __DIR__ . '/parts/html-script.php' ?>

<script>

</script>
<?php include __DIR__ . '/parts/html-last.php' ?>