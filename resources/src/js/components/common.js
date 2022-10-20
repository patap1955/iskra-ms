import "./questions";
import "./slider";
import "./burger";
import "../plugins/Inputmask";
import "./animate";
import "./modalImg";
import "./antispam";
import "./sticky-menu";
import "./first-screen-img-show";
(function () {
  //Маска для телефона
  let inputMaskPhone = document.getElementById("inputPhone");
  let maskPhone = new Inputmask("+7 (999) 999 99-99");
  maskPhone.mask(inputMaskPhone);

  // Плавный скрол по ссылкам
    document.querySelectorAll('a[href^="#"').forEach(link => {

        link.addEventListener('click', function (e) {
            e.preventDefault();

            let href = this.getAttribute('href').substring(1);

            const scrollTarget = document.getElementById(href);

            const topOffset = document.querySelector('#header').offsetHeight;
            // const topOffset = 0; // если не нужен отступ сверху
            const elementPosition = scrollTarget.getBoundingClientRect().top;
            const offsetPosition = elementPosition - topOffset;

            window.scrollBy({
                top: offsetPosition, behavior: 'smooth'
            });
        });
    });

  const mediaQuery = window.matchMedia("(max-width: 992)");

  function handleTabletChange(e) {
    if (e.matches) {
      console.log('Media Query Matched!');
    }
  }
  mediaQuery.addListener(handleTabletChange);
  handleTabletChange(mediaQuery);

  if (mediaQuery.matches) {
    const navLinks = document.querySelectorAll(".nav__link");
    navLinks.forEach((val) => {
      val.addEventListener("click", () => {
        console.log(this);
        document.querySelector(".nav").classList.remove("active");
        document.querySelector(".burger").classList.remove("active");
        document.querySelector("body").classList.remove("lock");
        document.querySelector(".main").classList.remove("active");
        const burgerSpan = document.querySelectorAll(".burger-span");
        burgerSpan.forEach((val) => {
          val.classList.remove("active");
        });
      });
    });
  }
})();
