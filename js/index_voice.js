//-----按鈕切換css

$(".index_square_btn_wrap p").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});

//-----聲音切換

window.onload = function () {
  //ike
  const audio1 = document.getElementById("ike_voice_01");
  audio1.pause(); //打開頁面時無音樂
  const audio2 = document.getElementById("ike_voice_02");
  audio2.pause();
  const audio3 = document.getElementById("ike_voice_03");
  audio3.pause();
  const audio4 = document.getElementById("ike_voice_04");
  audio4.pause();
  //vox
  const audio5 = document.getElementById("vox_voice_01");
  audio5.pause();
  const audio6 = document.getElementById("vox_voice_02");
  audio6.pause();
  const audio7 = document.getElementById("vox_voice_03");
  audio7.pause();
  const audio8 = document.getElementById("vox_voice_04");
  audio8.pause();
  //mysta
  const audio9 = document.getElementById("mysta_voice_01");
  audio9.pause();
  const audio10 = document.getElementById("mysta_voice_02");
  audio10.pause();
  const audio11 = document.getElementById("mysta_voice_03");
  audio11.pause();
  const audio12 = document.getElementById("mysta_voice_04");
  audio12.pause();
  //luca
  const audio13 = document.getElementById("luca_voice_01");
  audio13.pause();
  const audio14 = document.getElementById("luca_voice_02");
  audio14.pause();
  const audio15 = document.getElementById("luca_voice_03");
  audio15.pause();
  const audio16 = document.getElementById("luca_voice_04");
  audio16.pause();
  //shu
  const audio17 = document.getElementById("shu_voice_01");
  audio17.pause();
  const audio18 = document.getElementById("shu_voice_02");
  audio18.pause();
  const audio19 = document.getElementById("shu_voice_03");
  audio19.pause();
  const audio20 = document.getElementById("shu_voice_04");
  audio20.pause();
};

// voice＿ike

function playike01() {
  const audio1 = document.getElementById("ike_voice_01");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("ike_voice_bt_01");
  } else {
    audio1.pause();
    audio1.currentTime = 0; //音樂從頭播放
    document.getElementById("ike_voice_bt_01");
  }
}

function playike02() {
  const audio1 = document.getElementById("ike_voice_02");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("ike_voice_bt_02");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("ike_voice_bt_02");
  }
}

function playike03() {
  const audio1 = document.getElementById("ike_voice_03");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("ike_voice_bt_03");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("ike_voice_bt_03");
  }
}

function playike04() {
  const audio1 = document.getElementById("ike_voice_04");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("ike_voice_bt_04");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("ike_voice_bt_04");
  }
}

// voice＿vox

function playike05() {
  const audio1 = document.getElementById("vox_voice_01");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("vox_voice_bt_01");
  } else {
    audio1.pause();
    audio1.currentTime = 0; //音樂從頭播放
    document.getElementById("vox_voice_bt_01");
  }
}

function playike06() {
  const audio1 = document.getElementById("vox_voice_02");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("vox_voice_bt_02");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("vox_voice_bt_02");
  }
}

function playike07() {
  const audio1 = document.getElementById("vox_voice_03");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("vox_voice_bt_03");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("vox_voice_bt_03");
  }
}

function playike08() {
  const audio1 = document.getElementById("vox_voice_04");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("vox_voice_bt_04");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("vox_voice_bt_04");
  }
}

// voice＿mysta

function playike09() {
  const audio1 = document.getElementById("mysta_voice_01");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("mysta_voice_bt_01");
  } else {
    audio1.pause();
    audio1.currentTime = 0; //音樂從頭播放
    document.getElementById("mysta_voice_bt_01");
  }
}

function playike10() {
  const audio1 = document.getElementById("mysta_voice_02");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("mysta_voice_bt_02");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("mysta_voice_bt_02");
  }
}

function playike11() {
  const audio1 = document.getElementById("mysta_voice_03");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("mysta_voice_bt_03");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("mysta_voice_bt_03");
  }
}

function playike12() {
  const audio1 = document.getElementById("mysta_voice_04");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("mysta_voice_bt_04");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("mysta_voice_bt_04");
  }
}

// voice＿luca

function playike13() {
  const audio1 = document.getElementById("luca_voice_01");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("luca_voice_bt_01");
  } else {
    audio1.pause();
    audio1.currentTime = 0; //音樂從頭播放
    document.getElementById("luca_voice_bt_01");
  }
}

function playike14() {
  const audio1 = document.getElementById("luca_voice_02");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("luca_voice_bt_02");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("luca_voice_bt_02");
  }
}

function playike15() {
  const audio1 = document.getElementById("luca_voice_03");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("luca_voice_bt_03");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("luca_voice_bt_03");
  }
}

function playike16() {
  const audio1 = document.getElementById("luca_voice_04");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("luca_voice_bt_04");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("luca_voice_bt_04");
  }
}

// voice＿shu

function playike17() {
  const audio1 = document.getElementById("shu_voice_01");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("shu_voice_bt_01");
  } else {
    audio1.pause();
    audio1.currentTime = 0; //音樂從頭播放
    document.getElementById("shu_voice_bt_01");
  }
}

function playike18() {
  const audio1 = document.getElementById("shu_voice_02");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("shu_voice_bt_02");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("shu_voice_bt_02");
  }
}

function playike19() {
  const audio1 = document.getElementById("shu_voice_03");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("shu_voice_bt_03");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("shu_voice_bt_03");
  }
}

function playike20() {
  const audio1 = document.getElementById("shu_voice_04");
  if (audio1.paused) {
    audio1.play();
    document.getElementById("shu_voice_bt_04");
  } else {
    audio1.pause();
    audio1.currentTime = 0;
    document.getElementById("shu_voice_bt_04");
  }
}
