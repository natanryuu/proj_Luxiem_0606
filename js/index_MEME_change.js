//-----------MEME 圖替換-----------

$(".MEME_btn_1").click(function () {
  $(".index_MEME_img img").attr("src", $(".index_MEME_img_1 img").attr("src"));
});

$(".MEME_btn_2").click(function () {
  $(".index_MEME_img img").attr("src", $(".index_MEME_img_2 img").attr("src"));
});

$(".MEME_btn_3").click(function () {
  $(".index_MEME_img img").attr("src", $(".index_MEME_img_3 img").attr("src"));
});

$(".MEME_btn_4").click(function () {
  $(".index_MEME_img img").attr("src", $(".index_MEME_img_4 img").attr("src"));
});

$(".MEME_btn_5").click(function () {
  $(".index_MEME_img img").attr("src", $(".index_MEME_img_5 img").attr("src"));
});

//-----按鈕顯示ｃｓｓ切換

$(".MEME_btn p").click(function (){
  $(this).addClass("active").parents().siblings().find("p").removeClass("active");
})

//-----SC 按鈕 css切換

$(".index_SC_rank_info_btn p").click(function (){
  $(this).addClass("active").siblings().removeClass("active");
})

//----------------創作區切換-------------------

$(function () {
  var $li = $("ul.tab-title li");
  $($li.eq(0).addClass("active").find("a").attr("href"))
    .siblings(".tab-inner")
    .hide();

  $li.click(function () {
    $($(this).find("a").attr("href")).show().siblings(".tab-inner").hide();
    $(this).addClass("active").siblings(".active").removeClass("active");
  });
});
