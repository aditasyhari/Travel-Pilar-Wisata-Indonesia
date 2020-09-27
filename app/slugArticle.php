<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slugArticle extends Model
{
    //
    protected $table = "articles";

    protected $fillable = ['name', 'slug', 'description', 'place', 'file'];

    public function getRouteKeyName() {
        return 'slug';
    }
}
