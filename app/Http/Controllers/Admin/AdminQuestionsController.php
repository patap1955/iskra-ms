<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class AdminQuestionsController extends AdminController
{
    public function index() {
        $questions = Question::all();
        return view("admin.pages.questions.index", compact("questions"));
    }

    public function create() {
        return view("admin.pages.questions.create");
    }

    public function store(Request $request) {
        $validate = $request->validate([
            "title" => "required|max:255",
            "answer" => "required"
        ]);

        $status = ($request->status) ? true : false;
        $validate["status" ] = $status;
        //dd($validate);
        $question = Question::create($validate);
        session()->flash('success', 'Вопрос  "' . $question->title . '" успешно добавлен');
        return redirect()->route('question.index');
    }

    public function edit(Question $question) {
        return view("admin.pages.questions.edit", compact("question"));
    }

    public function update(Request $request, Question $question) {
        $validate = $request->validate([
            "title" => "required|max:255",
            "answer" => "required"
        ]);

        $status = ($request->status) ? true : false;
        $validate["status" ] = $status;
        $question->update($validate);
        session()->flash('success', 'Вопрос  "' . $question->title . '" успешно отредактирован');
        return redirect()->route('question.index');
    }

    public function destroy(Question $question) {
        $question->delete();
        session()->flash('success', 'Вопрос  "' . $question->title . '" успешно удален');
        return redirect()->route('question.index');
    }
}
