<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{

    public function __construct() {
       
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $articles =  Articles::orderBy('updated_at', 'DESC')->get();

        return view('admin.admin')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'headline' => 'required',
            'content' => 'required',
            'img' => 'image|max:1999'
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/uploads', $filenameToStore);
        } else {
            $path = 'images/uploads/default' . rand(1, 4) . '.jpg';
        }
       $article = new Articles;

       $article->title = $request['title'];
       $article->headline = $request['headline'];
       $article->content = $request['content'];
       $article->img = $path;

       $article->save();

       return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Articles::findOrFail($id);
        //return $article->title;
        return view('show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::findOrFail($id);

        return view('admin.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'headline' => 'required',
            'content' => 'required'
        ]);

        $article = Articles::find($id);

            $article->title = $request['title'];
            $article->headline = $request['headline'];
            $article->content = $request['content'];
            $article->img = $request['img'];

            $article->save();

            return redirect('admin');

        // return 'update success';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);

        $article->delete();

        return redirect('admin')->with('success', 'Article Deleted');
    }

}
