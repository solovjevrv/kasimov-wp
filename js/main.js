$(document).ready(function () {
  
  // Инициализация плагина Анимации
  AOS.init({
    mirror: true
  });

  document.addEventListener('aos:in', ({ detail }) => {
    console.log('animated in', detail);
  });

  document.addEventListener('aos:out', ({ detail }) => {
    console.log('animated out', detail);
  });

  // PARALLAX
  //$(".text").stick_in_parent();


  $(".hero-button").click(function () {
    if ($(".hero-button").hasClass('active')) {
      console.log($(".hero-button").hasClass('active'));
      return false;
    } else {
      $(".hero-button").addClass('active');
      $("#hidden").slideToggle(600);
    }
  });

  // for Step-2
  $(".step-2").mouseover(function () {
    $(".step-2 path").css("fill", "#EB7F00");
    $(".circle-2").css("background", "#EB7F00");
    $(".step-1 .line").css("background", "#EB7F00");

  });
  $(".step-2").mouseout(function () {
    $(".step-2 path").css("fill", "#225378");
    $(".circle-2").css("background", "#225378");
    $(".step-1 .line").css("background", "#225378");
  });

  // for Step-2, Step-3
  $(".step-3").mouseover(function () {
    $(".step-2 path").css("fill", "#EB7F00");
    $(".circle-2").css("background", "#EB7F00");
    $(".step-1 .line").css("background", "#EB7F00");
    $(".step-3 path").css("fill", "#EB7F00");
    $(".circle-3").css("background", "#EB7F00");
    $(".step-2 .line").css("background", "#EB7F00");

  });
  $(".step-3").mouseout(function () {
    $(".step-2 path").css("fill", "#225378");
    $(".circle-2").css("background", "#225378");
    $(".step-1 .line").css("background", "#225378");
    $(".step-3 path").css("fill", "#225378");
    $(".circle-3").css("background", "#225378");
    $(".step-2 .line").css("background", "#225378");
  });

  // for Step-2, Step-3, Step-4
  $(".step-4").mouseover(function () {
    $(".step-2 path").css("fill", "#EB7F00");
    $(".circle-2").css("background", "#EB7F00");
    $(".step-1 .line").css("background", "#EB7F00");
    $(".step-3 path").css("fill", "#EB7F00");
    $(".circle-3").css("background", "#EB7F00");
    $(".step-2 .line").css("background", "#EB7F00");
    $(".step-4 path").css("fill", "#EB7F00");
    $(".circle-4").css("background", "#EB7F00");
    $(".step-3 .line").css("background", "#EB7F00");
  });
  $(".step-4").mouseout(function () {
    $(".step-2 path").css("fill", "#225378");
    $(".circle-2").css("background", "#225378");
    $(".step-1 .line").css("background", "#225378");
    $(".step-3 path").css("fill", "#225378");
    $(".circle-3").css("background", "#225378");
    $(".step-2 .line").css("background", "#225378");
    $(".step-4 path").css("fill", "#225378");
    $(".circle-4").css("background", "#225378");
    $(".step-3 .line").css("background", "#225378");
  });

  // for Step-2, Step-3, Step-4, Step-5
  $(".step-5").mouseover(function () {
    $(".step-2 path").css("fill", "#EB7F00");
    $(".circle-2").css("background", "#EB7F00");
    $(".step-1 .line").css("background", "#EB7F00");
    $(".step-3 path").css("fill", "#EB7F00");
    $(".circle-3").css("background", "#EB7F00");
    $(".step-2 .line").css("background", "#EB7F00");
    $(".step-4 path").css("fill", "#EB7F00");
    $(".circle-4").css("background", "#EB7F00");
    $(".step-3 .line").css("background", "#EB7F00");
    $(".step-5 path").css("fill", "#EB7F00");
    $(".circle-5").css("background", "#EB7F00");
    $(".step-4 .line").css("background", "#EB7F00");
  });
  $(".step-5").mouseout(function () {
    $(".step-2 path").css("fill", "#225378");
    $(".circle-2").css("background", "#225378");
    $(".step-1 .line").css("background", "#225378");
    $(".step-3 path").css("fill", "#225378");
    $(".circle-3").css("background", "#225378");
    $(".step-2 .line").css("background", "#225378");
    $(".step-4 path").css("fill", "#225378");
    $(".circle-4").css("background", "#225378");
    $(".step-3 .line").css("background", "#225378");
    $(".step-5 path").css("fill", "#225378");
    $(".circle-5").css("background", "#225378");
    $(".step-4 .line").css("background", "#225378");
  });

});

// Действия при ресайзе страницы
$(window).on("resize", (function(_this) {
  return function(e) {
    return $(document.body).trigger("sticky_kit:recalc");
  };
})(this));