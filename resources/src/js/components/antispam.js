import axios from "axios";
import Toast from "toastr";

(function () {

  const inputName = document.getElementById("inputName");
  const inputPhone = document.getElementById("inputPhone");
  const inputText = document.getElementById("inputText");
  const formBtn = document.getElementById("formBtn");
  let randQuestions = null;
  const myQuestions = document.getElementById("myQuestions");

  let errorInput = "";

  formBtn.addEventListener("click", (event) => {
    event.preventDefault();
    errorInput = "";

    if (inputName.value == "") errorInput += "<p>Вы не ввели Ваше имя !!!</p>";
    if (inputPhone.value == "") errorInput += "<p>Вы не ввели свой номер телефона</p>";

    if (errorInput != "") {
      document.getElementById("errorBlock").innerHTML = errorInput;
    } else {
      let questions = [
        ["Сколько будет два плюс два? (Ответ напишите цифрой)", 4],
        ["Какой сейчас век? (Ответ напишите цифрой)", 21]
      ];

      let rand = Math.floor(Math.random()*questions.length);
      randQuestions = questions[rand];
      // Получить модальный

      // Получить элемент <span>, который закрывает модальный
      let span = document.getElementsByClassName("closeForm")[0];

      // Когда пользователь нажимает на кнопку, откройте модальный
      myQuestions.style.display = "block";


      // Когда пользователь нажимает на <span> (x), закройте модальное окно
      span.onclick = () => {
        myQuestions.style.display = "none";
      };

      // Когда пользователь щелкает в любом месте за пределами модального, закройте его
      window.onclick = (event) => {
        if (event.target == myQuestions) myQuestions.style.display = "none";
      };

      let modelQuestions = document.getElementById("modelQuestions");
      modelQuestions.innerText = randQuestions[0];
    }

  });


  document.getElementById("questionButton").addEventListener("click", function () {
    let inputModal = document.getElementById("inputModal");
    let errorInput = "";
    let errorAnswerQuestion = document.querySelector(".errorAnswerQuestion");
    if (inputModal.value == "") errorInput = "Вы не ответили на вопрос";
    if (inputModal.value != randQuestions[1]) errorInput = "Ответ на вопрос не верный, попробуйте еще раз";
    if (errorInput !== "") {
      errorAnswerQuestion.innerText = errorInput;
    } else {
      errorAnswerQuestion.innerText = "";
      const name = inputName.value;
      const phone = inputPhone.value;
      const text = inputText.value;
      axios.post("/form-contacts",{
        name, phone, text,
      }).then(function (response) {
          if (response.status === 200) {
              document.getElementById("myQuestions").style.display = "none";
              document.getElementById("formContacts").reset();
              Toast.success("Ваше сообщение успешно отправленно", {interval: 30000});
          }
      }).catch(function (error) {
            console.log(error);
        });
    }
  });
})();
