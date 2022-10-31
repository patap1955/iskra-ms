<!DOCTYPE html>
<html lang="ru">
    <head>
        @include("layouts.meta")
    </head>

    <body>
    @include("layouts.header")
        <main class="main">
            @yield("content")
            <section id="form">
                <div class="container contacts">
                    <h2 class="contacts__title">Свяжитесь с нами</h2>
                    <div class="contacts__info">
                        <div class="contacts__info-item animate-left">
                            <span class="contacts__info-item-icon"><img src="{{ asset("assets/img/phone.svg") }}"></span>
                            <p class="contacts__info-item-text"><a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></p>
                        </div>
                        <div class="contacts__info-item animate-left">
                            <span class="contacts__info-item-icon"><img src="{{ asset("assets/img/mail.svg") }}"></span>
                            <p class="contacts__info-item-text"><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></p>
                        </div>
                        <div class="contacts__info-item animate-right">
                            <span class="contacts__info-item-icon"><img src="{{ asset("assets/img/point.svg") }}"></span>
                            <p class="contacts__info-item-text">141701 г. Долгопрудный,</br> Лихачевский проезд, д.6с1, оф.517</p>
                        </div>
                        <div class="contacts__info-item animate-right">
                            <span class="contacts__info-item-icon"><img src="{{ asset("assets/img/watch.svg") }}"></span>
                            <p class="contacts__info-item-text">08.00 - 18.00 Пн-Пт</br> Без перерывов</p>
                        </div>
                    </div>
                    <div class="contacts__block">
                        <div class="contacts__block-form contacts-block-item animate-left">
                            <p class="contacts__block-form-text">Заполните форму обратной связи и уточните время, когда удобно поговорить.</p>
                            <form class="form" action="#" method="post" id="formContacts">
                                <div class="form-group">
                                    <input id="inputName" class="form-control" type="text" name="name" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input id="inputPhone" class="form-control" type="tel" name="phone" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <input id="inputText" class="form-control" type="text" name="text" placeholder="Комментарий">
                                </div>
                                <button id="formBtn" class="btn btn-yellow contacts-btn">Оставить заявку</button>
                                <div id="errorBlock" class="error-block"></div>
                            </form>
                        </div>
                        <div class="contacts__block-map contacts-block-item animate-right">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9f9401a00579d33a707d6d71b58c5cc7ec4ee81dc7e815adabbbfa404f2ae97a&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <img src="{{ asset("assets/img/polygon6.png") }}" class="polygon6">
                    </div>
                </div>
            </section>
        </main>
        @include("layouts.footer")
        <script src="{{ mix('/assets/js/main.js') }}"></script>
        @yield("scripts")
    </body>
</html>
