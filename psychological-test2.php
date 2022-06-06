<?php
require './parts/connect-db.php';
$pageName = 'psychological-test2';
$title = '第二題';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<!-- 這邊會放該頁需要的css 如同下面 -->
<!-- <link rel="stylesheet" href="./css/shopping_cart.css"> -->
<link rel="stylesheet" href="./css/psychological-test.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<?php include __DIR__ . '/parts/html-navbar.php' ?>
<!-- 這邊會放該頁需要的html -->


    <section class="hero-section">
      <div class="card-grid">
        <h2 style="cursor: default;">Q2 你對複雜的星巴克飲料單有什麼看法呢？</h2>
        <a class="card card-wrap" href="psychological-test3.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content">
            <p class="card__category">1</p>
            <h3 class="card__heading">我不點複雜的飲料，因為不想讓員工感到麻煩</h3>
            <!-- <h3 class="card__heading">我不點複雜的飲料，因為我為工人感到難過，或者我對菜單上的東西很好。</h3> -->
          </div>
        </a>
        <a class="card card-wrap" href="psychological-test3.php">
          <div class="card__background" style="background-image: url(imgs/psychological-test/未選擇.png)"></div>
          <div class="card__content">
            <p class="card__category">2</p>
            <h3 class="card__heading">我會點複雜的飲料，想要享受飲料裡特殊的風味</h3>
            <!-- <h3 class="card__heading">我點了複雜的飲料，因為我想充分享受它，或者我需要避免某些成分。</h3> -->
          </div>
        </a>
      <div>
    </section>

<?php include __DIR__ . '/parts/html-script.php' ?>

<script>

</script>
<?php include __DIR__ . '/parts/html-last.php' ?>