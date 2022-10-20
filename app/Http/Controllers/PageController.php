<?php

namespace App\Http\Controllers;

use App\Mail\ContactsForm;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view("pages.index.index");
    }

    public function news() {
        return view("pages.news.index");
    }

    public function showNews($title) {
        return view("pages.news.show");
    }

//alex.media@bk.ru
    public function formContacts(Request $request) {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        $mail->text = $request->text;
        if (Mail::to('info@iskra.ru')->send(new ContactsForm($mail))) {
            //return back();
            return response()->json(["answer" => "ok"]);
        } else {
            return response()->json(["answer" => "error"]);
        }
    }
}
