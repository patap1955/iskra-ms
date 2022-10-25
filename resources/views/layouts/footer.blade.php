<footer id="footer">
    <div class="container footer">
        <div class="footer__block">
            <div class="footer__block-logo">
                <a href="{{ route("index") }}">
                    <img class="logo" src="{{ asset("assets/img/logo-footer.png") }}">
                </a>
            </div>
            <div class="footer__block-info">
                <p>Сайт разработан компанией</p>
                <p><a class="footer__block-info-link" href="https://alex-media.ru" target="_blank">ALEX-MEDIA</a></p>
            </div>
            <p class="footer__copy">© 2022, Все права защищены</p>
        </div>
    </div>
</footer>

<div id="modalImg" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
</div>

<!--  Модельное окно с вопросом от спама -->
<div id="myQuestions" class="modalForm">
    <div class="modal-content-form">
        <span class="closeForm">&times;</span>
        <p class="text-question">Подтвердите что вы не робот. Ответьте на вопрос</p>
        <p class="text-question-answer" id="modelQuestions"></p>
        <div class="modal-form-block">
            <input type="text" id="inputModal" required>
            <button class="btn btn-yellow" id="questionButton">Ответить</button>
            <p class="errorAnswerQuestion"></p>
        </div>
    </div>
</div>
