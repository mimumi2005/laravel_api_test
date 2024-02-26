<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Article;

class ArticleController extends Controller
{
    //
    public function test(){
        return response()->json([
            'message' => 'Hello world',
            ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'title'=> 'required|max:255',
            'text' => 'required',
            'views' => 'required|integer',
            ]);
            $article = Article::create($validated);

        return response()->json($article);
    }
    public function index(){
        return response()->json(Article::all());}
}
