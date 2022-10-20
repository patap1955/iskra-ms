(function () {

  // открытие ответа на вопрос
  const acc = document.getElementsByClassName("questions__accordion");
  let i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("questions__active");
      const panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }


  //открытие остальных вопросов
  let questionsStart = 0;
  const questionsButton = document.getElementById("questionsButton");
  const questionsList = document.querySelectorAll(".questions-item");

  function countQuestionsActive() {
    let count = [];
    questionsList.forEach((element) => {
      if (element && element.dataset.questionsList == questionsStart) {
        count.push(element);
      }
    });
    return count;
  }

  function questionsRender() {
    let activeQuestions = countQuestionsActive();
    if (activeQuestions.length > 0) {
      activeQuestions.forEach((element, key) => {
        setTimeout(() => {
          element.style.display = "block";
          element.classList.add("active");
        }, 500*key);
      });
      questionsStart++;
      return true;
    } else {
      questionsStart = 0;
      return false;
    }
  }

  questionsRender();

  questionsButton.addEventListener("click", (event) => {
    event.preventDefault();
    const questionsList = document.querySelectorAll(".questions-item");

    let activeQuestions = [];
    questionsList.forEach((element) => {
      if (element && element.dataset.questionsList == questionsStart) {
        activeQuestions.push(element);
      }
    });
    let questionsListId = event.target.dataset.questionsButton;
    questionsButton.dataset.questionsButton = Number(questionsListId) + 1;


    if (!questionsRender()) {
      event.target.dataset.questionsButton = "0";
      questionsStart = 0;
      questionsList.forEach((element) => {
        if (element.dataset.questionsList != questionsStart) {
          element.classList.remove("active");
          element.removeAttribute("style");
        }
      });
    }
  });

})();
