<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
            $galleries = Gallery::all()->sortByDesc('updated_at');
            return view('admin.gallery.index', compact('galleries'));
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
            return view('admin.gallery.create');
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
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');
		$name_file = time()."_".$file->getClientOriginalName();
		$file->move(\base_path() ."/public/img/img_upload_gallery",$name_file);

        Gallery::create([
            'name' => $request->name,
            'file' => $name_file
        ]);

        return redirect('/admin/gallery')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.gallery.show', compact('gallery'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.gallery.edit', compact('gallery'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
        $request->validate([
            'name' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $gallery->name = $request->name;

        if($request->has('file')) {
            \File::delete(public_path('img/img_upload_gallery/'.$gallery->file));
            $file = $request->file('file');
		    $name_file = time()."_".$file->getClientOriginalName();
            $file->move(\base_path() ."/public/img/img_upload_gallery",$name_file);
            $gallery->file = $name_file;
        }

        $gallery->update();

        return redirect('/admin/gallery')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        if(\File::exists(public_path('img/img_upload_gallery/'.$gallery->file))) {
            \File::delete(public_path('img/img_upload_gallery/'.$gallery->file));
        }

        Gallery::destroy($gallery->id);
        return redirect('/admin/gallery')->with('status', 'Data Berhasil Dihapus!');
    }
}
