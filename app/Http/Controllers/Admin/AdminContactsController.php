<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactsController extends AdminController
{
    public function index() {
        $contacts = Contact::all()->sortByDesc("id");
        return view("admin.pages.contacts.index", compact("contacts"));
    }
}
