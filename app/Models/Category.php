<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'published'
    ];
 public function products(){
     return $this->hasMany("App\Models\Product");
 }

}