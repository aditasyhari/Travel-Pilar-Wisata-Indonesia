<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $articles = Article::all()->sortByDesc('updated_at');
            return view('admin.wisata.all', compact('articles'));
        }
    }

    public function indexBali()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $articles = Article::where('place', '=', 'bali')->get()->sortByDesc('updated_at');
            return view('admin.wisata.bali', compact('articles'));
        }
    }

    public function indexBanyuwangi()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $articles = Article::where('place', '=', 'banyuwangi')->get()->sortByDesc('updated_at');
            return view('admin.wisata.banyuwangi', compact('articles'));
        }   
    }

    public function indexBromo()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            $articles = Article::where('place', '=', 'bromo')->get();
            return view('admin.wisata.bromo', compact('articles'));
        }     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.wisata.add');
        }     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');
		$name_file = time()."_".$file->getClientOriginalName();
		$file->move(\base_path() ."/public/img/img_upload_article",$name_file);

        Article::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'place' => $request->place,
            'file' => $name_file
        ]);

        
        // Article::create($request->all());
        return redirect('/admin/wisata/all')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.wisata.view', compact('article'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.wisata.edit', compact('article'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Todo::where('id', $todo->id)
        //     ->update([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'completed' => $completed
        //     ]);

        $article->name = $request->name;
        $article->slug = Str::slug($request->name);
        $article->description = $request->description;
        $article->place = $request->place;

        if($request->has('file')) {
            \File::delete(public_path('img/img_upload_article/'.$article->file));
            $file = $request->file('file');
		    $name_file = time()."_".$file->getClientOriginalName();
            $file->move(\base_path() ."/public/img/img_upload_article",$name_file);
            $article->file = $name_file;
        }

        $article->update();

        return redirect('/admin/wisata/all')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    
        if(\File::exists(public_path('img/img_upload_article/'.$article->file))) {
            \File::delete(public_path('img/img_upload_article/'.$article->file));
        }

        Article::destroy($article->id);
        return redirect('/admin/wisata/all')->with('status', 'Data Berhasil Dihapus!');
    }
}
