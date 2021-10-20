<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function showArticles()
    {
        $articles = Article::all();

        //return json_encode($articles);
        return view('articles', ['data' => $articles]);
        
        // foreach($articles as $article){
        //     dump($article->title .' -> ' . $article->summary);
        // }
    }

    public function articleNew()
    {
        return view('new-article');
    }

    public function articleSave(Request $request)
    {

        Article::create([
            'id_category' => 1,
           'title'=> $request->title,
            'summary' => $request->summary,
            'author' =>$request->author,
            'image' => '',
            'description' => '***'
        ]);

    }
}
