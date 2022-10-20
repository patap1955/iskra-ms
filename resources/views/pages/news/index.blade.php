@extends("master")
@section("title", "Новости")
@section("description", "Наша компания предлагает профессиональные услуги по монтажу, текущемуобслуживанию и ремонту современного эндоскопического оборудования")

@section("css")
@endsection

@section("content")
    <section id="news">
        <div class="container news">
            <h1 class="news__title">Это интересно</h1>
            <div class="news__list">
                <div class="news__item">
                    <div class="news__item-img">
                        <img src="{{ asset("/assets/img/news-img.png") }}">
                    </div>
                    <div class="news__item-content">
                        <div class="">
                            <h2 class="news__item-content-title">Это интересно. Немного истории</h2>
                            <p class="news__item-content-description">История практической эндоскопии начинается с 1950 г., когда на хирургической конференции…</p>
                        </div>
                        <div class="news__item-content-btn">
                            <a href="{{ route("show-news", ["title" => "it-interesting"]) }}" class="news__item-content-link">Читать далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")
@endsection


