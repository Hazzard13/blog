<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Article;

class MainController extends BaseController
{
	public function article($id = null) {
		$article = Article::find($id);

		if(!isset($article)) {
			$article = Article::first();
		}

		return view('articles/' . $article->filename, ['article' => $article]);
	}
}
