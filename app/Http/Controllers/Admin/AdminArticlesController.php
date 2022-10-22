<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminArticlesController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc("id");
        return view("admin.pages.articles.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $path = "uploads/articles/thumbs";
        $validate = $request->validated();
        $newFileName = time() . "." . $validate["img"]->clientExtension();
        $validate["img"] = $path . "/" .$newFileName;
        $validate["status_view"] = ($validate["status_view"]) ? true : false;
        if (Article::create($validate)) {
            $request->file("img")->storeAs($path, $newFileName, "public");
            return redirect()->route('article.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("admin.pages.articles.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $validate = $request->validated();
        $validate["status_view"] = ($validate["status_view"]) ? true : false;
        $article->update($validate);
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
