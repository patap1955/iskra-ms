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
                        <p class="repair__item-right-text">Оставьте заявку на этом сайте, позвоните по телефону <a class="repair__item-right-text-link" href="tel:+74951233893">+7 (495) 123 38-93</a> или обратитесь прямо в офис</p>
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
                <div data-questions-list="0" class="questions-item active">
                    <div class="questions__accordion">
                        <h4>Какой технический ресурс у медицинского эндоскопического оборудования?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Заводом – изготовителем не установлен ресурс работы оборудования. Срок службы медицинского эндоскопа, например, сильно зависит от частоты использования, манеры проведения исследования, методов очистки и обработки, своевременного профилактическог обслуживания. Запасные части производятся и поставляются не менее 8 лет с момента снятия модели с производства и прекращения продажи конкретной модели. При наличии запасных частей, медицинское оборудование может быть отремонтировано и восстановлено до состояния нового.</p>
                    </div>
                </div>
                <div data-questions-list="0" class="questions-item active">
                    <div class="questions__accordion">
                        <h4>Что такое гарантия, какая она на новое оборудование и на оборудование после ремонта?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Гарантия – бесплатное устранение производственных дефектов, которые проявились после начала эксплуатации. Гарантия не является бесплатным техническим обслуживанием. На новое оборудование устанавливается гарантийный срок – не менее 12 месяцев, на оборудование после ремонта – не менее 6 месяцев на замененные запчасти и работы.</p>
                    </div>
                </div>
                <div data-questions-list="0" class="questions-item active">
                    <div class="questions__accordion">
                        <h4>Нужно ли проводить техническое обслуживание оборудования, которое находится на складе, на хранении, на консервации?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Да, ТО подлежат МИ. в том числе находящиеся в эксплуатации, в запасе, на хранении, на консервации в медицинской организации (ГОСТР 58451-2019 п.4.1)</p>
                    </div>
                </div>
                <div data-questions-list="0" class="questions-item active">
                    <div class="questions__accordion">
                        <h4>Нужно ли проводить техническое обслуживание во время гарантии?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>ТО МИ в гарантийный и послегарантийный период является обязательным условием его безопасной эксплуатации и эффективного применения (ГОСТР 58451-2019 п.4.5)
                            Эксплуатация и применение в медицинских целях МИ, не обеспеченных ТО или снятых с ТО, недопустима. (ГОСТР 58451-2019 п.4.6)
                            ТО в гарантийный период обслуживание проводится в соответствии с общими требованиями по проведению ТО, изложенными в ГОСТР 58451-2019 п.4.13
                            ТО оборудования в гарантийный и послегарантийный период является обязательным условием его безопасной эксплуатации и эффективного применения.</p>
                    </div>
                </div>

                <div data-questions-list="1" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Сколько стоит диагностика неисправного оборудования и как долго ждать результата?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Диагностика оборудования в сервисном центре выполняется бесплатно, обычно в течение часа. Если аппарат был зазгерметиизирован и потребуется сушка - то</p>
                    </div>
                </div>
                <div data-questions-list="1" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Какова продолжительность ремонта ?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Ремонт, даже капитальный, выполняется не более 60 дней с момента оплаты ремонта (в случае необходимости заказа запчастей). Этот срок закреплен документально – в договоре на проведение ремонта. Обычно, срок ремонта не превышает 14 дней (для 90% всех ремонтов).</p>
                    </div>
                </div>
                <div data-questions-list="1" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Каковы наиболее часто встречающиеся поломки эндоскопов?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Чаще всего поломка эндоскопа связана с разгерметизацией: прикусы и порезы резины рабочей части, перфорация инструментального канала. На втором месте - механические поломки: обрыв тяг управления.
                            Попадание влаги внутрь аппарата чревато выходом из строя дорогостоящих электронных компонентов и потерей изображения.</p>
                    </div>
                </div>
                <div data-questions-list="1" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Какова стоимость ремонта?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Стоимость ремонта любого оборудования определяется только после диагностики нашими специалистами. При диагностике выполняется определенный производителем перечень работ и контроль узлов, деталей, параметров, соответствие допускам. При диагностике определяется перечень дефектов и список необходимых к замене запасных частей, на основании этого определяется стоимость ремонта. Стоимость ремонта является окончательной и не изменяется во время ремонта, мы не выставляем дополнительные счета.</p>
                    </div>
                </div>

                <div data-questions-list="2" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Каковы причины выхода из строя эндоскопического оборудования?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>По нашему опыту ремонта эндоскопов можно сказать, что лишь 15% случаев - неисправности, вызванные естественным износом оборудования. До 85% неисправностей наступают вследствие нарушений персоналом правли эксплуатации: набрежность при проведении очистки и дезинфекции, неосторожное обращение при переноске и хранении, использование неподходящих инструментов и средств обработки, "самодеятельность" при попытки ремонта своими силами.</p>
                    </div>
                </div>
                <div data-questions-list="2" class="questions-item">
                    <div class="questions__accordion">
                        <h4>В ходе обработки после проведения исследования выявлена разгерметизация эндоскопа. Что нам необходимо предпринять?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Необходимо вывести эндоскоп из эксплуатации.
                            Незамедлительно направить эндоскоп в сервисный центр для проведения диагностики и ремонта.
                            При вопадании влаги внутрь аппаратапотребуется сушка в специальной камере для минимизации последствий разгерметизации.</p>
                    </div>
                </div>
                <div data-questions-list="2" class="questions-item">
                    <div class="questions__accordion">
                        <h4>Моя модель снята с производства, могу ли я ее отремонтировать и можете ли Вы выполнять ее техническое обслуживание ?</h4>
                    </div>
                    <div class="questions__panel">
                        <p>Запасные части производятся и поставляются не менее 8 лет с момента снятия модели с производства и прекращения продажи конкретной модели. Мы создаем у себя на складе запас запасных частей для таких моделей, и даже после снятия с производства запасных частей, можем выполнять определенные виды ремонтых работ и техническое обслуживание. Каждый конкретный случай необходимо рассматривать индивидуально.</p>
                    </div>
                </div>
            </div>
            <div class="questions__button">
                <a href="#" data-questions-button="0" id="questionsButton" class="btn btn-primary questions-btn">Остальные вопросы</a>
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

