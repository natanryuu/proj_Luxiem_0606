<?php
require './parts/connect-db.php';
$pageName = 'psychological-home';
$title = 'Who Is My Soulmate?';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<!-- 這邊會放該頁需要的css 如同下面 -->
<!-- <link rel="stylesheet" href="./css/shopping_cart.css"> -->
<link rel="stylesheet" href="css/psychological-test-home.css">
<link rel="stylesheet" href="css/psychological-test-home-btn.css">


<?php include __DIR__ . '/parts/html-navbar.php' ?>
  <!-- 這邊會放該頁需要的html -->

  <section class="hero-section">
    <div class="card-grid">
      <h2 style="cursor: default;" >Psychological test</h2>
      <p style="cursor: default;" class="text">趣味心理測驗</p>

      <div class="card-wrap">
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(imgs/psychological-test/FNuZ4aQVcAQFaF1.jpeg)"></div>
        <div class="card__content">
          <p class="card__category"></p>
          <h3 class="card__heading"></h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(imgs/psychological-test//FNuZ4ZjVsAYlKWa.jpeg)"></div>
        <div class="card__content">
          <p class="card__category"></p>
          <h3 class="card__heading"></h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(imgs/psychological-test/FNuZ31UVgAMSN0r.jpeg)"></div>
        <div class="card__content">
          <p class="card__category"></p>
          <h3 class="card__heading"></h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(imgs/psychological-test/FNuZ31VVIAMfEXA.jpeg)"></div>
        <div class="card__content">
          <p class="card__category"></p>
          <h3 class="card__heading"></h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url(imgs/psychological-test/FNuZ318UcAAURpk.jpeg)"></div>
        <div class="card__content">
          <p class="card__category"></p>
          <h3 class="card__heading"></h3>
        </div>
      </a>
      </div>
      


      <form style="cursor: default;" class="qusetion">
        Who Is My Soulmate?
        <input style="cursor: pointer;" class="psycho-user-name" type="text" placeholder="Name 姓名">
      </form>
      <div class="answer">
        <div class="arrow-wrap">
          <span style="cursor: default;">誰是你的靈魂伴侶？</span>
          <svg width="237" height="24" viewBox="0 0 237 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M236.061 13.0607C236.646 12.4749 236.646 11.5251 236.061 10.9393L226.515 1.3934C225.929 0.807611 224.979 0.807611 224.393 1.3934C223.808 1.97919 223.808 2.92893 224.393 3.51472L232.879 12L224.393 20.4853C223.808 21.0711 223.808 22.0208 224.393 22.6066C224.979 23.1924 225.929 23.1924 226.515 22.6066L236.061 13.0607ZM0 13.5H235V10.5H0V13.5Z" fill="#D3B572" />
          </svg>
          <!-- <span class="arrow"></span> -->
        </div>
      </div>

      <div class="wrapper">
        <a href="psychological-test1.php" class="button">NEXT</a>
      </div>
    </div>
  </section>


  <?php include __DIR__ . '/parts/html-script.php' ?>

  <?php include __DIR__ . '/parts/html-last.php' ?>