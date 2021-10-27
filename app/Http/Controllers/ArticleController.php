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

        $article = Article::where(['title'=>$request->title])->first();

        $status = '';
        if(empty($article)){
            Article::create([
                'category_id' => 1,
               'title'=> $request->title,
                'summary' => $request->summary,
                'author' =>$request->author,
                'image' => '',
                'description' => '***'
            ]);
            $status = 'CREADO';
        }else{
            $status = 'YA ESTA CREADO';
        }


        $details = [
            'title' => 'Art title: ' . $request->title,
            'body' => $request->summary . ' ESTADO = ' . $status
        ];
        \Mail::to('juanpablo@gmail.com')->send(new \App\Mail\sendArticle($details));
        

    }
}
