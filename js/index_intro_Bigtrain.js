let step = 0;
const trainliWidth = $(".index_intro_Ike_outwrap").innerWidth();
console.log(trainliWidth, "trainliWidth");

$(".index_intro_chevron_right_wrap svg").click(function () {
  console.log("+1", step);
  step++;
  if (step >= 5) {
    step = 0;
  }
  $(".numerator").text(step + 1);

  stepUpdate();
});

$(".index_intro_chevron_left_wrap svg").click(function () {
  console.log("-1");
  step--;
  if (step <= -1) {
    step = 4;
  }

  stepUpdate();

  $(".numerator").text(step + 1);
});

function stepUpdate() {
  $(".index_intro_Ike_outwrap").css(
    "transform",
    `translateX(${step * -trainliWidth}px)`
  );
}

$(window).resize(function () {
  trainliWidth = $(".index_intro_Ike_outwrap").innerWidth();
  stepUpdate();
  console.log(trainliWidth, "trainliWidth");
});

//---- SC number 切換

//ike
$(".ike_monthly").click(function(){
  $(".ike_rank_nb").text('No. 17');
  $(".ike_rank_m").text('+ NT 1,077,677');
});
$(".ike_weekly").click(function(){
  $(".ike_rank_nb").text('No. 21');
  $(".ike_rank_m").text('+ NT 179,305');
});

//vox
$(".vox_monthly").click(function(){
  $(".vox_rank_nb").text('No. 3');
  $(".vox_rank_m").text('+ NT 2,918,080');
});
$(".vox_weekly").click(function(){
  $(".vox_rank_nb").text('No. 7');
  $(".vox_rank_m").text('+ NT 457,381');
});

//mysta
$(".mysta_monthly").click(function(){
  $(".mysta_rank_nb").text('No. 16');
  $(".mysta_rank_m").text('+ NT 1,089,279');
});
$(".mysta_weekly").click(function(){
  $(".mysta_rank_nb").text('No. 6');
  $(".mysta_rank_m").text('+ NT 453,139');
});

//luca
$(".luca_monthly").click(function(){
  $(".luca_rank_nb").text('No. 13');
  $(".luca_rank_m").text('+ NT 1,404,636');
});
$(".luca_weekly").click(function(){
  $(".luca_rank_nb").text('No. 33');
  $(".luca_rank_m").text('+ NT 123,163');
});

//shu
$(".shu_monthly").click(function(){
  $(".shu_rank_nb").text('No. 7');
  $(".shu_rank_m").text('+ NT 1,758,527');
});
$(".shu_weekly").click(function(){
  $(".shu_rank_nb").text('No. 31');
  $(".shu_rank_m").text('+ NT 128,660');
});