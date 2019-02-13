<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }


    public function projects() {
        return view('projects');
    }

    public function contact() {
        return view('contact');
    }

    public function news() {
        $articles = Articles::orderBy('updated_at', 'DESC')->take(6)->get();

        return view('news')->with('articles', $articles);
    }

    public function show($id) {
        $article = Articles::findOrFail($id);

        return view('show')->with('article', $article);
    }
}
