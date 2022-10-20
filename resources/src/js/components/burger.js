// (function () {
//   const burger = document.querySelector(".burger");
//   burger.addEventListener("click", function () {
//     // document.getElementById("header").classList.toggle("header-burger");
//     document.querySelector(".nav").classList.toggle("active");
//     document.querySelector(".burger").classList.toggle("active");
//     document.querySelector("body").classList.toggle("lock");
//     // document.querySelector('.nav__phone').classList.toggle('active');
//     document.querySelector(".main").classList.toggle("active");
//   });
// })();
(function() {
  const burger = document.querySelector(".burger");
  burger.addEventListener("click", () => {
    document.querySelector(".nav").classList.toggle("active");
    document.querySelector(".burger").classList.toggle("active");
    document.querySelector("body").classList.toggle("lock");
    document.querySelector(".main").classList.toggle("active");
    const burgerSpan = document.querySelectorAll(".burger-span");
    burgerSpan.forEach((val) => {
      val.classList.toggle("active");
    });
  });
})();
