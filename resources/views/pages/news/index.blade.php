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
                @foreach($articles as $article)
                <div class="news__item">
                    <div class="news__item-img">
                        <img src="{{ asset("storage/" . $article->img) }}">
                    </div>
                    <div class="news__item-content">
                        <div class="">
                            <h2 class="news__item-content-title">{{ $article->title }}</h2>
                            <p class="news__item-content-description">{{ $article->description }}</p>
                        </div>
                        <div class="news__item-content-btn">
                            <a href="{{ route("show-news", ["article" => $article->slug]) }}" class="news__item-content-link">Читать далее</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section("scripts")
@endsection


