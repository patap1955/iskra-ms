(function () {
  // Фото во весь экран
  const modal = document.getElementById("modalImg");

  // Получите изображение и вставьте его внутрь модального - используйте его текст "alt" в качестве подписи

  const images = document.querySelectorAll(".slider__item-img");
  images.forEach(function (val) {
    let src = val.dataset.src;
    val.addEventListener("click", (event) => {
      var modalImg = document.getElementById("img01");
      modal.style.display = "block";
      modalImg.src = src;
    });
  });

  // Получить элемент <span>, который закрывает модальный
  const span = document.getElementsByClassName("close")[0];

  // Когда пользователь нажимает на <span> (x), закройте модальное окно
  span.onclick = function () {
    modal.style.display = "none";
  };
})();