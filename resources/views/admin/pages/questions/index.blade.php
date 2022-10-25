@extends("admin")
@section("title", "Список вопросов")
@section("css")
@endsection

@section("content")
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield("title")</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <section class="content">

                <!-- Default box -->
                @include("admin.layouts.session-success")


                <a href="{{ route("question.create") }}" class="btn btn-primary btn-sm mt-3 mb-3">Добавть вопрос</a>
                @foreach($questions as $question)
                <div class="card card-default collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $question->title }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: none;">
                        {{ $question->answer }}
                    </div>
                    <div class="card-footer" style="display: none;">
                        <a href="{{ route("question.edit", ["question" => $question->id]) }}" class="btn btn-info">Редактировать</a>
                        <button form="questionDelete" type="submit" class="btn btn-danger">Удалить</button>
                    </div>
                    <form action="{{ route("question.destroy", ["question" => $question->id]) }}" method="post" id="questionDelete">
                        @csrf
                        @method("DELETE")
                    </form>
                </div>
                @endforeach
                <a href="{{ route("question.create") }}" class="btn btn-primary btn-sm mt-3 mb-3">Добавть вопрос</a>
            </section>
        </div>
    </div>
@endsection

@section("scripts")
@endsection



