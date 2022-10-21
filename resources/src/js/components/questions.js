let containers;
function initDrawers() {
    // Получаем контейнер с контентом
    containers = document.querySelectorAll(".questions__item");
    setHeights();
    wireUpTriggers();
    window.addEventListener("resize", setHeights);
}

window.addEventListener("load", initDrawers);

function setHeights() {
    containers.forEach(container => {
        // Получаем контент
        let content = container.querySelector(".content");
        content.removeAttribute("aria-hidden");
        // Высота контента, который нужно скрыть/показать
        let heightOfContent = content.getBoundingClientRect().height;
        // Задаем пользовательские свойства CSS с высотой контента
        container.style.setProperty("--containerHeight", `${heightOfContent}px`);
        // Когда высота считана и задана
        setTimeout(e => {
            container.classList.add("height-is-set");
            content.setAttribute("aria-hidden", "true");
        }, 0);
    });
}

function wireUpTriggers() {
    containers.forEach(container => {
        // Получаем все элементы-триггеры
        let btn = container.querySelector(".questions__item-trigger");
        // Получаем контент
        let content = container.querySelector(".content");
        btn.addEventListener("click", (e) => {
            e.target.classList.toggle("active");
            btn.setAttribute("aria-expanded", btn.getAttribute("aria-expanded") === "false" ? "true" : "false");
            container.setAttribute(
                "data-drawer-showing",
                container.getAttribute("data-drawer-showing") === "true" ? "false" : "true"
            );
            content.setAttribute(
                "aria-hidden",
                content.getAttribute("aria-hidden") === "true" ? "false" : "true"
            );
        });
    });
}

// (function () {
//
//   // открытие ответа на вопрос
//   const acc = document.getElementsByClassName("questions__accordion");
//   let i;
//
//   for (i = 0; i < acc.length; i++) {
//     acc[i].addEventListener("click", function() {
//       this.classList.toggle("questions__active");
//       const panel = this.nextElementSibling;
//       if (panel.style.maxHeight) {
//         panel.style.maxHeight = null;
//       } else {
//         panel.style.maxHeight = panel.scrollHeight + "px";
//       }
//     });
//   }
//
//
//   //открытие остальных вопросов
//   let questionsStart = 0;
//   const questionsButton = document.getElementById("questionsButton");
//   const questionsList = document.querySelectorAll(".questions-item");
//
//   function countQuestionsActive() {
//     let count = [];
//     questionsList.forEach((element) => {
//       if (element && element.dataset.questionsList == questionsStart) {
//         count.push(element);
//       }
//     });
//     return count;
//   }
//
//   function questionsRender() {
//     let activeQuestions = countQuestionsActive();
//     if (activeQuestions.length > 0) {
//       activeQuestions.forEach((element, key) => {
//         setTimeout(() => {
//           element.style.display = "block";
//           element.classList.add("active");
//         }, 500*key);
//       });
//       questionsStart++;
//       return true;
//     } else {
//       questionsStart = 0;
//       return false;
//     }
//   }
//
//   questionsRender();
//
//   questionsButton.addEventListener("click", (event) => {
//     event.preventDefault();
//     const questionsList = document.querySelectorAll(".questions-item");
//
//     let activeQuestions = [];
//     questionsList.forEach((element) => {
//       if (element && element.dataset.questionsList == questionsStart) {
//         activeQuestions.push(element);
//       }
//     });
//     let questionsListId = event.target.dataset.questionsButton;
//     questionsButton.dataset.questionsButton = Number(questionsListId) + 1;
//
//
//     if (!questionsRender()) {
//       event.target.dataset.questionsButton = "0";
//       questionsStart = 0;
//       questionsList.forEach((element) => {
//         if (element.dataset.questionsList != questionsStart) {
//           element.classList.remove("active");
//           element.removeAttribute("style");
//         }
//       });
//     }
//   });
//
// })();
