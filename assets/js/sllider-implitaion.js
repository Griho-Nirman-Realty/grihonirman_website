// Document



//   $(".global-carousel").each(function () {
//     var carouselSlide = $(this);

//     // Collect Data
//     function d(data) {
//       return carouselSlide.data(data);
//     }

//     // Custom Arrow Button
//     var prevButton =
//         '<button type="button" class="slick-prev"><i class="' +
//         d("prev-arrow") +
//         '"></i></button>',
//       nextButton =
//         '<button type="button" class="slick-next"><i class="' +
//         d("next-arrow") +
//         '"></i></button>';

//     // Function For Custom Arrow Btn
//     $("[data-slick-next]").each(function () {
//       $(this).on("click", function (e) {
//         e.preventDefault();
//         $($(this).data("slick-next")).slick("slickNext");
//       });
//     });

//     $("[data-slick-prev]").each(function () {
//       $(this).on("click", function (e) {
//         e.preventDefault();
//         $($(this).data("slick-prev")).slick("slickPrev");
//       });
//     });

//     // Check for arrow wrapper
//     if (d("arrows") == true) {
//       if (!carouselSlide.closest(".arrow-wrap").length) {
//         carouselSlide.closest(".container").parent().addClass("arrow-wrap");
//       }
//     }

//     carouselSlide.slick({
//       dots: d("dots") ? true : false,
//       fade: d("fade") ? true : false,
//       arrows: d("arrows") ? true : false,
//       speed: d("speed") ? d("speed") : 1000,
//       sliderNavfor: d("slidernavfor") ? d("slidernavfor") : false,
//       autoplay: d("autoplay") == false ? false : true,
//       infinite: d("infinite") == false ? false : true,
//       slidesToShow: d("slide-show") ? d("slide-show") : 1,
//       adaptiveHeight: d("adaptive-height") ? true : false,
//       centerMode: d("center-mode") ? true : false,
//       autoplaySpeed: d("autoplay-speed") ? d("autoplay-speed") : 8000,
//       centerPadding: d("center-padding") ? d("center-padding") : "0",
//       focusOnSelect: d("focuson-select") == false ? false : true,
//       pauseOnFocus: d("pauseon-focus") ? true : false,
//       pauseOnHover: d("pauseon-hover") ? true : false,
//       variableWidth: d("variable-width") ? true : false,
//       vertical: d("vertical") ? true : false,
//       verticalSwiping: d("vertical") ? true : false,
//       prevArrow: d("prev-arrow")
//         ? prevButton
//         : '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
//       nextArrow: d("next-arrow")
//         ? nextButton
//         : '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
//       rtl: $("html").attr("dir") == "rtl" ? true : false,
//       responsive: [
//         {
//           breakpoint: 1600,
//           settings: {
//             arrows: d("xl-arrows") ? true : false,
//             dots: d("xl-dots") ? true : false,
//             slidesToShow: d("xl-slide-show")
//               ? d("xl-slide-show")
//               : d("slide-show"),
//             centerMode: d("xl-center-mode") ? true : false,
//             centerPadding: "0",
//           },
//         },
//         {
//           breakpoint: 1400,
//           settings: {
//             arrows: d("ml-arrows") ? true : false,
//             dots: d("ml-dots") ? true : false,
//             slidesToShow: d("ml-slide-show")
//               ? d("ml-slide-show")
//               : d("slide-show"),
//             centerMode: d("ml-center-mode") ? true : false,
//             centerPadding: 0,
//           },
//         },
//         {
//           breakpoint: 1200,
//           settings: {
//             arrows: d("lg-arrows") ? true : false,
//             dots: d("lg-dots") ? true : false,
//             slidesToShow: d("lg-slide-show")
//               ? d("lg-slide-show")
//               : d("slide-show"),
//             centerMode: d("lg-center-mode") ? d("lg-center-mode") : false,
//             centerPadding: 0,
//           },
//         },
//         {
//           breakpoint: 992,
//           settings: {
//             arrows: d("md-arrows") ? true : false,
//             dots: d("md-dots") ? true : false,
//             slidesToShow: d("md-slide-show") ? d("md-slide-show") : 1,
//             centerMode: d("md-center-mode") ? d("md-center-mode") : false,
//             centerPadding: 0,
//           },
//         },
//         {
//           breakpoint: 768,
//           settings: {
//             arrows: d("sm-arrows") ? true : false,
//             dots: d("sm-dots") ? true : false,
//             slidesToShow: d("sm-slide-show") ? d("sm-slide-show") : 1,
//             centerMode: d("sm-center-mode") ? d("sm-center-mode") : false,
//             centerPadding: 0,
//           },
//         },
//         {
//           breakpoint: 576,
//           settings: {
//             arrows: d("xs-arrows") ? true : false,
//             dots: d("xs-dots") ? true : false,
//             slidesToShow: d("xs-slide-show") ? d("xs-slide-show") : 1,
//             centerMode: d("xs-center-mode") ? d("xs-center-mode") : false,
//             centerPadding: 0,
//           },
//         },
//         // You can unslick at a given breakpoint now by adding:
//         // settings: "unslick"
//         // instead of a settings object
//       ],
//     });
//   });

$(".global-carousel.home-testimonial").slick({
    dots: true,
    arrows: true,
    slidesToShow: 3,
    autoplay:true,
    speed: 500,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          arrows: true,
          dots: true,
        },
      },
    ],
  });
$(".global-carousel.project-card-carousel").slick({
    dots: true,
    arrows: true,
    slidesToShow: 3,
    autoplay:true,
    speed: 500,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          arrows: true,
          dots: true,
        },
      },
    ],
  });
$(".global-carousel-main-slider").slick({
    dots: false,
    arrows: true,
    slidesToShow: 1,
    autoplay:true,
    speed: 500,
    prevArrow:
      '<button type="button" class="slick-prev"><i class="fas fa-arrow-left"></i></button>',
    nextArrow:
      '<button type="button" class="slick-next"><i class="fas fa-arrow-right"></i></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,        
        },
      },
    ],
  });