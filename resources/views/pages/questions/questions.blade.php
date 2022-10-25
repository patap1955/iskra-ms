@extends("master")
@section("title", "Часто задаваемые вопросы")
@section("description", "Наша компания предлагает профессиональные услуги по монтажу, текущемуобслуживанию и ремонту современного эндоскопического оборудования")

@section("css")
@endsection

@section("content")
    <section id="questions">
        <div class="questions container">
            <img class="polygon5" src="{{ asset("assets/img/polygon5.png") }}">

            <h1 class="questions__title">Часто задаваемые вопросы</h1>
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
{{--            <div class="questions__button">--}}
{{--                <a href="#" data-questions-button="0" id="questionsButton" class="btn btn-primary questions-btn">Остальные вопросы</a>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection

@section("scripts")
@endsection



