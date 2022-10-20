(function () {
  // Плавный скрол по ссылкам
  document.querySelectorAll('a[href^="#"').forEach(link => {

    link.addEventListener('click', function (e) {
      e.preventDefault();

      let href = this.getAttribute('href').substring(1);

      const scrollTarget = document.getElementById(href);

      const topOffset = document.getElementById('header').offsetHeight;
      console.log(topOffset)
      // const topOffset = 0; // если не нужен отступ сверху
      const elementPosition = scrollTarget.getBoundingClientRect().top;
      const offsetPosition = elementPosition - topOffset;

      window.scrollBy({
        top: offsetPosition, behavior: 'smooth'
      });
    });
  });
})()