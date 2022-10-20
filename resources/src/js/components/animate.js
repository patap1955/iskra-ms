document.addEventListener("DOMContentLoaded", () => {
  // Логическая функция вывода анимация
  // elem - массив блоков или отдельный блок для анимации
  // className - класс отвечающий за анимацию

  function animate(elem, className = "animate") {
    let windowCenter = (window.innerHeight / 1.1) + window.scrollY; // ширина экрана * 1.1 + высота на сколько просролили экран
    elem.forEach(el => {

      let observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            return entry.target.classList.add(className);
          }
        });
      });

      let scrollOffset = el.offsetParent.offsetTop + (el.offsetHeight / 2);
      if (windowCenter >= scrollOffset) {
        observer.observe(el);
      }
    });
  }

  let baseIifo = document.querySelectorAll(".base-info__item"); // Массив блоков с услугами
  let aboutAsItem = document.querySelectorAll(".about-as__item");
  let servicesItem = document.querySelectorAll(".services__item");
  let repairItem = document.querySelectorAll(".repair__item");
  let rulesItem = document.querySelectorAll(".rules-item");
  //let questionsItem = document.querySelectorAll(".questions-item");
  let contactsInfoItem = document.querySelectorAll(".contacts__info-item");
  let contactsBlockItem = document.querySelectorAll(".contacts-block-item");

  animate(baseIifo);
  animate(aboutAsItem);
  animate(servicesItem);
  animate(repairItem);
  animate(rulesItem);
  //animate(questionsItem);
  animate(contactsInfoItem);
  animate(contactsBlockItem);
  window.addEventListener("scroll", () => {
    animate(baseIifo);
    animate(aboutAsItem);
    animate(servicesItem);
    animate(repairItem);
    animate(rulesItem);
    //animate(questionsItem);
    animate(contactsInfoItem);
    animate(contactsBlockItem);
  });
});
