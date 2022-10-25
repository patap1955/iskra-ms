@extends("admin")
@section("title", "Редактирование вопроса - " . $question->title)
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Форма добавления</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <a href="{{ route("question.index") }}" class="btn btn-primary btn-sm mt-3 mb-3 ml-3">Список вопросов</a>

                        <form method="post" action="{{ route("question.update", ["question" => $question->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="questionInputTitle">Заголовок вопроса</label>
                                    <input name="title" type="text" class="form-control" id="questionInputTitle" value="{{ old("title", $question->title) }}" required>
                                    @error("title")
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Ответ на вопрос</label>
                                    <textarea name="answer" class="form-control" rows="3">{{ old("title", $question->answer) }}</textarea>
                                    @error("answer")
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input
                                        name="status"
                                        type="checkbox"
                                        class="form-check-input"
                                        id="exampleCheck1"
                                        {{ ($question->status === true) ? "checked" : null }}
                                    >
                                    <label class="form-check-label" for="exampleCheck1">Отображать на сайте?</label>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
        </div>
    </div>
@endsection

@section("scripts")

@endsection





