<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index() {

		$articles = Article::all();

		return view('articles.index', compact('articles'));
	}


	public function api() {

		$articles = Article::all();

		return $articles;
	}


	public function show($id)  {
	
		$article = Article::find($id);

		//dd($article);
		return view('articles.show', compact('article'));
	}
	
}
