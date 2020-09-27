<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
            $testimonials = Testimonial::all()->sortByDesc('updated_at');
            return view('admin.testimonials.index', compact('testimonials'));
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
            return view('admin.testimonials.create');
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
            'from' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $file = $request->file('file');
		$name_file = time()."_".$file->getClientOriginalName();
		$file->move(\base_path() ."/public/img/img_upload_testimonial",$name_file);

        Testimonial::create([
            'name' => $request->name,
            'description' => $request->description,
            'from' => $request->from,
            'file' => $name_file
        ]);

        return redirect('/admin/testimonials')->with('status', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.testimonials.show', compact('testimonial'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        if(!session()->get('admin/login')){
            return redirect('admin/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin.testimonials.edit', compact('testimonial'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'from' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->from = $request->from;

        if($request->has('file')) {
            \File::delete(public_path('img/img_upload_testimonial/'.$testimonial->file));
            $file = $request->file('file');
		    $name_file = time()."_".$file->getClientOriginalName();
            $file->move(\base_path() ."/public/img/img_upload_testimonial",$name_file);
            $testimonial->file = $name_file;
        }

        $testimonial->update();

        return redirect('/admin/testimonials')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        if(\File::exists(public_path('img/img_upload_testimonial/'.$testimonial->file))) {
            \File::delete(public_path('img/img_upload_testimonial/'.$testimonial->file));
        }

        Testimonial::destroy($testimonial->id);
        return redirect('/admin/testimonials')->with('status', 'Data Berhasil Dihapus!');
    }
}
