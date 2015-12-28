<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;

class IndexController extends Controller {

    /**
     * Показать все новости.
     *
     */
    public function getNews()
    {
        $news = News::all();
        return view('app', compact('news'));
    }

}