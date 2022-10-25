<?php

namespace App\Http\Controllers;

use App\Mail\ContactsForm;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        $questions = Question::all()->where("status", "=", true)->take(4);
        return view("pages.index.index", compact("questions"));
    }

    public function news() {
        $articles = Article::all()->sortByDesc("id");
        return view("pages.news.index", compact("articles"));
    }

    public function showNews(Article $article) {
        return view("pages.news.show", compact("article"));
    }

    public function questions() {
        $questions = Question::all()->where("status", "=", true);
        return view("pages.questions.questions", compact("questions"));
    }

//alex.media@bk.ru
//info@iskra.ru
    public function formContacts(Request $request) {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        $mail->text = $request->text;
        if (Mail::to('slobodchikov1985@yandex.ru')->send(new ContactsForm($mail))) {
            Contact::create($request->all());
            return response()->json(["answer" => "ok"]);
        } else {
            return response()->json(["answer" => "error"]);
        }
    }
}
