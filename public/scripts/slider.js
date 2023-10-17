// window.addEventListener("load", function () {
//   const slider = document.querySelector(".slider");
//   const sliderMain = document.querySelector(".slider-main");
//   const sliderItems = document.querySelectorAll(".slider-item");
//   const nextBtn = document.querySelector(".slider-next");
//   const prevBtn = document.querySelector(".slider-prev");
//   const dotItems = document.querySelectorAll(".slider-dot-item");

//   const sliderItemWidth = sliderItems[0].offsetWidth; // Lấy ra độ rộng của phần tử
//   const slideLength = sliderItems.length; // Số lượng slide
//   // sliderMain.style.width = `${slideLength * sliderItemWidth}px `;
//   let positionX = 0;
//   let index = 0;
//   console.log(sliderItemWidth);
//   nextBtn.addEventListener("click", function () {
//     handleChangeSlide(1);
//   });
//   prevBtn.addEventListener("click", function () {
//     handleChangeSlide(-1);
//   });
//   [...dotItems].forEach((item) =>
//     item.addEventListener("click", function (e) {
//       [...dotItems].forEach((el) => el.classList.remove("active"));
//       e.target.classList.add("active");
//       const slideIndex = parseInt(e.target.dataset.index); // Lấy ra thuộc tính data-index trong các thẻ có class là slide-dot-item
//       index = slideIndex;
//       positionX = -1 * index * sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//     })
//   );
//   function handleChangeSlide(direction) {
//     if (direction === 1) {
//       if (index >= slideLength - 1) {
//         index = slideLength - 1;
//         return;
//       }
//       positionX = positionX - sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//       index++;
//       console.log(index);
//     } else if (direction === -1) {
//       if (index <= 0) {
//         index = 0;
//         return;
//       }
//       positionX = positionX + sliderItemWidth;
//       sliderMain.style = `transform: translateX(${positionX}px)`;
//       index--;
//       console.log("prev slide");
//     }
//     [...dotItems].forEach((el) => el.classList.remove("active"));
//     dotItems[index].classList.add("active");
//   }
// });

$(document).ready(function () {
  $(".slider").slick({
    autoplay: true,
    arrows: true,
    autoplaySpeed: 3000,
    prevArrow:
      "<button type='button' class='slick-arrow slick-slider-prev slick-slider-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-arrow slick-slider-next slick-slider-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    dots: true,
  });
  $(".banner-slide-list").slick({
    autoplay: true,
    arrows: true,
    autoplaySpeed: 3000,
    prevArrow:
      "<button type='button' class='slick-arrow slick-slider-prev slick-slider-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-arrow slick-slider-next slick-slider-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
});

$(document).ready(function () {
  $(".brand-list").slick({
    infinite: true,
    arrows: false,
    slidesToShow: 5,
    slidesToScroll: 4,
    speed: 400,
    autoplay: true,
    autoplaySpeed: 2500,
  });
});

$(document).ready(function () {
  $(".product-new-list").slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    prevArrow:
      "<button type='button' class='slick-product-arrow slick-product-new-prev slick-product-new-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-product-arrow slick-product-new-next slick-product-new-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
});

$(document).ready(function () {
  $(".product-bestsell-list").slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    prevArrow:
      "<button type='button' class='slick-product-arrow slick-product-bestsell-prev slick-product-bestsell-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-product-arrow slick-product-bestsell-next slick-product-bestsell-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
  $(".news-list").slick({
    infinite: true,
    arrows: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 400,
    prevArrow:
      "<button type='button' class='slick-news-arrow slick-news-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-news-arrow slick-news-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
  $(".product-same-list").slick({
    infinite: true,
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    speed: 400,
    prevArrow:
      "<button type='button' class='slick-product-arrow slick-product-same-prev slick-product-same-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-product-arrow slick-product-same-next slick-product-same-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });
});

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
// function currentSlide(n) {
//   showSlides((slideIndex = n));
// }

function showSlides(n) {
  let i;
  let proDetailImage = document.querySelectorAll(".product-detail-image");
  let proSlideImage = document.querySelectorAll(".product-detail-slide-item");
  // let captionText = document.getElementById("caption");
  if (n > proDetailImage.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = proDetailImage.length;
  }
  for (i = 0; i < proDetailImage.length; i++) {
    proDetailImage[i].style.display = "none";
  }
  for (i = 0; i < proSlideImage.length; i++) {
    proSlideImage[i].className = proSlideImage[i].className.replace(
      " active",
      ""
    );
  }
  proDetailImage[slideIndex - 1].style.display = "block";
  proSlideImage[slideIndex - 1].className += " active";
  // captionText.innerHTML = dots[slideIndex - 1].alt;
}

let productDetailSlideImg = document.querySelectorAll(
  ".product-detail-slide-image"
);
for (let i = 0; i < productDetailSlideImg.length; i++) {
  productDetailSlideImg[i].addEventListener("click", function () {
    showSlides((slideIndex = i));
  });
}

let proDetailImage = document.querySelectorAll(".product-detail-image");
