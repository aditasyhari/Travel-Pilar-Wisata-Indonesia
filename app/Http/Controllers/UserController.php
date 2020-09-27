<?php

namespace App\Http\Controllers;

use App\slugArticle;
use App\Car;
use App\Testimonial;
use App\Gallery;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function wisataBali() {
        $articles = slugArticle::where('place', '=', 'bali')->get()->sortByDesc('updated_at');
        return view('users.wisata.bali', compact('articles'));
    }

    public function wisataBanyuwangi() {
        $articles = slugArticle::where('place', '=', 'banyuwangi')->get()->sortByDesc('updated_at');
        return view('users.wisata.banyuwangi', compact('articles'));
    }

    public function wisataBromo() {
        $articles = slugArticle::where('place', '=', 'bromo')->get();
        return view('users.wisata.bromo', compact('articles'));
    }

    public function show(slugArticle $article) {
                
        return view('users.wisata.show', compact('article'));
    }

    public function carsBali() {
        $cars = Car::all()->sortByDesc('updated_at');
        return view('users.cars.bali', compact('cars'));
    }

    public function carsBanyuwangi() {
        $cars = Car::all()->sortByDesc('updated_at');
        return view('users.cars.banyuwangi', compact('cars'));
    }

    public function carsBromo() {
        $cars = Car::all()->sortByDesc('updated_at');
        return view('users.cars.bromo', compact('cars'));
    }

    public function testimonials() {
        $testimonials = Testimonial::all()->sortByDesc('updated_at');
        return view('users.testimonials', compact('testimonials'));
    }

    public function gallery() {
        $galleries = Gallery::all()->sortByDesc('updated_at');
        return view('users.gallery', compact('galleries'));
    }

    public function about() {
        return view('users.about');
    }
}
