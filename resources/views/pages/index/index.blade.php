@extends("master")
@section("title", "Ремонт и монтаж эндоскопического оборудования")
@section("description", "Наша компания предлагает профессиональные услуги по монтажу, текущемуобслуживанию и ремонту современного эндоскопического оборудования")

@section("css")
@endsection

@section("content")
    <div>
        <div class="container first-screen">
            <div class="first-screen__info">
                <h1 class="first-screen__info-title">Работаем с эндоскопическим оборудованием японских производителей OLYMPUS, PENTAX, FUJIFILM</h1>
                <p class="first-screen__info-text">Наша компания осуществляет профессиональные услуги по монтажу, текущему
                    обслуживанию и ремонту современного эндоскопического оборудования</p>
                <div class="first-screen__info-btn">
                    <a href="#form" class="btn btn-yellow header-btn">Оставить заявку</a>
                </div>
            </div>
            <div class="first-screen__img">
                <img class="first-screen__img-item screen-show" id="image_1" src="{{ asset("assets/img/first-screen.png") }}">
                <img class="first-screen__img-item screen-show" id="image_2" src="{{ asset("assets/img/first-screen-1.png") }}">
                <img class="first-screen__img-item screen-show" id="image_3" src="{{ asset("assets/img/first-screen-2.png") }}">
            </div>
        </div>
    </div>
    <section id="baseInfo">
        <div class="container base-info">
            <div class="base-info__item animate-left">
                <img class="base-info__item-icon" src="{{ asset("assets/img/base-info-icon-1.svg") }}">
                <h3 class="base-info__item-title">Бесплатная диагностика</h3>
            </div>
            <div class="base-info__item animate-left">
                <img class="base-info__item-icon" src="{{ asset("assets/img/base-info-icon-2.svg") }}">
                <h3 class="base-info__item-title">Команда профессионалов</h3>
            </div>
            <div class="base-info__item animate-right">
                <img class="base-info__item-icon" src="{{ asset("assets/img/base-info-icon-3.svg") }}">
                <h3 class="base-info__item-title">Гарантия 9 месяцев</h3>
            </div>
            <div class="base-info__item animate-right">
                <img class="base-info__item-icon" src="{{ asset("assets/img/base-info-icon-4.svg") }}">
                <h3 class="base-info__item-title">Обслуживание по всей России</h3>
            </div>
        </div>
    </section>
    <section id="aboutAs">
        <div class="container about-as">
            <div class="about-as__img about-as__item animate-left">
                <img src="{{ asset("assets/img/about-as.png") }}">
            </div>

            <div class="about-as__info about-as__item animate-right">
                <h2 class="about-as__info-title">О нас</h2>
                <div class="about-as__info-text">
                    <p>Компания «ИСКРА» — это коллектив экспертов высочайшей квалификации.</p>
                    <p>Опыт большинства сотрудников компании в сфере обслуживания и ремонта
                        медицинского оборудования – более 25 лет. Инженеры и техники проходили
                        обучение по ремонту оборудования непосредственно на заводах в Японии и
                        Германии и сертифицированы для проведения обслуживания и ремонта.</p>
                    <div class="about-as__info-text-btn">
                        <a href="{{ route("news") }}" class="btn btn-primary about-as-btn">Это интересно</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="services">
        <img class="polygon3" src="{{ asset("assets/img/polygon3.svg") }}">
        <div class="container services">
            <h2 class="services__title">Какие услуги мы предоставляем</h2>
            <p class="services__text">Мы предлагаем профессиональные услуги по монтажу, текущему обслуживанию и ремонту современного эндоскопического оборудования</p>
            <div class="services__list">
                <div class="services__item animate-left">
                    <div class="services__item-body">
                        <div class="services__item-body-img">
                            <img src="{{ asset("assets/img/services-item-1.png") }}">
                        </div>
                        <h3 class="services__item-body-title">Монтаж</h3>
                        <p class="services__item-body-text">В нашей компании
                            есть профессионалы
                            высокой
                            квалификации и с
                            большим опытом
                            работы по монтажу
                            оборудования</p>
                    </div>
                    <div class="services__item-footer">
                        <a href="#form" class="btn btn-primary services-btn">Подробнее</a>
                    </div>
                </div>
                <div class="services__item animate-opasity">
                    <div class="services__item-body">
                        <div class="services__item-body-img">
                            <img src="{{ asset("assets/img/services-item-2.png") }}">
                        </div>
                        <h3 class="services__item-body-title">Обслуживание</h3>
                        <p class="services__item-body-text">Мы оказываем услуги по техническому обслуживанию согласно нормативным требованиям законодательства и в строгом соответствии с условиями производителей</p>
                    </div>
                    <div class="services__item-footer">
                        <a href="#form" class="btn btn-primary services-btn">Подробнее</a>
                    </div>
                </div>
                <div class="services__item animate-right">
                    <div class="services__item-body">
                        <div class="services__item-body-img">
                            <img src="{{ asset("assets/img/services-item-3.png") }}">
                        </div>
                        <h3 class="services__item-body-title">Ремонт</h3>
                        <p class="services__item-body-text">После проведения
                            диагностики наши
                            специалисты сообщат
                            вам причину выхода
                            оборудования из строя,
                            стоимость запчастей и
                            работ.</p>
                    </div>
                    <div class="services__item-footer">
                        <a href="#form" class="btn btn-primary services-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="repair">
        <div class="container repair">
            <img class="polygon4" src="{{ asset("assets/img/polygon4.png") }}">
            <h2 class="repair__title">Схема ремонта медицинского оборудования</h2>
            <div class="repair__list">
                <div class="repair__item animate-left">
                    <div class="repair__item-left">
                        <img class="repair__item-left-icon" src="{{ asset("assets/img/repair-1.png") }}">
                    </div>
                    <div class="repair__item-right">
                        <h3 class="repair__item-right-title">Сообщите нам о проблеме</h3>
                        <p class="repair__item-right-text">Оставьте заявку на этом сайте, позвоните по&nbspтелефону <a class="repair__item-right-text-link" href="tel:+74951233893">+7&nbsp(495)&nbsp123&nbsp38&nbsp93</a> или обратитесь прямо в офис</p>
                    </div>
                </div>
                <div class="repair__item animate-right">
                    <div class="repair__item-left">
                        <img class="repair__item-left-icon" src="{{ asset("assets/img/repair-2.png") }}">
                    </div>
                    <div class="repair__item-right">
                        <h3 class="repair__item-right-title">Диагностика</h3>
                        <p class="repair__item-right-text">Специалист выявит неисправность и соориентирует вас о стоимости и времени ремонта</p>
                    </div>
                </div>
                <div class="repair__item animate-left">
                    <div class="repair__item-left">
                        <img class="repair__item-left-icon" src="{{ asset("assets/img/repair-3.png") }}">
                    </div>
                    <div class="repair__item-right">
                        <h3 class="repair__item-right-title">Ремонт и замена компонентов</h3>
                        <p class="repair__item-right-text">Ремонт 80% оборудований занимает от 30-ти минут до 3-х рабочих дней, остальное 20% - от 5-ти дней</p>
                    </div>
                </div>
                <div class="repair__item animate-right">
                    <div class="repair__item-left">
                        <img class="repair__item-left-icon" src="{{ asset("assets/img/repair-4.png") }}">
                    </div>
                    <div class="repair__item-right">
                        <h3 class="repair__item-right-title">Оборудование снова работает</h3>
                        <p class="repair__item-right-text">Проверяете, оплачиваете и получаете документы на гарантию до 1 года</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="rules">
        <div class="container rules">
            <div class="rules__left rules-item animate-left">
                <h3 class="rules__left-title">Наши правила</h3>
                <p class="rules__left-text">Большинство наших сотрудников воспитаны японскими наставниками «старой школы». Поэтому в своей работе мы придерживаемся таких правил:</p>
                <div class="rules__left-list">
                    <div class="rules__left-item">
                        <span class="rules__left-item-icon"><img src="{{ asset("assets/img/rules-icon-list.png") }}"></span>
                        <p class="rules__left-item-text">Доктор заботится о здоровье пациента, а инженер — о бесперебойной работе оборудования</p>
                    </div>
                    <div class="rules__left-item">
                        <span class="rules__left-item-icon"><img src="{{ asset("assets/img/rules-icon-list.png") }}"></span>
                        <p class="rules__left-item-text">Диагностика неисправностей оборудования — бесплатно</p>
                    </div>
                    <div class="rules__left-item">
                        <span class="rules__left-item-icon"><img src="{{ asset("assets/img/rules-icon-list.png") }}"></span>
                        <p class="rules__left-item-text">Качество услуг — наш приоритет</p>
                    </div>
                </div>
            </div>
            <div class="rules__right rules-item animate-right">
                <img src="{{ asset("assets/img/rules.png") }}">
            </div>
        </div>
    </section>
    <section id="questions">
        <div class="questions container">
            <img class="polygon5" src="{{ asset("assets/img/polygon5.png") }}">

            <h2 class="questions__title">Часто задаваемые вопросы</h2>
            <div class="questions__list">
                @foreach($questions as $question)
                <div data-questions-list="0" class="questions-item active">
                    <div class="questions__accordion">
                        <h4>{{ $question->title }}</h4>
                    </div>
                    <div class="questions__panel">
                        <p>{{ $question->answer }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="questions__button">
                <a href="{{ route("questions") }}" class="btn btn-primary questions-btn">Остальные вопросы</a>
            </div>
        </div>
    </section>
    <section id="licenses">
        <div class="container licenses">
            <h2 class="licenses__title">Наши лицензии</h2>
            <div class="slider" data-slider="itc-slider" data-loop="true" data-swipe="true">
                <div class="slider__wrapper">
                    <div class="slider__items">
                        <div class="slider__item">
                            <img data-src="assets/img/licenses-1.jpg" class="slider__item-img" src="{{ asset("assets/img/licenses-1.jpg") }}">
                        </div>
                        <div class="slider__item">
                            <img data-src="assets/img/licenses-2.jpg" class="slider__item-img" src="{{ asset("assets/img/licenses-2.jpg") }}">
                        </div>
                        <div class="slider__item">
                            <img data-src="assets/img/licenses-3.jpg" class="slider__item-img" src="{{ asset("assets/img/licenses-3.jpg") }}">
                        </div>
                        <div class="slider__item">
                            <img data-src="assets/img/licenses-4.jpg" class="slider__item-img" src="{{ asset("assets/img/licenses-4.jpg") }}">
                        </div>
                        <div class="slider__item">
                            <img data-src="assets/img/licenses-5.jpg" class="slider__item-img" src="{{ asset("assets/img/licenses-2.jpg") }}">
                        </div>
                    </div>
                </div>
                <button class="slider__control" data-slide="prev"></button>
                <button class="slider__control" data-slide="next"></button>
            </div>
        </div>
    </section>
@endsection

@section("scripts")
@endsection

