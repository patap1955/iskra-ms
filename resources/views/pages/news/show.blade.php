@extends("master")
@section("title", $article->title)
@section("description", $article->description)

@section("css")
@endsection

@section("content")
    <section id="news">
        <div class="container news">
            <div class="breadcrumbs"></div>
            <h1 class="news__title">{{ $article->title }}</h1>
            <div class="news__content">
                 <p>{!! $article->text  !!} </p>
            </div>

        </div>
    </section>
@endsection

@section("scripts")
@endsection




