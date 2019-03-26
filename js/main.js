$(document).ready(function () {

  // Инициализация плагина Анимации
  AOS.init({
    once: false,
    mirror: true,
    throttleDelay: 99,
    offset: 250
  });

  let lastMouseWheelEvent;
  $(document).on('mousewheel', function (e) {
    if ( e.originalEvent.deltaY > 0) {
      lastMouseWheelEvent = "down";
    } else {
      lastMouseWheelEvent = "up";
    }
  });

  function makeParallaxOn() {
    let lastSlide = 0;

    return function parallaxOn(slide, type) {
      let currentSlide = slide;
      let result = "parallaxOn: NOT";

      if (type === "in" && (lastSlide === currentSlide || lastSlide === 0)) {
        result = "parallaxOn: ON";
        $('.parallax .parallax-container .text').addClass('parallax-active-text');
        $('#parallax-container-text').addClass('visible');
      } else if (type === "out" && ((lastSlide === 1 && currentSlide === 1 && lastMouseWheelEvent === "up") || (lastSlide === 3 && currentSlide === 3 && lastMouseWheelEvent === "down"))) {
        result = "parallaxOn: OFF";
        $('.parallax .parallax-container .text').removeClass('parallax-active-text');
        $('#parallax-container-text').removeClass('visible');
      }

      result = result + " type: " + type + " current: " + currentSlide + " last: " + lastSlide + " lastMouseWheelEvent: " + lastMouseWheelEvent;
      lastSlide = currentSlide;

      return result;
    }
  }

  let parallaxOn = makeParallaxOn();

  document.addEventListener('aos:in', ({
    detail
  }) => {
    parallaxOn($(detail).data("aos-id"), "in");
    // console.log(parallaxOn($(detail).data("aos-id"), "in"));
  });

  document.addEventListener('aos:out', ({
    detail
  }) => {
    parallaxOn($(detail).data("aos-id"), "out");
    // console.log(parallaxOn($(detail).data("aos-id"), "out"));
  });

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
$(window).on("resize", (function (_this) {
  return function (e) {
    return $(document.body).trigger("sticky_kit:recalc");
  };
})(this));