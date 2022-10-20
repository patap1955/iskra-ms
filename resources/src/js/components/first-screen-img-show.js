(function () {
  document.addEventListener("DOMContentLoaded", () => {
    let index = 1;
    showSlides(index);

    // function showSlides() {
    //   let slides = document.querySelectorAll(".screen-show");
    //   slides.forEach((val, key) => {
    //     if (key === index) {
    //       val.classList.remove("noFade");
    //       val.classList.add("fade");
    //     } else {
    //       val.classList.remove("fade");
    //       val.classList.add("noFade");
    //     }
    //   });
    //   index++;
    //   if (index > slides.length - 1) index = 0;
    //   setTimeout(showSlides, 2500);
    // }

    function showSlides() {
      let slides = document.querySelectorAll(".screen-show");
      slides.forEach((val, key) => {
        if (key === index) {
          val.classList.remove("noFade");
          val.classList.add("fade");
        } else {
          val.classList.remove("fade");
          val.classList.add("noFade");
        }
      });
      index++;
      if (index > slides.length - 1) index = 0;
      setTimeout(showSlides, 3000);
    }
  });
})();


